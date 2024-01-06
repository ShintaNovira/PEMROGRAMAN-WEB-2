<style type="text/css">
	.soal {
		font-size: 20px;
		font-style: italic;
	}
</style>
<?php 

$jawabanIsset = "Isset adalah = salah satu kunci bahasa pemrograman untuk melakukan pengecekan terhadap suatu variabel atau isi dari variabel yang terdefinisi. <br><br>";
$jawabanempty = "Empty adalah = digunakan untuk dapat memeriksa apakah suatu variabel kosong atau tidak.";
$style = "soal";


function soal($style){
return "<spann class = '$style'</span>";
}

echo soal($style,$jawabanIsset,$jawabanempty);
echo "$jawabanIsset $jawabanempty";

 ?>



