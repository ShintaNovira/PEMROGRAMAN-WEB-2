<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Latihan 3</title>
</head>

<style type="text/css">
		.kotak {
				text-align: center;
		}

		.clear {
			border: 1px solid black;
			width: 25px;
			height: 25px;
		}

		.ganjil {
			background-color: #003;
			color: #fff;
		}

		.genap {
			background-color: #999;
		}

	</style>

<body>

	<?php
	echo '<table class ="kotak">'; 
		for ($i=1; $i<=5 ; $i++) { 
		// code...
		echo '<tr class = "'. ($i % 2 == 0 ? 'genap' : 'ganjil'). '">';
		for ($j=1; $j<=$i ; $j++) { 
		// code...
		echo '<td class="clear">'. $j .' </td>';
		}
		echo "</tr>";
 	}
	 ?>


</body>
</html>