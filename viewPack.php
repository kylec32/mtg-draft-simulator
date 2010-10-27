<?php

session_start();
$pick=$_GET['pick'];
$packFrom=$_GET['pack'];
$packOrder=$_GET['packorder'];
$view="pack";
$PackOn=$_SESSION["draft"]["packOn"];
$turnOn=$_SESSION["draft"]["turn"];
if( $pick != "na")
{
	$mypackNumb=count($_SESSION["draft"]["mypack"]);
	if($turnOn==2)
	{
		$mypackNumb--;
	}
	$_SESSION["draft"]["mypack"][$mypackNumb]=$_SESSION["draft"][$packFrom][$packOrder];
	$_SESSION["draft"][$packFrom][$packOrder]["inUse"]=1;
}
if($_SESSION["draft"]["turn"] >=15)
{
	$view = "hand";
}
else
{
	/*AI using recursive functions 
		V 1.0
		Functions
			1)AI - sorts out the used and unused cards
			2)AIRecur - first sort. if a zero size is returned here run again. if size > 1 send to AIMakSmR 
			3)AIMakSmR - shrinks the list down. If zero size for new list push old list to AIfinRec
			4)AIfinRec - only runs once. randomly selects card. 
		Notes-
		v1.0 only takes in pick from card
		inprogress v1.1 - optimization. 
		inprogress v2.0 - takes in color for pick. 
	*/
	function AI($packOn , $turn)//sorts our the used and unused cards
	{
		$tempPack;
		$poSt=0; //Positon in $tempPack
		for($i=0; $i < 14; $i++)
		{
			if( $packOn[$i]["inUse"] == 0)
			{
			$tempPack[$poSt] = $packOn[$i];
			$poSt++;
			}
			
		}
		
		return AIRecur($tempPack, $turn);
	}
	function AIRecur($packOn, $turn)// narrows the cards down.
	{
		$tempCard;
		$tempPack;
		$poSt=0; //Positon in $tempPack
		
		for($i=0; $i <count($packOn,  COUNT_NORMAL); $i++)
		{
			if($packOn[$i]["pick"] <= $turn)
			{
				$tempPack[$poSt]=$packOn[$i];
				$poSt++;
			}
		}
		if($poSt == 0) // if zero cards in $tempPack then retry with orginal pack plus a higher turn count.
		{
			return AIRecur($packOn, $turn +=1);
		}
		else if($poSt > 1)// if more than one card send to AIMakeSmR to try and decresse that number
		{
			return AIMakSmR($tempPack, $turn -=1);
		}
		else
		{
			return AIfinRec($tempPack, $turn);
			
		}
	}
	function AIMakSmR($packOn, $turn)// Makes the pack list smaller. Once it runs through this function it will never run through AIRecur
	{
		$tempCard;
		$tempPack;
		$poSt=0; //Positon in $tempPack
		
		for($i=0; $i <count($packOn,  COUNT_NORMAL); $i++)
		{
			if($packOn[$i]["pick"] <= $turn)
			{
				$tempPack[$poSt]=$packOn[$i];
				$poSt++;
			}
		}
		if($poSt = 1)
		{
			return AIfinRec($packOn, $turn);
		}
		else if( count($tempPack) > 1)// if $tempPack is larger than one try it again with a smaller $turn.
		{
			return AIMakSmR($tempPack, $turn -=1);
		}
		else // must be one card so hand it off to AIfinRec
		{
			return AIfinRec($tempPack, $turn);
			
		}
	}	
	function AIfinRec($packOn, $turn)// final function. only runs once and will return a value. 
	{
		if(count($packOn) == 1)
		{
			return $packOn[0]["packp"];
		}
		else
		{
			$tempRan=rand(0,(count($packOn)-1)); //randomly picks a card in the pack. 
			$temp=$packOn[$tempRan]["packp"];
			return $temp;
		}
	}
	
	
	/* end of AI */
	
	
	for($i=1; $i<=8; $i++)
	{
		if($i != $PackOn)
		{
			$tempPack=$_SESSION["draft"]["p".$i];
			$Pick=AI($tempPack, $turnOn);
			$_SESSION["draft"]["p".$i][$Pick]["inUse"] = 1;
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/picControl.css" />
<title>View Pack</title>
</head>

<body>
<ul class="cardwrap">
<?php
if($view == "pack")
{
	$pack = "p".$_SESSION["draft"]["packOn"];
	$j = 0;
	for($i=0 ; $i<14; $i++)
	{	
		if($_SESSION["draft"][$pack][$i]["inUse"] == 0)
		{
		  $card= $_SESSION["draft"][$pack][$i]["cardNum"].".jpg";
		  echo '<li><a href="viewPack.php?set='.$_GET['set'].'&packorder='.$i.'&pick='.$_SESSION["draft"][$pack][$i]["cardNum"].'&pack='.$pack.'"><img class="card" src=images/'.$_GET['set'].'/'.$card.' onmouseover="width=\'200px\'" "></a></li>';
		  $j++;
		  if($j== 6)
		  {
			  echo "<br />";
			  $j=0;
		  }
		}
	}
	$_SESSION["draft"]["packOn"]++;
	$_SESSION["draft"]["turn"]++;
	if($_SESSION["draft"]["packOn"]>8)
	{
		$_SESSION["draft"]["packOn"]=1;
	}
}
if($view == "hand")
{
	
	echo "<a href='nextRound.php'>View your hand</a>";
}
?>
</ul>
</body>
</html>