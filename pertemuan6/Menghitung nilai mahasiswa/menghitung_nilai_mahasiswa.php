<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>
<body>
    <h1>Input Nilai Data Mahasiswa</h1>

    <form action="" method="get">
        <label>Nama : </label>
        <input type="text" name="nama">
        <br>
        <label>NIM  : </label>
        <input type="number" name="NIM ">
        <br>
        <label>Nilai :  </label>
        <input type="number" name="Nilai">
        <br>
        <input type="submit" name="submit" value= "Submit">
    </form>

<?php
    if(isset($_GET["Submit"])){

        $ponten=$grade->setNama($_GET["hasil"]);
        echo $grade -> getNilai();
    }
?>
    
</body>
</html>

<?php 

class Hitung{
    var $nim;
    var $nama;
    var $nilai;

    function getNilai(){
        if($this->nilai <= 100 && $this >= 80){
            $hasil = "Selamat Nilai anda 'A' pertahankan";
        }else if($this->nilai <= 79 && $this >= 70){
            $hasil = "Selamat Nilai anda 'B' tingakatkan ";
        }elseif($this->nilai <= 69 && $this >= 60){
            $hasil = "Nilai anda 'C' Ayo belajar yang giat lagi";
        }elseif($this->nilai <= 59 && $this >= 50){
            $hasil = "Nilai anda 'D' kurang ";
        }elseif($this->nilai <= 59 && $this >= 50){
            $hasil = "Nilai anda 'E' Tidak lulus ";
        }
        return $hasil;
    }
}
?>