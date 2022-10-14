<?php
include('database.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
    $koneksi-> tambah_data ($_POST['id_film'],$_POST['genre'],$_POST['aktor'],$_POST['rilis']);
    header('location:tampil.php');
}
elseif($action=="update")
{
    $koneksi->update_data($_POST['id_film'],$_POST['genre'],$_POST['aktor'],$_POST['rilis'],);
    header('location:tampil.php');
}
elseif($action=="delete")
{
    $id_film = $_GET['id'];
    $koneksi->delete_data($id_film);
    header('location:tampil.php');
}
elseif ($action="login")
{
    $koneksi ->cek_data($_POST['username'],$_POST['password']);
}
?>