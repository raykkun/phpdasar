<?php
// Variabel scope / lingkup variabel
// $x = 10;

// function tampilx(){
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// Variabel global milik PHP
// Merupakan Array Assosiative

// var_dump($_GET);

$handphone = [
    [
        "merk" => "Meizu",
        "harga" => "Rp. 1.6 jt",
        "perusahaan" => "Meizu",
        "warna" => "black",
        "no_imei" => "1233441",
        "gambar" => "ozil.jpg"
    ],
    [
        "merk" => "SAMSUNG",
        "harga" => "Rp. 3.6 jt",
        "perusahaan" => "SAMSUNG",
        "warna" => "white",
        "no_imei" => "1255442",
        "gambar" => "taran.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Smartphone</title>
</head>
<body>
    <h1>DATA SMARTPHONE</h1>
    <ul>
        <?php foreach($handphone as $hp) :  ?>
            <li>
                <img src="img/<?= $hp["gambar"]; ?>">
            </li>
            <li>
                <a href="latihan2.php?merk=<?= $hp["merk"]; ?>&harga=<?= $hp["harga"]; ?>&perusahaan=<?= $hp["perusahaan"];?>&
                warna=<?= $hp["warna"]; ?>&noimei=<?= $hp["no_imei"]; ?>&gambar=<?= $hp["gambar"]; ?>"><?= $hp["merk"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>