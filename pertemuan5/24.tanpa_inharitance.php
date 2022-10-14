<?php
class Produk{
    public $merek = "Sharp";
    public $stok = 05;


public function CekStok(){
    return "Sisa stok :" .$this->stok;
    }
}

$produk01 = new Produk ();
echo $produk01->merek;
echo "<br>";
echo $produk01->CekStok();
