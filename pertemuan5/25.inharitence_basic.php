<?php

use Produk as GlobalProduk;

class Produk {
    public $merek = "Sharp";
    public $stok =50;

    public function CekStok(){
        return "Sisa Stok" .$this->stok;
    }
}

class Televisi extends Produk {
}

$produk01 = new Televisi( );
echo $produk01 -> merek;
echo "<br>";
echo $produk01 ->cekstok();
