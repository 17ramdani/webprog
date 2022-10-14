<?php
include('database.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
    $koneksi-> tambah_data ($_POST['nim'],$_POST['nama'],$_POST['tgllahir'],$_POST['alamat']);
    header('location:tampil.php');
}
elseif($action=="update")
{
    $koneksi->update_data($_POST['nim'],$_POST['nama'],$_POST['tgllahir'],$_POST['alamat'],);
    header('location:tampil.php');
}
elseif($action=="delete")
{
    $nim = $_GET['id'];
    $koneksi->delete_data($nim);
    header('location:tampil.php');
}
elseif ($action="login")
{
    $koneksi ->cek_data($_POST['username'],$_POST['password']);
}
?>