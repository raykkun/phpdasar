<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    echo date ("l, d-M-Y");
    echo ("<br/>");
    
    // Time
    // UNIX Timestamp / EPOCH time
    // Detik yang sudah berlalu sejak 1 januari 1970 
    echo time();
    echo ("<br/>");
    // Gabungan date & time
    echo date("l", time()-60*60*24*3); 
    echo ("<br/>");
    /* ket : 
        - (dikurangi)
        60 (detik / second)
        60 (menit / minute)
        24 (jam / hour)
        3 (hari / day)
    */

    // mktime
    // Membuat sendiri detik
    // mktime (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date ("l",mktime(0,0,0,11,05,1999));
    echo ("<br/>");
    
    // strtotime
    echo strtotime("05 november 1999");
    echo ("<br/>");
    echo date("l", strtotime("05 nov 1999"));

?>