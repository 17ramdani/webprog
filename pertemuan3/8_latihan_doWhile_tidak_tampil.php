<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Do While Tidak Tampil</title>
</head>
<body>
    <?php
        $i = 1000;
        while ($i <= 10) {
            echo $i;
            echo "Tidak akan tampil di browser <br>";
            $i = $i + 1;
        }
    ?>
</body>
</html>