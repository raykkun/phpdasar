<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$handphone = query("SELECT * FROM handphone");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Handphone</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Daftar Handphone</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Perusahaan</th>
            <th>No. Imei</th>
            <th>Gambar</th>
        </tr>';

    $i = 1; 
    foreach( $handphone as $row ){
        $html .= '<tr>
            <td>'. $i .'</td>
            <td>'. $row["merk"] .'</td>
            <td>'. $row["harga"] .'</td>
            <td>'. $row["perusahaan"] .'</td>
            <td>'. $row["no_imei"] .'</td>    
            <td><img src="img/'. $row["gambar"] .'" width="50"></td>
        </tr>';
        $i++;
    }

$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-handphone', \Mpdf\Output\Destination::INLINE);

?>

