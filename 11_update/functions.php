<?php
    // koneksi ke database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpdasar";
    $conn = mysqli_connect($host,$user,$pass,$db);

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;

    }

    function tambah($data){
        global $conn;

        $merk = htmlspecialchars($data["merk"]);
        $harga = htmlspecialchars($data["harga"]);
        $perusahaan = htmlspecialchars($data["perusahaan"]);
        $noimei = htmlspecialchars($data["noimei"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO handphone
                    VALUES
                    ('','$merk','$harga','$perusahaan','$noimei',
                    '$gambar')
                ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM handphone WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $merk = htmlspecialchars($data["merk"]);
        $harga = htmlspecialchars($data["harga"]);
        $perusahaan = htmlspecialchars($data["perusahaan"]);
        $noimei = htmlspecialchars($data["noimei"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE handphone SET
                    merk = '$merk',
                    harga = '$harga',
                    perusahaan = '$perusahaan',
                    no_imei = '$noimei',
                    gambar = '$gambar'
                WHERE id = $id
                ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>