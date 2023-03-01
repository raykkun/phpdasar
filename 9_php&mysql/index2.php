<?php
    // koneksi ke database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpdasar";
    $conn = mysqli_connect($host, $user, $pass, $db);

    // ambil data dari tabel handphone / query handphone
    $result = mysqli_query($conn, "SELECT * FROM handphone");
    
    // ambil data (fetch) handphone dari object result
    // mysqli_fetch_row() --> mengembalikan array numerik
    // mysqli_fetch_assoc() --> mengembalikan array associative
    // mysqli_fetch_array() --> mengembalikan keduduanya
    // mysqli_fetch_object()
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Handphone</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Perusahaan</th>
            <th>No. Imei</th>
            <th>Gambar</th>
        </tr>
    
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><?= $row["merk"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["perusahaan"]; ?></td>
            <td><?= $row["no_imei"]; ?></td>
            <td><img src="img/<?= $row["gambar"] ;?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>