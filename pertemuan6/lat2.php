<?php 

    class Hitung
{
    public $harga=0;
    public $diskon=0;

    function Cek_Harga() {
        //Nilai diskon=nilai harga dikali nilai diskon dibagi 100 
        $hasil=$this ->harga * ($this -> diskon / 100);
        //harga setelah di diskon adalah barang dikurangi nilai diskon
        return ($this -> harga - $hasil);
    }
}

?>

<?php //mengset nilai variabel err ketika kosong $diskon_err=$harga_barang_err=$hasil="" ; if
$diskon_err = $harga_barang_err = $hasil="";

    if($_SERVER['REQUEST_METHOD']=='POST') {

    if (empty(trim($_POST['diskon']))) {
        $diskon_err="Nilai diskon tidak boleh kosong ";
    }

    else {
        $diskon=$_POST['diskon'];
    }

    if (empty(trim($_POST['harga_barang']))) {
        $harga_barang_err="Harga barang tidak boleh kosong";
    }

    else {
        $harga_barang=$_POST['harga_barang'];
    }

    if (empty($diskon_err) && empty($harga_barang_err)) {
        $objek= new Hitung;
        $objek ->harga=$harga_barang;
        $objek ->diskon=$diskon;

        $hasil="<b> Harga barang setelah di diskon adalah : </b>".number_format($objek -> 
        Cek_Harga()). '<br /> <br />';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Hitung Harga Diskon</title>
</head>
<body>
    <div class= "container" align="center" style ="margin: 50px 0; padding:15px 0; border : 5px solid #ccc;" >
        <h3> Menghitung Cek_Harga Barang Setelah di diskon Menggunakan Script PHP <br/></h3>
        <form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Nilai Diskon : </label>
        <span style="color: red;"> <?php echo $diskon_err;?> </span>
        <input type="number" name="diskon"/> <br>
        <label> Harga Barang :</label>
        <span style="color: red;"> <?php echo $harga_barang_err;?> </span>
        <input type="number" name="harga_barang"/> <br>
        <input type="submit" name="submit" value="CEK HARGA">
        </form>
        <?php echo $hasil; ?>
    </div>
</body>
</html>