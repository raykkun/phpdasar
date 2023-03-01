<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM handphone 
            Where
            merk LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
$handphone = query($query);

?>
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