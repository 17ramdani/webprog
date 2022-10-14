<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    // include 'database aset.php'
    // $db = new database aset();
    require ("fpdf/fpdf.php");

    class lap_data_film extends FPDF 
    {
        // Page Header
        function Header()
        {
            $this->SetFont('arial','',14);
            $this->SetY(1);
            $this->SetX(1);
            $this->Cell(0,1,'Laporan Data Film',0,0,'C');
        }

        // Page Content
        function Content()
        {
            include 'database.php';
            $db = new database();
            $this->SetY(3);
            $this->SetX(1);
            $this->SetFont('Arial','',12);
            $this->Cell(6.0,0.7,'JUDUL',1,0,'C');
            $this->Cell(5,0.7,'GENRE',1,0,'C');
            $this->Cell(4,0.7,'AKTOR',1,0,'C');
            $this->Cell(0,0.7,'RILIS',1,1,'C');
            foreach ($db->tampil_data() as $x) {

                $Judul = $x['Judul'];
                $Genre = $x['Genre'];
                $Aktor = $x['Aktor'];
                $Rilis = $x['Rilis'];

                $this->Cell(6.0,0.5,$Judul,1,0,'L');
                $this->Cell(5,0.5,$Genre,1,0,'L');
                $this->Cell(4,0.5,$Aktor,1,0,'L');
                $this->Cell(0,0.5,$Rilis,1,1,'L');
            }
        }

        // Page Footer
        function Footer()
        {
            // Mengatur posisi 1,5cm dari bawah
            $this->SetY(-1.5);
            // Buat garis horizontal
            $this->Line(20,$this->GetY(),2,$this->GetY());
            // Arial italic 9
            $this->SetFont('Arial','I',9);
            // Nomor Halaman
            $this->Cell(0,1,'Halaman '.$this->PageNo(). ' dari {nb}', 0,0,'R');
        }
    }

    // Contoh pemanggilan class
    $pdf = new lap_data_film('P','cm','A4');

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Content();
    $pdf->Output();
?>