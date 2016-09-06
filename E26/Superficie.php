<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="#4897FF" >
<?php
$Superficie=0;
    $Superficie=$_POST['Alto']  *  $_POST['Ancho'] ;
     ?>
  <h1>La superficie es : <?php echo $Superficie; ?></h1>
   <br>
 <a  href="index.html">  <button>Regresar</button></a>
</body>
</html>