<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Modul 2 - Latihan 1</title>
	<style>
		.kotak {
			 text-align: center;

		}
		.clear {
			border: 1px solid black;
			width: 25px;
			height: 25px;

		}
	</style>

</head>
<body>
	<?php
	echo '<table class ="kotak">'; 
		for ($i=1; $i<=5 ; $i++) { 
		// code...
		echo "<tr>";
		for ($j=1; $j<=$i ; $j++) { 
		// code...
		echo '<td class="clear">'. $j.' </td>';
		}
		echo "</tr>";
 	}

	 ?>
</body>
</html>