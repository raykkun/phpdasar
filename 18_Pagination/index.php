<?php
    session_start();

    if( !isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM handphone"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


    $handphone = query("SELECT * FROM handphone LIMIT $awalData, $jumlahDataPerHalaman");

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

    <button><a href="logout.php">Logout</a></button>

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
    <br>

    <!-- Navigasi -->

    <?php if($halamanAktif > 1): ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif ): ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:red;"><?= $i ?></a>
        <?php else: ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman): ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>


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
    
        <?php $i = 1 + $awalData; ?>
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