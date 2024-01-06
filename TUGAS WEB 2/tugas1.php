<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.awal{
		border: 1px solid black;
		width: 450px;
		padding-left: 50px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	
</style>
<body>
	<div class="awal">
		<?php
		echo "Pengulangan untuk mencari kategori  bilangn: </br>";
		for($i=1;$i<=20;$i++){
    		if ($i %2 == 0) {
			// code...
				echo "<li>$i adalah bilangan genap";
			} else {
			// code...
				echo "<li>$i adalah bilangan ganjil";		
			} 
        	$a=0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $a++;
            }
        	}
       		if($a == 2){
         	echo " sekaligus bilangan prima" ;
        	}
    	} 
		 ?>


	</div>
	
		

</body>
</html>