
<!-- sudah array asosatif -->

<?php
// array asosiatif
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

    $mahasiswa =[ 
                [
                "nama" => "zulfikar",
                "nim" => "131920273",
                "email" => "zul@gmail.com",
                "jurusan" => "teknik informatika",
                "gambar" => "ozil.jpg",
                ],
                [
                "nama" => "dasha",
                "nim" => "1366670273",
                "email" => "das@gmail.com",
                "jurusan" => "teknik kimia",
                "gambar" => "taran.jpg",
                ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>