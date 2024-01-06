<?php

$PahlawanNasionalIndonesia = array(
    array(
        "ID" => 1,
        "Nama" => "Cut Nyak Dien",
        "Tempat Lahir" => "Aceh",
        "Wafat" => "16 November 1908",
        "Gambar" => "dien.png"
        
    ),
    array(
        "ID" => 2,
        "Nama" => "Tuanku Imam Bonjol",
        "Tempat Lahir" => "Sumatra Barat",
        "Wafat" => "06 November 1864",
        "Gambar" => "imam.jpg"
        
    ),
    array(
        "ID" => 3,
        "Nama" => "Jendral Soedirman",
        "Tempat Lahir" => "Bodas Karangjati",
        "Wafat" => "29 Januari 1950",
        "Gambar" => "soedirman.jpg"
     
    ),
    array(
        "ID" => 4,
        "Nama" => "Pangeran Diponegoro",
        "Tempat Lahir" => "Yogyakarta",
        "Wafat" => "08 Januari 1985",
        "Gambar" => "diponegoro.jpg"
       
    ),
    array(
        "ID" => 5,
        "Nama" => "Sultan Hasanudin",
        "Tempat Lahir" => "Sulawesi Selatan",
        "Wafat" => "12 Juni 1670",
        "Gambar" => "hasanudin.jpg"
       
    ),
    array(
        "ID" => 6,
        "Nama" => "Ki Hadjar Dewantara",
        "Tempat Lahir" => "Yogyakarta",
        "Wafat" => "26 April 1959",
        "Gambar" => "dewantara.jpg"
        
    ),
    array(
        "ID" => 7,
        "Nama" => "Kapitan Pattimura",
        "Tempat Lahir" => "Ambon",
        "Wafat" => "16 Desember 1817",
        "Gambar" => "patimura.jpg"
        
    ),
    array(
        "ID" => 8,
        "Nama" => "Raden Ajeng Kartini",
        "Tempat Lahir" => "Jepara",
        "Wafat" => "17 September 1904",
        "Gambar" => "kartini.jpg"

    ),
    array(
        "ID" => 9,
        "Nama" => "Dewi Sartika",
        "Tempat Lahir" => "Cicalengka",
        "Wafat" => "11 September 1947",
        "Gambar" => "sartika.jpg"
    ),
    array(
        "ID" => 10,
        "Nama" => "Muhammad Yamin",
        "Tempat Lahir" => "Sawahlunto",
        "Wafat" => "17 Oktober 1962",
        "Gambar" => "yamin.jpg"

    ),
);


?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Pahlawan Nasional Indonesia</title>
 	<style>
 		img{
 			display: block;
 			margin-left: auto;
 			margin-right: auto;
 		}
 		*{
 			margin: 0;
 			padding: 0;
 		}

 		body{
 			background: white;
 			text-align: center;
 		}

 		section{
 			margin: 100px auto;
 		}

 		section img{
 			border-radius: 100%;
 			border: 5px solid black;
 		}

 	</style>
 </head>
 <body>
 	<h1>Pahlawan Nasional Indonesia </h1>
 	

 <ul>
 	<?php foreach ($PahlawanNasionalIndonesia as $idn): ?>

    	<br>
 		<section><img src="img/<?= $idn["Gambar"]; ?>">
 		</section></br>
 		<br>
 		<a href="tugas2.php?nama=<?= $idn["Nama"]; ?>&tempat lahir=<?= $idn["Tempat Lahir"]; ?>&wafat=<?= $idn["Wafat"]; ?>&no=<?= $idn["ID"]; ?>&gambar=<?= $idn["Gambar"]; ?>"><?= $idn["Nama"]; ?></br></a>
 		
	
<?php endforeach; ?>


 </ul>

 
 </body>
 </html>