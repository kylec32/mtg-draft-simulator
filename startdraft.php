<?php
if(isset($_SESSION['draft']))
{
	unset($_SESSION['draft']);
}
session_start();
$fname=$_GET["fname"];
$lname=$_GET["lname"];
function fillPack()
	{
		
		include('connect.php');
		db_connect();
		$data=mysql_query("select * from $set");
		
		$set=$_GET["set"];
		$cStart=1;
		

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
 	$mypack[0]=NULL;
 	$c1pack[0]=0;
 	$c2pack[0]=0;
 	$c3pack[0]=0;
 	$c4pack[0]=0;
 	$c5pack[0]=0;
 	$c6pack[0]=0;
 	$c7pack[0]=0;

$Fullname =$fname.$lname;
$_SESSION['draft']= array("name" =>$Fullname, "turn"=>1, "round" => 1, "packOn"=>1, "mypack" => $mypack, "cp1" => $c1pack, "cp2" => $c2pack, "cp3" =>$c3pack, "cp4" => $c4pack, "cp5" => $c5pack, "cp6" => $c6pack, "cp7" => $c7pack, "p1" => $pack1, "p2" => $pack2,"p3" => $pack3,"p4" => $pack4,"p5" => $pack5,"p6" => $pack6,"p7" => $pack7,"p8" => $pack8 );
?>
<html><head><title>Are you ready?</title></head><body><h2 align="center"><a href="viewPack.php?set=m11&packorder=na&pick=na&pack=na">Click Here when you are ready to start</a></h2></body></html>

