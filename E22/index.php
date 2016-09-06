 <html>
	 <head>
	 <?php
		 $filas=5;
	 	$columnas=3;
	 	$i=1; 
		 $j=1;
		 $flag=true;	
	  ?>
 		<title>Ejercicio 22</title>
 	</head>
		 <body>
		 <h1>Ejercicio 22</h1>
 			<table border="1">
 					<?php 
 					for($i=1;$i<=$filas;$i++)
 						{
 							echo "<tr>";
 								for($j=1;$j<=$columnas;$j++)
 								{
 								if(!$flag)
 								{
 								echo "<td style=background-color:#BDBDBD;>" . $i . $j . "</td>";
 								$flag=true;
 								}
 								else
 								{

 								echo "<td style=background-color:#FFFFFF;>" . $i . $j . "</td>";
 								$flag=false;

 								}

 								}
							echo"</tr>";
						}
 					 ?>

 			</table>
		 </body>
 </html>