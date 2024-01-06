<?php 
function pangkat ($angka, $pangkat){

	$a = $angka;
	$b = $pangkat;
	$hasil = pow($angka, $pangkat);
	return $hasil;
	
}
 
$hasil = pangkat(5,4);
echo "5 pangkat 4 = $hasil";
 echo "<br/>";




 ?>