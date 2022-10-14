<?php
include 'database.php';
$db = new database();
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

<body>
<nav class="navbar">
        <div class="container">
            <span class="navbar-brand mb-0 h1">CRUD OOP PHP</span>
        </div>
    </nav>
    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%"
            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h2>POLITEKNIK LP3I BANDUNG</h2>
    <H3>DATA MAHASISWA</H3>


    <div class="container">
        <div class="datamhs">
            <a href="forminput.php">Input Data</a>
            <table class="table table-success table-striped " border="2">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>

                <?php
                $no = 1;
                foreach($db->tampil_data() as $x){
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['nim']; ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['tgllahir']; ?></td>
                    <td><?php echo $x['alamat']; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $x['nim']; ?> &aksi=edit">Edit</a>
                        <a href="inputdata.php?action=delete&id=<?php echo $x['nim']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
    }
                ?>
            </table>
        </div>
    </div>
</body>

</html>