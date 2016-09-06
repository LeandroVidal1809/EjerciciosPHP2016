 <html>
	 <head>
	 <?php
	 $filas=5;
	 $columnas=3;
	 $i=1; 
	 $j=1;
	  ?>
 		<title>Ejercicio 21</title>
 	</head>
		 <body>
		 <h1>Ejercicio 21</h1>
 			<table border="1">
 					<?php 
 					for($i=1;$i<=$filas;$i++)
 						{
 							echo "<tr>";
 								for($j=1;$j<=$columnas;$j++)
 								{
 									echo "<td>" . $i . $j . "</td>";
 								}
							echo"</tr>";
						}
 					 ?>

 			</table>
		 </body>
 </html>