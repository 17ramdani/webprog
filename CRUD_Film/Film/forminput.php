<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="database.css">

    <title>CRUD</title>
</head>

<body>
    <div class="container form">
    <form method="post" action="inputdata.php?action=add">
        <table>
        <table>
                <tr>
                    <td>Judul Film</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value="<?php echo  $datafilm['id_film'];?>"></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>:</td>
                    <td><input type="text" name="genre" value="<?php echo$data_datafilm['genre'];?>"></td>
                </tr>
                <tr>
                    <td>Aktor</td>
                    <td>:</td>
                    <td><input type="text" name="aktor" value="<?php echo $data_datafilm['aktor'];?>"></td>
                </tr>
                <tr>
                    <td>Rilis</td>
                    <td>:</td>
                    <td><input type="date" name="rilis" value="<?php echo $data_datafilm['alamat'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="tombol" value="Simpan"></td>
            </table>
        </table>
    </form>
    </div>
    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>