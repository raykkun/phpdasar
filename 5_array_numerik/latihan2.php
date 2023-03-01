<?php
    $mahasiswa = [["ucok coky","12345678","teknik informatika","ucok@gmail.com"],
                    ["coki - coki","128888789","teknik sipil","coky@gmail.com"],  // Ini adalah array multidimensi (array didalam array)
                    ["sunny","12345533","agroteknologi","sunny@gg.com"] // Array ini disebut array numerik (indeks nya dimulai dari angka 0)
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
    <h1>Data Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama = <?= $mhs[0]; ?></li>
            <li>NIM = <?= $mhs[1]; ?></li>
            <li>Jurusan = <?= $mhs[2]; ?></li>
            <li>Email = <?= $mhs[3]; ?></li>
        </ul>    
    <?php endforeach; ?>
</body>
</html>