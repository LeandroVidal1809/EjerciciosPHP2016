<html>
	<head>
		<title>Ejercicio 5 </title>
	</head>
	<body>
		Ejercicio 5
	</body>
	<?php
		$num=22;
			$num1 = intval($num/10);
			$num2 = $num - $num1*10;
echo "<br>";
echo "El numero es :";
		  if($num2 ==0)
		  	{switch ($num1) {
		  		case '2':
		  		echo"VEINTE";
		  			break;
		  		case '3':
		  		echo"TREINTA";
		  			break;
		  		case '4':
		  		echo"CUARENTA";
		  			break;
		  		case '5':
		  		echo"CINCUENTA";
		  			break;
		  		case '6':
		  		echo"SESENTA";
		  			break;


		  		
		  	}
		  }
		  else
		  {
		  	
		 	switch ($num1) 
		 	{
		  		case '2':
		  		echo"VEINTI";
		  			break;
		  		case '3':
		  		echo"TREINTA Y ";
		  			break;
		  		case '4':
		  		echo"CUARENTA Y ";
		  			break;
		  		case '5':
		  		echo"CINCUENTA Y ";
		  			break;
		  		case '6':
		  		echo"SESENTA Y";
		  			break;
			}
			switch ($num2) {
				case '1':
					echo"UNO";
					break;
				case '2':
					echo"DOS";
					break;
				case '3':
					echo"TRES";
					break;
				case '4':
					echo"CUATRO";
					break;
				case '5':
					echo"CINCO";
					break;
				case '6':
					echo"SEIS";
					break;					
				case '7':
					echo"SIETE";
					break;
				case '8':
					echo"OCHO";
					break;
				case '9':
					echo"NUEVE";
					break;
								
			}

		  }

	 ?>
	</html>
