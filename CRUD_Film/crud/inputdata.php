<?php
include('database.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
    $koneksi-> tambah_data ($_POST['Judul'],$_POST['Genre'],$_POST['Aktor'],$_POST['Rilis']);
    header('location:tampil.php');
}
elseif($action=="update")
{
    $koneksi->update_data ($_POST['Judul'],$_POST['Genre'],$_POST['Aktor'],$_POST['Rilis']);
    header('location:tampil.php');
}
elseif($action=="delete")
{
    $Judul = $_GET['id'];
    $koneksi->delete_data($Judul);
    header('location:tampil.php');
}
elseif ($action="login")
{
    $koneksi ->cek_data($_POST['username'],$_POST['password']);
}
?>