<?php
class database{

    //KONEKSI KE DATABASE
    var $host ="localhost";
    var $username ="root";
    var $password ="";
    var $database ="mahasiswa";
    var $koneksi ="";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username,$this->password, $this->database);
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal :" .mysqli_connect_error();

        }
    }
    //UNTUK MENAMPILKAN DATA 
    function tampil_data()
    {
        $data = mysqli_query($this-> koneksi, "select * from mhs" );
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    
    function tambah_data($nim,$nama,$tgllahir,$alamat)
    {
        mysqli_query($this->koneksi,"insert into mhs values ('$nim','$nama','$tgllahir','$alamat')");
    }

    function get_by_id($nim)
    {
        $query = mysqli_query($this->koneksi ,"select* from mhs where nim = '$nim' ");
        return $query->fetch_array();
    }

    function update_data($nim,$nama,$tgllahir,$alamat)
    {
        $query = mysqli_query($this-> koneksi, "update mhs set nim='$nim',nama='$nama',tgllahir='$tgllahir'
        ,alamat='$alamat' where nim='$nim' ");
    }

    function delete_data($nim)
    {
        $query = mysqli_query($this->koneksi,"delete from mhs where nim='$nim'");
    }

    function cek_data ($username,$password)
    {
        $pwd =md5($password);
        $query = mysqli_query($this->koneksi, "select * from user where username = '$username' and password='$pwd'");

        $jum = mysqli_num_rows($query);
        if ($jum > 0)
        {
            header('location:tampil.php');
        }
        else
        {
            header('location:index.php');
        }

    }
}
?>