<?php
    session_start();

    if( !isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

    // koneksi DBMS (Database Management System)
    require 'functions.php';

    // Cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["submit"])){
        
        // cek apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan')
                    document.location.href = 'index.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('data gagal ditambahkan')
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
    <title>Halaman Tambah Barang</title>
</head>
<body>
    <h1>Halaman Tambah Barang</h1>
    
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="merk">Merk : </label>
                <input type="text" name="merk" id="merk" required>
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="perusahaan">Perusahaan : </label>
                <input type="text" name="perusahaan" id="perusahaan" required>
            </li>
            <li>
                <label for="noimei">No. Imei : </label>
                <input type="text" name="noimei" id="noimei" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>
    </form>
</body>
</html>