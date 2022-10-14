<?php
include ('database.php');
$db = new database();
$id_film =$_GET['id'];

if(!is_null($id_film))
{
    $data_datafilm = $db->get_by_id($id_film);
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
    <div class="container edit">
        <form action="inputdata.php?action=update" method="post">
            <table>
                <tr>
                    <td>Judul Film</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value="<?php echo   $data_datafilm ['id_film'];?>"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>:</td>
                    <td><input type="text" name="genre" value="<?php echo   $data_datafilm ['genre'];?>"></td>
                </tr>
                <tr>
                    <td>Aktor</td>
                    <td>:</td>
                    <td><input type="text" name="aktor" value="<?php echo   $data_datafilm ['aktor'];?>"></td>
                </tr>
                <tr>
                    <td>Rilis</td>
                    <td>:</td>
                    <td><input type="date" name="rilis" value="<?php echo   $data_datafilm ['rilis'];?>"></td>
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