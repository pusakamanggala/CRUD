<?php
// memanggil library FPDF
require('./library/fpdf.php' );
include_once("koneksi.php");
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA PESERTA VAKSIN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'NIK' ,1,0,'C');
$pdf->Cell(45,7,'NAMA',1,0,'C');
$pdf->Cell(35,7,'NO HP',1,0,'C');
$pdf->Cell(50,7,'ALAMAT',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$result = mysqli_query($koneksi, "SELECT * FROM users");
while($d = mysqli_fetch_array($result)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['nik'],1,0);
  $pdf->Cell(45,6, $d['nama'],1,0);  
  $pdf->Cell(35,6, $d['no_hp'],1,0);
  $pdf->Cell(50,6, $d['alamat'],1,1);
}
 
$pdf->Output();
 
?>