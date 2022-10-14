<?php
class database{
    //KONEKSI KE DATABASE
    var $host ="localhost";
    var $username ="root";
    var $password ="";
    var $database ="film";
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
        $data = mysqli_query($this-> koneksi, "select * from datafilm");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    
    function tambah_data($Judul,$Genre,$Aktor,$Rilis)
    {
        mysqli_query($this->koneksi,"insert into datafilm values ('$Judul','$Genre','$Aktor','$Rilis')");
    }

    function get_by_id($judul)
    {
        $query = mysqli_query($this->koneksi ,"select* from datafilm where judul = '$judul' ");
        return $query->fetch_array();
    }

    function update_data($Judul,$Genre,$Aktor,$Rilis)
    {
        $query = mysqli_query($this-> koneksi, "update datafilm set  Judul='$Judul',Genre='$Genre', Aktor='$Aktor'
        ,Rilis='$Rilis' where Judul='$Judul' ");
    }

    function delete_data($Judul)
    {
        $query = mysqli_query($this->koneksi,"delete from datafilm where Judul = '$Judul' ");
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
            header('location:login.html');
        }
    }
}
?>