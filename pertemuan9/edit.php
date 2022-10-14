<?php
include ('database.php');
$db = new database();
$nim =$_GET['id'];

if(!is_null($nim))
{
    $data_mhs = $db->get_by_id($nim);
}
else
{
    header('location:tampil.php');
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="database.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD</title>
</head>
 </head>
 <body>
 <nav class="navbar text-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">CRUD OOP PHP</span>
        </div>
    </nav>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
     <h3>Tambah Data Mahasiswa</h3>
     <div class="container edit">
     <form action="inputdata.php?action=update" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $data_mhs['nim'];?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data_mhs['nama'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="text" name="tgllahir" value="<?php echo $data_mhs['tgllahir'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $data_mhs['alamat'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Update"></td>
        </table>
     </form>
     </div>
     
 </body>
 </html>
