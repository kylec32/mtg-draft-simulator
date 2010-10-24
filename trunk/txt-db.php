<?php
	include('connect.php');
	db_connect();
	
	
	//Start of variables declaring stuff for each different set.
	//
	//DB should be created with this structure prior:
	// (uID, cardNum, cardName, color, rarity, conMana, pick)
	
	//make sure set name is correct, common/uncommon/rare start and end card are input and then run and enjoy.  
	
	$set = "m11";
	$cstart=1;
	$cEnd=101;
	$unStart=102;
	$unEnd=160;
	$rStart=161;
	$rEnd=229;
	
	
	//let the games begin
	
	
	
	$handle1=fopen('set/'.$set.'/'.$set.'Na.txt', 'r');
	$handle2=fopen('set/'.$set.'/'.$set.'Pick.txt', 'r');
	$handle3=fopen('set/'.$set.'/'.$set.'Color.txt', 'r');
	$handle4=fopen('set/'.$set.'/'.$set.'Mana.txt', 'r');
	
		for($j=$cstart; $j<=$rEnd; $j++)
			{
				$name = mysql_real_escape_string(fgets($handle1));
				$color = mysql_real_escape_string(fgets($handle3));
				$rarity='';
				$conMana = mysql_real_escape_string(fgets($handle4));
				$pick = mysql_real_escape_string(fgets($handle2));
				mysql_query("insert into $set values('','$j', '$name','$color','$rarity','$conMana','$pick')")
				or die(mysql_error());
				echo $j.' '.$name.' '.$color.' '.$rarity.' '.$conMana.' '.$pick.'<br/>';
			}
	


?>