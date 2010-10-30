<?php

session_start();

	$set=$_SESSION["draft"]["set"];
	include('connect.php');
	db_connect();

function fillPack()
	{
		$set=$_SESSION["draft"]["set"];
		$data=mysql_query("select * from $set");
		$cStart=1;
		$cEnd=0;
		$unStart=0;
		$unEnd=0;
		$rStart=0;
		$rEnd=0;
		
		

	if($set == "M11" || $set == "m11")
	{
		$cEnd=101;
		$unStart=102;
		$unEnd=160;
		$rStart=161;
		$rEnd=229;
	}

$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c', "Mana"=>0, "packp"=>0, "inUse"=>0);
		$used[0]=0;
		for($i=0; $i<=9; $i++)
		{
			$tempVar=rand($cStart, $cEnd);
			if(!array_search($tempVar, $used))
			{
				$tempCar["cardName"]=mysql_result($data, $tempVar, "cardName");
				
				$tempCar["pick"]=mysql_result($data, $tempVar, "pick");
				
				$tempCar["color"]=mysql_result($data, $tempVar, "color");
			
				$tempCar["mana"]=mysql_result($data, $tempVar, "conMana");
				
				$tempCar["cardNum"]=$tempVar;
				$tempCar["packp"]=$i;
				$used[$i]=$tempVar;
				$pack[$i]=$tempCar;
			}
			else
			{
				$i--;
			}
			
		}
		$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'u', "Mana"=>0, "packp"=>0, "inUse"=>0);
		$used[0]=0;
		for($i=10; $i<=12; $i++)
		{
			$tempVar=rand($unStart, $unEnd);
			if(!array_search($tempVar, $used))
			{
				$tempCar["cardName"]=mysql_result($data, $tempVar, "cardName");
				
				$tempCar["pick"]=mysql_result($data, $tempVar, "pick");
				
				$tempCar["color"]=mysql_result($data, $tempVar, "color");
			
				$tempCar["mana"]=mysql_result($data, $tempVar, "conMana");
				
				$tempCar["cardNum"]=$tempVar;
				$tempCar["packp"]=$i;
				$used[$i]=$tempVar;
				$pack[$i]=$tempCar;
			}
			else
			{
				$i--;
			}
			
		}
		$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c', "Mana"=>0, "packp"=>0, "inUse"=>0);
		$used[0]=0;
		for($i=13; $i<=13; $i++)
		{
			$tempVar=rand($rStart, $rEnd);
			if(!array_search($tempVar, $used))
			{
				$tempCar["cardName"]=mysql_result($data, $tempVar, "cardName");
				
				$tempCar["pick"]=mysql_result($data, $tempVar, "pick");
				
				$tempCar["color"]=mysql_result($data, $tempVar, "color");
			
				$tempCar["mana"]=mysql_result($data, $tempVar, "conMana");
				
				$tempCar["cardNum"]=$tempVar;
				$tempCar["packp"]=$i;
				$used[$i]=$tempVar;
				$pack[$i]=$tempCar;
			}
			else
			{
				$i--;
			}
			
		}
		
		return $pack;
	}
	$pack1=fillPack();
	$pack2=fillPack();
	$pack3=fillPack();
	$pack4=fillPack();
	$pack5=fillPack();
	$pack6=fillPack();
	$pack7=fillPack();
	$pack8=fillPack();
 	$c1pack[0]=0;
 	$c2pack[0]=0;
 	$c3pack[0]=0;
 	$c4pack[0]=0;
 	$c5pack[0]=0;
 	$c6pack[0]=0;
 	$c7pack[0]=0;

$_SESSION['draft']["turn"]=1;
$_SESSION['draft']["round"]++;
$_SESSION['draft']["packOn"]=1;
/*
$_SESSION['draft']["cp1"] = $c1pack; 
$_SESSION['draft']["cp2"] = $c2pack;
$_SESSION['draft']["cp3"] = $c3pack;
$_SESSION['draft']["cp4"] = $c4pack;
$_SESSION['draft']["cp5"] = $c5pack;
$_SESSION['draft']["cp6"] = $c6pack;
$_SESSION['draft']["cp7"] = $c7pack;
*/
$_SESSION['draft']["p1"] = $pack1;
$_SESSION['draft']["p2"] = $pack2;
$_SESSION['draft']["p3"] = $pack3;
$_SESSION['draft']["p4"] = $pack4;
$_SESSION['draft']["p5"] = $pack5;
$_SESSION['draft']["p6"] = $pack6;
$_SESSION['draft']["p7"] = $pack7;
$_SESSION['draft']["p8"] = $pack8;
echo ('
<html><head><title>View Hand</title></head>
<link rel="stylesheet" type="text/css" href="css/picControl.css" />
<body>
	<h2 align="center">');
if($_SESSION['draft']["round"]<=3)
{
		echo('<a href="viewPack.php?set=m11&packorder=na&pick=na&pack=na">Next Round - ');
}
echo $_SESSION['draft']["round"],'</a>'; 
echo('</h2><ul class="cardwrap">');
             $j = 0;
			 $count = count($_SESSION["draft"]["mypack"]);
            for($i=0 ; $i<$count;$i ++)
            {
                $card= $_SESSION["draft"]["mypack"][$i]["cardNum"].".jpg";
                echo '<li><img class="card" src=images/'.$set.'/'.$card.'  "></li>';
                $j++;
                if($j == 6)
                  {
                      echo "<br />";
                      $j=0;
                  }
            }
        
	echo ('</ul>
</body>
</html>');
?>