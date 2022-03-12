<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf -> AddPage();

// $mpdf -> SetFont('Arial','','12');

$mpdf -> Image('../img/header.png', '15', '10');

$mpdf -> Cell(20,10,'Your Ref: ………………………………',0,0);
// $mpdf -> Cell(20,10,'Date:',0,30);
$mpdf -> Cell(25,20,'Our Ref: SL/OA/2021-2022',0,0,'right');
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();