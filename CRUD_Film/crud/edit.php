<?php
include ('database.php');
$db = new database();
$Judul =$_GET['id'];

if(!is_null($Judul))
{
    $data_film = $db->get_by_id($Judul);
}
else
{
    header('location:tampil.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Film</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div class="img mt-5">
                                    <img src="images/update.gif" width="600px" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <h1 class="h3 text-dark"> <i class="fas fa-edit text-warning"></i> Edit Data
                                            Film!</h1>

                                    </div>
                                    <form action="inputdata.php?action=update" method="post">
                                        <table>
                                            <div class="mb-4">
                                                <input class="form-control form-control-lg border-warning" type="text" name="Judul" value="<?php echo $data_film['Judul'];?>">
                                            </div>
                                            <div class="mb-4">
                                                <input class="form-control form-control-lg border-warning" type="text" name="Genre" value="<?php echo $data_film['Genre'];?>">
                                            </div>
                                            <div class="mb-4">
                                                <input class="form-control form-control-lg border-warning" type="text" name="Aktor" value="<?php echo $data_film['Aktor'];?>">
                                            </div>
                                            <div class="mb-4">
                                                <label for="tanggalrilis" class="label col-form-label-md">Tanggal Rilis : </label>
                                                <input class="form-control form-control-lg border-warning"type="date" name="Rilis" value="<?php echo $data_film['Rilis'];?>">
                                            </div>
                                            <input class="btn btn-primary btn-lg" type="submit" name="tombol" value="Update">
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>