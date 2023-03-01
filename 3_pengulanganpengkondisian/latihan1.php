<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Latihan PHP</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for($h = 1; $h <= 1; $h++){
            echo "<tr>";
            for($d = 1; $d <= 5; $d++){
                echo "<td>nama</td>";
                echo "<td>nama2</td>";
                echo "<td>nama3</td>";
                echo "<td>nama4</td>";
                echo "<td>nama5</td>";
            break;
            }
            echo "</tr>";
        }
            for($i = 1; $i <= 3; $i++){
                echo "<tr>";
                for($j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>