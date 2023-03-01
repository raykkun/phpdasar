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

        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }

        $query = "INSERT INTO handphone
                    VALUES
                    ('','$merk','$harga','$perusahaan','$noimei',
                    '$gambar')
                ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                    alert('yang anda upload bukan gambar');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000){
            echo "<script>
                    alert('ukuran gambar terlalu besar');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

        return $namaFileBaru;


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
        $gambarlama = htmlspecialchars($data["gambarlama"]);

        // cek apakah user pilih gambar baru
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarlama;
        }else{
            $gambar = upload();
        }

       
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

    function cari($keyword){

        $query = "SELECT * FROM handphone 
                    Where
                merk LIKE '%$keyword%' OR
                harga LIKE '%$keyword%'
                ";
        return query($query);
    }
?>