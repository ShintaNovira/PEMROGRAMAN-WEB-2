<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 1c</title>
</head>
<body>
	<?php 

	$a = "A" ;
	$b = "B" ;
	$c = "C" ;
	$d = "D" ;
	$e = "E" ;

	 ?>
		<div class="pertama">
			<p><?php echo $a ?></p>
		</div>
		
		<div class="kedua">
			<p><?php echo $a ?></p>
			<p><?php echo $b ?></p>
		</div>

		<div class="ketiga">
			<p><?php echo $a ?></p>
			<p><?php echo $b ?></p>
			<p><?php echo $c ?></p>
		</div>

		<div class="keempat">
			<p><?php echo $a ?></p>
			<p><?php echo $b ?></p>
			<p><?php echo $c ?></p>
			<p><?php echo $d ?></p>
		</div>

		<div class="kelima">
			<p><?php echo $a ?></p>
			<p><?php echo $b ?></p>
			<p><?php echo $c ?></p>
			<p><?php echo $d ?></p>
			<p><?php echo $e ?></p>
		</div>

	<style type="text/css">
		
		.pertama{
			border: 2px solid black;
			width: 40px;
			height: 44px;
			margin-left: 4px;
			background-color: thistle;
			margin-top: 5px;
			padding-bottom: 3px;
			text-align: center;	
		}

		.kedua {
			display: flex;

		}

		.kedua p{
			border: 2px solid black;
			width: 40px;
			height: 33px;
			margin-left: 4px;
			background-color: thistle;
			margin-top: 5px;
			margin-bottom: 5px;
			padding-top: 13px;
			text-align: center;
		}

		.ketiga {	
			display: flex;
		}

		.ketiga p{
			border: 2px solid black;
			width: 40px;
			height: 33px;
			margin-left: 4px;
			background-color: thistle;
			margin-top: 0px;
			padding-top: 13px;
			text-align: center;
			margin-bottom: 5px;

		}

		.keempat p{
			border: 2px solid black;
			width: 40px;
			height: 33px;
			margin-left: 4px;
			background-color: thistle;
			margin-top: 0px;
			padding-top: 13px;
			text-align: center;
			margin-bottom: 5px;
		}

		.keempat {
			display: flex;
		}

		.kelima p {
			border: 2px solid black;
			width: 40px;
			height: 33px;
			margin-left: 5px;
			background-color: thistle;
			margin-top: 0px;
			padding-top: 13px;
			text-align: center;
			margin-bottom: 6px;
		}

		.kelima {
			display: flex;
		}
	</style>

	</div>



</body>
</html>