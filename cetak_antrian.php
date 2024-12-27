<?php
// memanggil library FPDF
require('plugins\fpdf186\fpdf.php');
require 'koneksi.php';

$pdf=new FPDF('P','mm',array(90,130));
$pdf->AddPage();

$pdf->SetFont('Times','',6);
date_default_timezone_set('Asia/Makassar');
$today = utf8_encode(strftime('%A %d %B %Y'));
$pdf->Cell(0,5,$today,0,0,'R');

// Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->Image('assets\img\logo.png', 5, 7, 30, 10);

$pdf->SetFont('Times','B',10);
$pdf->Cell(-70, 35,'ANTRIAN ONLINE PUSKESMAS KEDUNGWARU',0,0,'C');

$pdf->Cell(200,30,'',0,1);
$pdf->SetFont('Times','',11);

$data = mysqli_query($conn,"SELECT  * FROM t_antrian ORDER BY id_antrian DESC LIMIT 1");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(55,6, 'Nama Pasien         : '. $d['nama'],'/n',10,10);
  $pdf->Cell(75,6, 'NIK                       : '. $d['nik'],'/n',1,0);
  $pdf->Cell(75,6, 'Nomor BPJS         : '. $d['bpjs'],'/n',1,0);  
  $pdf->Cell(55,6, 'Jenis Kelamin       : '. $d['jkel'],'/n',1,1);
  $pdf->Cell(55,6, 'Poli Tujuan           : '. $d['poli'],'/n',1,1);
  $pdf->Cell(55,6, 'Keluhan                : '. $d['keluhan'],'/n',1,1);
  $pdf->SetFont('Times','B',12);
  $pdf->Cell(55,10, 'Nomor Antrian Online  : '. $d['nomor'],'/n',1,1); 
}

$pdf->SetFont('Times','B',9);
$pdf->Cell(70, 20,'~ SEMOGA LEKAS SEMBUH ~',0,0,'C');

$pdf->Output();
?>