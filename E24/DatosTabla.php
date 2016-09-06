
<html>
<body>

<table border="2"> 
	<?php 

	$tam=$_POST['opcion'];

	for($i=1;$i<=$tam;$i++)
	{
		echo $i;
		echo "<tr>";

			for($j=1;$j<=$tam;$j++)
			{

				echo "<td>"."</td>";
			}

		echo "</tr>";

	}


 ?>

</table>
</body>
</html>

