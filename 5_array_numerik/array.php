<?php
    // array
    // variabel yang dapat memiliki banyak nilai
    // Elemen pada array boleh memiliki tipe data yang berbeda

    // Membuat array 
    // cara lama
    $hari = array("senin","selasa","rabu");

    // cara baru
    $bulan = ["jaruari","februari","maret"];
    $campur = ["aku", 12345, true];

    // menampilkan array
    // fungsi var_dump --> untuk mengetahui tipe data yang data dalam variabel (biasa digunakan untuk debugging)
    var_dump($campur);
    echo "<br/>";

    // fungsi print_r --> untuk mengetahui isi array dan elemen elemen-nya (biasa digunakan untuk debugging) 
    print_r($bulan);
    echo "<br/>";
    
    // menampilkan 1 elemen pada array
    echo $hari[2];
    echo "<br/>";
    echo $campur[1];
    echo "<br/>";

    // menambahkan elemen baru pada array
    var_dump($campur);
    $campur[] = 555;
    echo "<br/>";

    var_dump($campur);
?>