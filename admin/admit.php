<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf -> AddPage();

// $mpdf -> SetFont('Arial','','12');

$mpdf -> Image('../img/header.png', '15', '10');

$mpdf -> Cell(80,10,'Your Ref:.................',0,0,'L',1);
$mpdf -> Cell(60,10,'Date:',0,1,'R',1);
$mpdf -> Cell(60,5,'Dear:',0,0);
$mpdf -> Cell(118,5,'Our Ref: SL/OA/2021-2022',0,1,'R');
$mpdf -> Cell(118,25,'OFFER OF ADMISSION',0,1,'C');
// $mpdf->WriteHTML('<p>Date:</p>');
$mpdf->Output();