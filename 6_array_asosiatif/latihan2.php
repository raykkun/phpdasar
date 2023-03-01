
<!-- masih array numerik -->

<?php 
    $mahasiswa = [
        ["kuro kuro","12345","kuro@gmail.com","informatika"],
        ["zoro","12345","zoro@gmail.com","sipil"]
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
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Email : <?= $mhs[2]; ?></li>
        <li>jurusan : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>