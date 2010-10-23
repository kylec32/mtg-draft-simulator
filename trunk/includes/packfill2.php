<?php

	function fillPack()
	{
		$set="m11";
		$cStart=1;
		$cEnd=0;
		$unStart=0;
		$unEnd=0;
		$rStart=0;
		$rEnd=0;

	if($set == "m11")
	{
		$cEnd=101;
		$unStart=102;
		$unEnd=160;
		$rStart=161;
		$rEnd=229;
		echo "raned this";
	}

		$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c', "Mana"=>0);
		$used[0]=0;
		for($i=0; $i<=9; $i++)
		{
			$tempVar=rand($cStart, $cEnd);
			echo $tempVar;
			if(!array_search($tempVar, $used))
			{
				$handle1=fopen('set/'.$set.'/'.$set.'Na.txt', 'r');
				if($handle1)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
				
				$tempCar["cardName"]=fgets($handle1);
				echo $tempCar["cardName"];
				}
				else
				{
					echo "error h1 failed to open";
				}
				fclose($handle1);
				$handle2=fopen('set/'.$set.'/'.$set.'Pick.txt', 'r');
				if($handle2)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
				
				$tempCar["pick"]=fgets($handle2);
				}
				else
				{
					echo "error h2 failed to open";
				}
				fclose($handle2);
				$handle3=fopen('set/'.$set.'/'.$set.'Color.txt', 'r');
				if($handle3)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle3);
					}
				
				$tempCar["color"]=fgets($handle3);
				}
				else
				{
					echo "error h3 failed to open";
				}
				fclose($handle3);
				$handle4=fopen('set/'.$set.'/'.$set.'Mana.txt', 'r');
				if($handle4)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle4);
					}
				
				$tempCar["pick"]=fgets($handle4);
				}
				else
				{
					echo "error h4 failed to open";
				}
				fclose($handle4);
				$tempCar["cardNum"]=$tempVar;
				$used=array($tempVar);
			
			$pack[$i]=$tempCar;
			unset($tempCar);
			}
			else
			{
				$i--;
			}
			
		}
		$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'u', "Mana"=>0);
		$used[0]=0;
		for($i=10; $i<=12; $i++)
		{
			$tempVar=rand($unStart, $unEnd);
			if(!array_search($tempVar, $used))
			{
				$handle1=fopen('set/'.$set.'/'.$set.'Na.txt', 'r');
				if($handle1)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
				
				$tempCar["cardName"]=fgets($handle1);
				}
				else
				{
					echo "error h1 failed to open";
				}
				fclose($handle1);
				$handle2=fopen('set/'.$set.'/'.$set.'Pick.txt', 'r');
				if($handle2)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
				
				$tempCar["pick"]=fgets($handle2);
				}
				else
				{
					echo "error h2 failed to open";
				}
				fclose($handle2);
				$handle3=fopen('set/'.$set.'/'.$set.'Color.txt', 'r');
				if($handle3)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle3);
					}
				
				$tempCar["pick"]=fgets($handle3);
				}
				else
				{
					echo "error h3 failed to open";
				}
				fclose($handle3);
				$handle4=fopen('set/'.$set.'/'.$set.'Mana.txt', 'r');
				if($handle4)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle4);
					}
				
				$tempCar["pick"]=fgets($handle4);
				}
				else
				{
					echo "error h4 failed to open";
				}
				fclose($handle4);
				$tempCar["cardNum"]=$tempVar;
				$used=array($tempVar);
				$pack[$i]=$tempCar;
			}
			else
			{
				$i--;
			}
			
		}
		$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c', "Mana"=>0);
		$used[0]=0;
		for($i=13; $i<=13; $i++)
		{
			$tempVar=rand($rStart, $rEnd);
			if(!array_search($tempVar, $used))
			{
				$handle1=fopen('set/'.$set.'/'.$set.'Na.txt', 'r');
				if($handle1)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
				
				$tempCar["cardName"]=fgets($handle1);
				}
				else
				{
					echo "error h1 failed to open";
				}
				fclose($handle1);
				$handle2=fopen('set/'.$set.'/'.$set.'Pick.txt', 'r');
				if($handle2)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
				
				$tempCar["pick"]=fgets($handle2);
				}
				else
				{
					echo "error h2 failed to open";
				}
				fclose($handle2);
				$handle3=fopen('set/'.$set.'/'.$set.'Color.txt', 'r');
				if($handle3)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle3);
					}
				
				$tempCar["pick"]=fgets($handle3);
				}
				else
				{
					echo "error h3 failed to open";
				}
				fclose($handle3);
				$handle4=fopen('set/'.$set.'/'.$set.'Mana.txt', 'r');
				if($handle4)
				{
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle4);
					}
				
				$tempCar["pick"]=fgets($handle4);
				}
				else
				{
					echo "error h4 failed to open";
				}
				fclose($handle4);
				$tempCar["cardNum"]=$tempVar;
				$used=array($tempVar);
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
?>