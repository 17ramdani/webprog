<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat output (html)</title>
</head>
<body>
    <?php   
    echo "Menampilkan Variabel dengan POST <BR>";
    echo "Nama :"; echo $_POST['nama_pemakai'];
    echo $nama_pemakai;

    echo "<BR> Menampilkan Variabel dengan Request <br>";
    echo "Nama = "; echo $_REQUEST['nama_pemakai'];

    echo "<br> Menampilkan variabel dengan HTTP_post<br>";
    echo "Nama " ; echo $HTTP_POST['nama_pemakai'];
    
    echo "<br> Menampilkan Variabel dengan <br>";
    echo "Nama = "; echo $Username;   
    ?>
</body>
</html>