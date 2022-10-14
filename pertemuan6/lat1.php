<?php

class Hitung 
{
    public $harga=0;
    public $diskon=0;

    function Cek_Harga(){
        $hasil = $this-> harga * ($this->diskon/100);
        return($this->harga - $hasil);
    }
}

$objek = new Hitung ;
$objek ->harga = 4000000;
$objek ->diskon =10;

if($objek->diskon==10){
    echo number_format ($objek-> Cek_Harga());
}elseif ($objek-> diskon == 20){
    echo number_format ($objek-> Cek_Harga());
}else{
    echo "Tidak ada nilai yang diperiksa";
}

?>