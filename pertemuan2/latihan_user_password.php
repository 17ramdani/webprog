
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    $Username="admin";
    $password="qwerty";

    if ($Username == "admin" && $password=="qwerty"){
        echo "$Username dan $password benar, Anda berhasil login";
    }
    else{
        echo "$Username dan $password salah, Klik lupa password atau daftar";
    }

?>

</body>
</html>
