<?php
 
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$jamKerja = $_POST['jamKerja'];
 
if($jabatan == 'manager'){
    $gaji_perjam = 30000;
}elseif ($jabatan == 'sekretaris') {
    $gaji_perjam = 31000;
}elseif ($jabatan == 'bendahara') {
    $gaji_perjam = 32000;
}elseif ($jabatan == 'marketing') {
    $gaji_perjam = 33000;
}elseif ($jabatan == 'produksi') {
    $gaji_perjam = 33000;
}
 
if($jamKerja <= 200){
    $jam = $jamKerja;
    $lembur = 0;
}else{
    $jam =  200;
    $lembur = $jamKerja - $jam;
}
 
$gaji_pokok = $jam * $gaji_perjam;
 
$gaji_lembur = 20000 * $lembur;
 
$total_gaji = $gaji_pokok + $gaji_lembur;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Nama Karyawan : <?php echo ucwords($nama); ?></td>
            </tr>
            <tr>
                <td>Jabatan Karyawan : <?php echo ucwords($jabatan); ?></td>
            </tr>
            <tr>
                <td>Jam Kerja : <?php echo $jamKerja." Jam"; ?></td>
            </tr>
            <tr>
                <td>Gaji Perjam : <?php echo $gaji_perjam; ?></td>
            </tr>
            <tr>
                <td>Gaji Pokok : <?php echo $gaji_pokok; ?></td>
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
                <td>Total Gaji Karyawan : <?php echo $total_gaji; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>