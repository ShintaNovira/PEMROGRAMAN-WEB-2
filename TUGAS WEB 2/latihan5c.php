<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nama Pahlawan</title>
</head>
<body>
<h1>Pahlawan Nasional Indonesia</h1>
<ul>
	<br><img src="img/<?= $_GET["gambar"]; ?>"></br>
	<br><?= $_GET["ID"]; ?></br>
	<br><?= $_GET["Nama"]; ?></br>
	<br><?= $_GET["Tempat Lahir"]; ?></br>
	<br><?= $_GET["Wafat"]; ?></br>
</ul>	

<a href="latihan5b.php">Kembali</a>
</body>
</html>