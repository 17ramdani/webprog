<?php
class database{

    //KONEKSI KE DATABASE
    var $host ="localhost";
    var $username ="root";
    var $password ="";
    var $database ="film.db";
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
        $data = mysqli_query($this-> koneksi, "select * from datafilm" );
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    
    function tambah_data($id_film,$genre,$aktor,$rilis)
    {
        mysqli_query($this->koneksi,"insert into datafilm values ('$id_film','$genre','$aktor','$rilis')");
    }

    function get_by_id($id_film)
    {
        $query = mysqli_query($this->koneksi ,"select * from datafilm where id_film = '$id_film' ");
        return $query->fetch_array();
    }

    function update_data($id_film,$genre,$aktor,$rilis)
    {
        $query = mysqli_query($this-> koneksi, "update datafilm set id_film='$id_film',genre='$genre',aktor='$aktor'
        ,rilis='$rilis' where id_film ='$id_film' ");
    }

    function delete_data($id_film)
    {
        $query = mysqli_query($this->koneksi,"delete from datafilm where id_film='$id_film'");
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