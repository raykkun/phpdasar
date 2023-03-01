<?php 
    // cek apakah tidak ada data di $_GET[]
    if (!isset($_GET["merk"]) || 
        !isset($_GET["harga"]) ||
        !isset($_GET["perusahaan"]) ||
        !isset($_GET["noimei"]) ||
        !isset($_GET["gambar"])
    ){
        // redirect
        header("Location:latihan1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Smartphone</title>
</head>
<body>
    <h1>DETAIL SMARTPHONE</h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["merk"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
        <li><?= $_GET["perusahaan"]; ?></li>
        <li><?= $_GET["noimei"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali lagi</a>
</body>
</html>