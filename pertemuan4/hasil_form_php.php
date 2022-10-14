<?php

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jamKerja = $_POST['jamKerja'];

if($jabatan == 'direktur'){
    $gaji_perjam = 30000;
}elseif ($jabatan == 'manajer') {
    $gaji_perjam = 31000;
}elseif ($jabatan == 'manajer pemasaran') {
    $gaji_perjam = 32000;
}elseif ($jabatan == 'sekertaris perusahaan') {
    $gaji_perjam = 33000;
}elseif ($jabatan == 'adm') {
    $gaji_perjam = 33000;
}

if($jamKerja <= 8){
    $jam = $jamKerja;
    $lembur = 0;
}else{
    $jam =  8;
    $lembur = $jamKerja - $jam;
}

$gaji_pokok = $jam * $gaji_perjam;

$gaji_lembur = $lembur* 20000;

$total_gaji = $gaji_pokok + $gaji_lembur;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gaji</title>
    <link rel="stylesheet" href="form_jabatan.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Nama  : <?php echo ucwords($nama) ?></td>
            </tr>
            <tr>
                <td>Jabatan  : <?php echo ucwords($jabatan) ?></td>
            </tr>
            <tr>
                <td>Waktu Kerja: <?php echo $jamKerja." Jam" ?></td>
            </tr>
            <tr>
                <td>Gaji Perjam : <?php echo "Rp.$gaji_perjam,-" ?></td>
            </tr>
            <tr>
                <td>Lembur : <?php echo $lembur." Jam"; ?></td>
            </tr>
            <tr>
                <td>Gaji Lembur Perjam : <?php echo 20000; ?></td>
            </tr>
            <tr>
                <td>Gaji Lembur : <?php echo $gaji_lembur; ?></td>
            </tr>
            <tr>
                <td>Gaji Pokok : <?php echo "Rp.$gaji_pokok,-" ?></td>
            </tr>
            <tr>
                <td>Total Gaji Yang di Dapat: <?php echo "Rp. $total_gaji,- " ?></td>
            </tr>
        </table>
    </div>
</body>
</html>