<?
$pdf=new FPDF('L','mm', array(216, 330));
$pdf->setTopMargin(15);
$pdf->setLeftMargin(12);
$pdf->SetFont('helvetica','B', 11);

$pdf->AddPage();
$pdf->Cell(6);
$pdf->Cell(100, 12,'Hallo Pengguna CI',0,1,'L');
$pdf->Output();
?>