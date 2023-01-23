<?php
// memanggil library FPDF
require('library/fpdf.php');

 

include_once("koneksi.php");
$nik = $_GET['nik'];

$db = mysqli_query($koneksi, "SELECT * FROM users WHERE nik= $nik");
$vaksindb = mysqli_query($koneksi, "SELECT * FROM vaksin WHERE nik= $nik");

foreach ($vaksindb as $vaksin_data) {
}

foreach ($db as $user_data) {
}


// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'SERTIFIKAT VAKSIN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);

 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$result = mysqli_query($koneksi, "SELECT * FROM users");


  $pdf->Cell(95,7, 'NIK',1,0);
  $pdf->Cell(95,7, $user_data['nik'],1,1);
  $pdf->Cell(95,7, 'NAMA',1,0);
  $pdf->Cell(95,7, $user_data['nama'],1,1);
  $pdf->Cell(95,7, 'NO HP',1,0);
  $pdf->Cell(95,7, $user_data['no_hp'],1,1);
  $pdf->Cell(95,7, 'ALAMAT',1,0);
  $pdf->Cell(95,7, $user_data['alamat'],1,1);
  $pdf->Cell(95,7, 'JENIS VAKSIN',1,0);
  $pdf->Cell(95,7, $vaksin_data['type'],1,1);
  $pdf->Cell(95,7, 'TANGGAL VAKSIN',1,0);
  $pdf->Cell(95,7, $vaksin_data['date'],1,1);
  $pdf->Cell(95,7, 'TEMPAT VAKSIN',1,0);
  $pdf->Cell(95,7, $vaksin_data['locations'],1,1);

  $pdf->Cell(200,10,'SUDAH DIVAKSIN',0,0,'C');


 
$pdf->Output();
 
?>