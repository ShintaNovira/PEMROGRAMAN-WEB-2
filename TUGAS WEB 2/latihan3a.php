<!DOCTYPE html>
<html>
<head>
    <title>HTML dalam PHP</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
    </style>
</head>
<body>

<?php
function ganti_style($tulisan, $kelas) {
    return "<i class='$kelas'>$tulisan</i>";
}

$tulisan = "Hello world! Here I come!";
$kelas = "ganti-style";
echo ganti_style($tulisan, $kelas);
?>

</body>
</html>