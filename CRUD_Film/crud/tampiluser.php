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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="database.css">

    <title>E-Film</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-dragon text-warning fa-lg"></i>
                </div>
                <div class="sidebar-brand-text text-warning mx-3">Rome <sup>17</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 bg-warning">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider bg-warning">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-sign-in-alt"></i>
                    <span>Form Login : </span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="login.html">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Admin</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="register.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block bg-warning">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-gradient-primary">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-white bg-warning topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center mb-3">
                        <h1 class="h3 mb-1 text-white"> Dasboard Film
                            <i class="fas fa-film fa-lg fa-fw mr-2 text-"></i></h1>
                    </div>
                    <div class="text-sm">
                        <h5 class=" mb-5 text-white text-sm">Berikut adalah beberapa rekomendasi film terbaru dan
                            terpopuler pada saat ini untuk kalian bagi penggemar layar kaca.</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-11 rounded">
                            <img src="images/enjoy.gif" width="950px" alt="">
                        </div>
                    </div>
                </div>

                

                <div class="container">
                    <h1 class="h3 mb-1 text-white">Data Film <i class="fas fa-film fa-sm fa-fw mr-2 mt-5 text-"></i></h1>
                    <p class="mb-4 text-white">Berikut adalah deretan data film yang direkomendasikan untuk kalian para
                        penggemar film </p>

                    <div class="datamhs">
                        <table class="table table-dark table-striped border-bottom-warning">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Genre</th>
                                <th>Aktor</th>
                                <th>Rilis</th>
                            </tr>

                            <?php
                $No = 1;
                foreach($db->tampil_data() as $x){
                ?>

                            <tr>
                                <td><?php echo $No++; ?></td>
                                <td><?php echo $x['Judul']; ?></td>
                                <td><?php echo $x['Genre']; ?></td>
                                <td><?php echo $x['Aktor']; ?></td>
                                <td><?php echo $x['Rilis']; ?></td>
                            </tr>
                            <?php
                 }
                ?>
                        </table>
                    </div>
                </div>

            </div>
            <div class="container">
                    <div class="row">

                        <div class="col-md-6 mt-5 mb-5">
                            <h1 class="h3 mb-1 text-white">Persentase Genre Film</h1>
                            <p class="mb-4 text-white">Berikut adalah diagram statistik genre film dari yang digemari
                                sampai kurang peminatnya </p>
                            <canvas class="bg-white border-bottom-warning rounded" id="myChart" width="400" height="400"
                                border=2></canvas>
                            <script>
                                const labels = [
                                    'Action',
                                    'Fantasi',
                                    'Animation',
                                    'Horror',
                                    'Comedi',
                                    'Romance',
                                    'Sci-fi',
                                ];
                                const data = {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Persentase',
                                        backgroundColor: '#1CC88A',
                                        borderColor: 'yellow',
                                        data: [88, 68, 66, 40, 80, 74, 67, ],
                                    }]
                                };
                                const config = {
                                    type: 'bar',
                                    data: data,
                                    options: {}
                                };

                                var myChart = new Chart(
                                    document.getElementById('myChart'),
                                    config
                                );
                            </script>


                        </div>
                        <div class="col-md-6 mt-5 mb-2">
                            <h1 class="h3 mb-1 text-white">Poster Film</h1>
                            <p class="mb-4 text-white">Berikut adalah beberapa poster film terbaru yang sedang hangat
                                diperbincangkan para penggemar film </p>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 rounded" src="images/img1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 rounded" src="images/img3.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100 rounded" src="images/img4.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100 rounded" src="images/img8.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item ">
                                        <img class="d-block w-100 rounded" src="images/img9.jpg" alt="Second slide">
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.container-fluid -->
        

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-dark text-center my-auto">

                <span>Copyright ; Ramdani 2022</span>
                <i class="fas fa-fw fa-heart text-danger"></i>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>


</html>