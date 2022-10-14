<?php

class Hitung
{
    public $harga=0;
    public $diskon=0;

    function Cek_Harga(){
        $hasil=$this->harga*($this->diskon/100);
        return($this->harga - $hasil);
    }
}

$objek= new Hitung;
$objek->harga=4000000;
$objek->diskon=10;
