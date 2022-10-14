<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" placeholder="Masukan bilangan yang mau ditambahkan">
        <input type="number" placeholder="Masukan jumlah data">
        <input type="submit" value="Submit">
    </form>
    <?php 
        for ($i=1; $i <= 15; $i++) {
            $hasil = $i + 5;
            echo"$i + 5 = $hasil adalah bilangan ";
            if ($hasil %2 ==0) {
                echo "Genap <br>";
            } else {
                echo "Ganjil <br>";
            }
        }
    ?>
</body>
</html>