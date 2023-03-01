<?php
    require 'functions.php';

    $handphone = query("SELECT * FROM handphone");

    // jika tombol cari ditekan
   if (isset($_POST['cari'])){

        $handphone = cari($_POST['keyword']);
   }
    
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
    <a href="tambah.php">Tambah Data Handphone</a>
    <form action="" method="POST">
        <br>
        <input type="text" name="keyword" autofocus
        placeholder="Masukan Nama Merk / Harga" 
        autocomplete="off" size="40px">
        <button type="submit" name="cari">Cari</button>
        <br>
        <br>
    </form>

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
        <?php foreach($handphone as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>"
                onclick="return confirm('Yakin?')">Hapus</a>
            </td>
            <td><?= $row["merk"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["perusahaan"]; ?></td>
            <td><?= $row["no_imei"]; ?></td>
            <td><img src="img/<?= $row["gambar"] ;?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>