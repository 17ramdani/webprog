<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Jabatan</title>
    <link rel="stylesheet" href="form_jabatan.css" />
  </head>
  <body>
    <div class="container">
      <h2>Form Gaji Karyawan</h2>
      <form action="hasil_form_php.php" method="post">
        <table>
          <tr>
            <td class="karyawan">Masukan Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="" /></td>
          </tr>
          <tr>
            <td>Pilih Jabatan</td>
            <td>:</td>
            <td>
              <select name="jabatan" id="">
                <option value="direktur">Direktur</option>
                <option value="manajer">Manajer</option>
                <option value="manajer pemasaran">Manajer Pemasaran</option>
                <option value="sekertaris perusahaan">Sekertaris Perusahaan</option>
                <option value="adm">ADM/Gudang</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jumlah Jam Kerja</td>
            <td>:</td>
            <td><input type="number" name="jamKerja" value="" /></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Submit" /></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>