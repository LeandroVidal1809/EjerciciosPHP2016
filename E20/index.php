
<html>
<head>
	<title>Ejercicio 20	</title>
</head>
	<body bgcolor="blue">
			<form id="FormIngreso" method="POST" >

					<input type="text"  placeholder="Continuar?"  name="Mensaje">
					<input    type="submit" >
				<br>
			</form>

			<?php 

				if($_POST['Mensaje']=='s')
				{
					
						echo"Cambiamos";


				}
			 ?>
			 <body style="background-color:green";> </body>
	</body>
</html>