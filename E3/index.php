<?php 
			echo "Ejercicio 3";
			echo "<br>";
			$a=3;
			$b=4;
			$c=8;


			if($a<>$b && $b<>$c && $a<>$c)
			{
				$array=array(1=>$a,2=>$b,3=>$c);

					for($i=1;$i<3;$i++)
					{
						for($j=2;$j<4;$j++)
						{
							if($array[$i]>$array[$j])
							{
								$k=$array[$i];
								$array[$i]=$array[$j];
								$array[$j]=$k;
							}
						}
					}
			}
			else
			{

				echo "no hay valor medio";
			}
			echo " el valor medio es: ".$array[2];

 ?>