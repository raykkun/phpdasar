<?php
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
    <title>Document</title>
</head>
<body>
    <h1>List Smartphone</h1>
    <?php foreach($handphone as $hp) : ?>
        <ul>
            <li>
                <img src="img/<?= $hp["gambar"]; ?>">
            </li>
            <li><?= $hp["merk"]; ?></li>
            <li><?= $hp["harga"]; ?></li>
            <li><?= $hp["perusahaan"]; ?></li>
            <li><?= $hp["warna"]; ?></li>
            <li><?= $hp["no_imei"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>