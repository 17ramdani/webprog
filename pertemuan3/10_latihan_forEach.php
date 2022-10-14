<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan For Each PHP</title>
</head>
<body>
    <!-- Struktur for each adalah perulangan khusus yang dipakai untuk menangani data array  -->
    <?php
        $nama = array("Andri", "Joko", "Risna", "Oman", "Caca");

        for ($i = 0; $i  < 5; $i++) { 
            echo "$nama[$i] <br>";
        }
    ?>
</body>
</html>