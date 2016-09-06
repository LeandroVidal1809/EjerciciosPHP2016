<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="#4897FF" >
	<?php
	$Perimetro=0;
	$Perimetro=$_POST['Alto']*2 +  $_POST['Ancho']*2 ;
	?>
  <h1>El perimetro es : <?php echo $Perimetro; ?></h1>

 <br>
 <a   href="index.html" class="button_text">  <button>Regresar</button></a>

</body>
</html>