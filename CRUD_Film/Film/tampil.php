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
    <div class="container">
        <div class="datamhs">
            <a href="forminput.php">Input Data</a>
            <table class="table table-success table-striped " border="2">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Aktor</th>
                    <th>Rilis</th>
                    <th>Opsi</th>
                </tr>

                <?php
                $no = 1;
                foreach($db->tampil_data() as $x){
                ?>

                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['id_film']; ?></td>
                    <td><?php echo $x['genre']; ?></td>
                    <td><?php echo $x['aktor']; ?></td>
                    <td><?php echo $x['rilis']; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $x['id_film']; ?> &aksi=edit">Edit</a>
                        <a href="inputdata.php?action=delete&id=<?php echo $x['id_film']; ?>">Hapus</a>
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