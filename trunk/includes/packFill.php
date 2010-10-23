<?php
//pack 1
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack1))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack1[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack1))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack1[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack1))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=1; $j<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack1[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
//pack2
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack2))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack2[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack2))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack2[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack2))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack2[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
//pack3
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack3))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack3[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack3))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack3[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack3))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack3[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
//pack4
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack4))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack4[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack4))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack4[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack4))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack4[$i]=$tempCar;
			
		}
	else
		{
			$i--;
		}
//pack5
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack5))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack5[$i]=$tempCar;
			
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack5))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack5[$i]=$tempCar;
			
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack5))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack5[$i]=$tempCar;
			
		}
	else
		{
			$i--;
		}
//pack6
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack6))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack6[$i]=$tempCar;
			
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack6))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack6[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack6))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack6[$i]=$tempCar;
		
		}
	else
		{
			$i--;
		}
//pack7
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack7))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack7[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack7))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack7[$i]=$tempCar;
		
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack7))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack7[$i]=$tempCar;
		}
	else
		{
			$i--;
		}

//pack 8
for($i=0; $i<=9; $i++)
{
	$tempVar=rand(1 , 101);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack8))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack8[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}

for($i=10; $i<=12; $i++)
{
	$tempVar=rand(102 , 160);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'uc');
	if(!array_search($tempVar, $pack8))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			
			$pack8[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
for($i=13; $i<=13; $i++)
{
	$tempVar=rand(161 , 229);
	$tempCar=array("cardName"=>NULL,"cardNum"=>0, "pick"=>0, "color"=>"NA", "rarity"=>'c');
	if(!array_search($tempVar, $pack8))
		{
			$handle1=fopen("set/m11/m11CoNa.txt",'r');
			if($handle1)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle1);
					}
					$tempCar["cardName"]=fgets($handle1);
			}
			fclose($handle1);
			$handle2=fopen("set/m11/m11CoPick.txt",'r');
			if($handle2)
			{
				if($tempVar !=1)
				for($j=0; $j+1<$tempVar; $j++)
					{
						$crapptemp=fgets($handle2);
					}
					$tempCar["pick"]=fgets($handle2);
			}
			fclose($handle2);
			$tempCar["cardNum"]=$tempVar;
			$pack8[$i]=$tempCar;
		}
	else
		{
			$i--;
		}
}
?>