<?php

$bil = 5;
$jum = 10;

   for ($i = 1; $i <= $jum; $i++) {
    $hasil = $i + $bil;
    echo $i."+".$bil."=".$hasil;
    echo "<br>";

    if ($hasil % 2==0){
        echo "$hasil adalah angka genap <br>";
    }
    else{
        echo "$hasil adalah angka ganjil <br>";
    }

   }

?>