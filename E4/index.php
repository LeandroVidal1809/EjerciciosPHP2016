<?php  
		echo "Ejercicio 4";
		echo "<br>";

		$array=array('suma'=>'+','multiplicacion'=>'*','resta'=>'-','division'=>'/');
		$op1=4;
		$op2=6;
		
		echo "<br>";
		$resultado=$op1+$op2;
		echo "Operacion ".$array['suma'] ." : ".$op1.$array['suma'].$op2." = ".	$resultado;
		echo "<br>";
		$resultado=$op1*$op2;
		echo "Operacion ".$array['multiplicacion'] ." : ".$op1.$array['multiplicacion'].$op2." = ".	$resultado;
		echo "<br>";
		$resultado=$op1-$op2;
		echo "Operacion ".$array['resta'] ." : ".$op1.$array['resta'].$op2." = ".	$resultado;
		echo "<br>";
		$resultado=$op1/$op2;
		echo "Operacion ".$array['division'] ." : ".$op1.$array['division'].$op2." = ".	$resultado;		
?>