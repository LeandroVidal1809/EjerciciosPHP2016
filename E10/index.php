<html>
<head>
	<title>Ejercicio 10</title>
</head>
<body>
<h1>EJERCICIO 10</h1>
<?php 


		$array=array(
				array('color'=>'celeste','marca'=>'pencil','trazo'=>'Fino','precio'=>10),
				array('color'=>'blanco','marca'=>'faber','trazo'=>'grueso','precio'=>13),
				array('color'=>'azul','marca'=>'otro','trazo'=>'Medio','precio'=>12)
			);


		foreach($array as $row => $innerArray)
		{
			echo "---------------------------"."<br/>";
  			foreach($innerArray as $innerRow => $value){
    			echo $value . "<br/>";
  		}
}
 ?>
</body>
</html>