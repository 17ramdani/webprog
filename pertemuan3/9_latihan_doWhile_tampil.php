<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Do while Tampil</title>
</head>
<body>
    <?php
        $i = 1000;
        do {
            echo "$i";
            echo "Akan tampil di browser";
            $i = $i + 1;
        } while ($i <= 10);
    ?>
</body>
</html>