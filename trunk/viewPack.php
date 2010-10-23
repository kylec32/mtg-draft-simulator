<?php

session_start();
$pick=$_GET['pick'];
$packFrom=$_GET['pack'];
$packOrder=$_GET['packorder'];
if( $pick != "na")
{
	$_SESSION["draft"]["mypack"]=$_SESSION["draft"][$packFrom][$packOrder];
	$_SESSION["draft"][$packFrom][$packOrder]="USED";
}

/*AI using recursive functions 
	V 0.1 
	Notes-
	attemp 1. after testing if works promted as v1.0
*/
function AI($packOn , $turn)//sorts our the used and unused cards
{
	$tempPack;
	$poSt=0; //Positon in $tempPack
	for($i=0; $i <count($packOn); $i++)
	{
		if( $packOn[$i]["inUse"] == 0)
		{
			echo "Ran ";
		$tempPack[$poSt] = $packOn[$i];
		$poSt++;
		}
		echo $i;
		
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
	if(count($tempPack) == 0) // if zero cards in $tempPack then retry with orginal pack plus a higher turn count.
	{
		return AIRecur($packOn, $turn +=1);
	}
	else if( count($tempPack) > 1)// if more than one card send to AIMakeSmR to try and decresse that number
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
	for($i=0; $i<count($packOn); $i++)
	{
		if($packOn[$i]["pick"] <= $turn)
		{
			$tempPack[$poSt]=$packOn[$i];
			$poSt++;
		}
	}
	if(count($tempPack) < 1)
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

$PackOn=$_SESSION["draft"]["packOn"];
$turnOn=$_SESSION["draft"]["turn"];
for($i=1; $i<=8; $i++)
{
	if($i != $PackOn)
	{
		$tempPack=$_SESSION["draft"]["p".$i];
		$Pick=AI($tempPack, $turnOn);
		$_SESSION["draft"]["p".$i][$Pick]["inUse"] = 1;
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
$pack = "p".$_SESSION["draft"]["packOn"];
$j = 0;
for($i=0 ; $i<count($_SESSION["draft"][$pack]); $i++)
{	
	if($_SESSION["draft"][$pack][$i]["inUse"] == 0)
	{
	  $card= $_SESSION["draft"][$pack][$i]["cardNum"].".jpg";
	  echo '<li><a href="viewPack.php?set='.$_GET['set'].'&packorder='.$i.'&pick='.$_SESSION["draft"][$pack][$i]["cardNum"].'&pack='.$pack.'"><img class="card" src=images/'.$_GET['set'].'/'.$card.' onmouseover="width=\'200px\'" "></a></li>';
	  $j++;
	  if($j== 7)
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
?>
</ul>
</body>
</html>