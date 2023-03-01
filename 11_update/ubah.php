<?php
    // koneksi DBMS (Database Management System)
    require 'functions.php';
    // ambil data dari URL
    $id = $_GET["id"];

    // query data handphone berdasarkan id
    $hp = query("SELECT * FROM handphone WHERE id = $id")[0];

    // Cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])){
        
        // cek apakah data berhasil diubah atau tidak
        if (ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah')
                    document.location.href = 'index.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('data gagal diubah')
                    document.location.href = 'index.php';
                </script>
            ";
        };
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Barang</title>
</head>
<body>
    <h1>Halaman Ubah Barang</h1>
    
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $hp['id']; ?>">
        <ul>
            <li>
                <label for="merk">Merk : </label>
                <input type="text" name="merk" id="merk" required 
                value="<?= $hp['merk'] ;?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required
                value="<?= $hp['harga'] ;?>">
            </li>
            <li>
                <label for="perusahaan">Perusahaan : </label>
                <input type="text" name="perusahaan" id="perusahaan" required
                value="<?= $hp['perusahaan'] ;?>">
            </li>
            <li>
                <label for="noimei">No. Imei : </label>
                <input type="text" name="noimei" id="noimei" required
                value="<?= $hp['no_imei'] ;?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required
                value="<?= $hp['gambar'] ;?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah!</button>
            </li>
        </ul>
    </form>
</body>
</html>