
<html>
<head>
	<title>EJERCICIO 9</title>
</head>
<body>
		<h1>EJERCICIO 9</h1>
		<?php  
		$array1=array('color'=>'celeste','marca'=>'pencil','trazo'=>'Fino','precio'=>10);
		$array2=array('color'=>'blanco','marca'=>'faber','trazo'=>'grueso','precio'=>13);
		$array3=array('color'=>'azul','marca'=>'otro','trazo'=>'Medio','precio'=>12);

		foreach ($array1 as $key => $value)
		 {
				echo $key . " " . $value;
				echo "<br/>";		
			}
				echo "<br/>";	
				echo "-----------------------------------";
				echo "<br/>";
		foreach ($array2 as $key => $value)
			 {
				echo $key . " " . $value;
				echo "<br/>";		
			}	
				echo "<br/>";	
				echo "-----------------------------------";
				echo "<br/>";
		foreach ($array3 as $key => $value)
			 {
				echo $key . " " . $value;
				echo "<br/>";		
			}				
				echo "<br/>";	
				echo "-----------------------------------";
				echo "<br/>";
		?>
</body>
</html>