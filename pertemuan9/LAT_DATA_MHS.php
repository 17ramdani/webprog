<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    //include 'database.php';
    //$db = new database();
    require ('fpdf184/fpdf.php');

    class lap_data_mhs extends
    {
        
        //Page Header
        function Header ()
        {
            $this -> SetFont ('Arial','',14);
            $this -> SetY(1);
            $this -> SetX(1);
            $this -> Cell(0,1,'DATA MAHASISWA',0,0,'C');
        }

        //Page Content
        function Content()
        {
            include 'database.php';
            $db = new database();
            $this->SetY(3);
            $this->SetX(1);
            $this->SetFont('Arial','',12);
            $this->Cell(3.5,0.7,'NIM',1,0,'C');
            $this->Cell(5,0.7,'NAMA',1,0,'C');
            $this->Cell(4,0.7,'TANGGAL LAHIR',1,0,'C');
            $this->Cell(0,0.7,'ALAMAT',1,1,'C');
            foreach($db->tampil_data() as $x)
            {
                $nim = $x['nim'];
                $nama = $x['nama'];
                $tgllahir =$x['tgllahir'];
                $alamat = $x['alamat'];

                $this -> Cell(3.5,0.5,$nim,1,0,'C');
                $this -> Cell(5,0.5,$nama,1,0,'L');
                $this -> Cell(4,0.5,$tgllahir,1,0,'L');
                $this -> Cell(0,0.5,$alamat,1,1,'L');
            }
        }

        //Page footer 
        function Footer()
        {
            //atur posisi 1,5 cm dari bawah
            $this->SetY(-1.5);
            //buat garis horizontal
            $this->Line(20,$this->GetY(),2,$this->GetY());
            //Arial
            $this->SetFont('Arial','I',9);
            //Nomor halaman 
            $this-> Cell(0,1,'Halaman' .$this->PageNo().'dari {nb}',0,0,'R');


        }
    }

    //contoh pemanggilan class

    $pdf = new lap_data_mhs('P','cm','A4');

    $pdf -> AliasNbPAges();
    $pdf -> AddPage();
    $pdf -> Content();
    $pdf -> Output();
    ?>