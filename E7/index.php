
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
<h1>EJERCICIO 7</h1>
		<?php 
		$num=1;
		$cont=0;
		$array=array();

				while($cont<=10)
				{
					if($num%2==0)
					{
						$num++;
					}
					else
					{

						$array[$cont]=$num;
						$cont++;
						$num++;
					}
			/*		echo "numero". $num;
					echo "<br/>";
					echo "contador".$cont;
					echo "<br/>";*/
				}


				foreach ($array as $key => $value)
				 {
					echo $value;
					echo "<br/>";
				}
		 ?>
</body>
</html>