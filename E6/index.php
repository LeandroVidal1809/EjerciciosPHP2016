
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
		<?php 
			$total=0;
			$array = array(1 => rand(1,10) ,2 => rand(1,10) ,3 => rand(1,10) ,4 => rand(1,10) );	
			$prom=0;
				echo"<br>";
					foreach ($array as $key => $value) 
					{
						echo $value;
						echo"<br>";
					}
				echo"<br>";
				echo"<br>";


			for ($i=1;$i<4;$i++)
			{

				$total+=$array[$i];

			}	

			$prom=$total/4;

			if($prom<6)
			echo"El promedio es menor a 6";
			elseif($prom>6)
			echo "el promedio es mayor a 6";
			else 
			echo "el promedio es 6";	
					
				
 					
 		?>
</body>
</html>