<?php
include_once '../include/db_connection.php';
$sql = mysqli_query($conn,"SELECT * FROM admission WHERE `name` = '{$_SESSION['username']}'");
while($row = mysqli_fetch_assoc($sql)){
   
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' => 'A6-L']);
$mpdf -> AddPage();

// $mpdf -> Image('../img/account-logo.png', '15', '10');
$mpdf -> Image('../img/header.png', '15', '13');
$mpdf -> SetFont('','B','12');
$mpdf -> Cell(0,8,'PAYMENT RECIEPT',0,1,'C',1);
$mpdf -> SetFont('','N','12');
$mpdf -> Cell(0,8,'Date: '.date("d M, Y"),0,1,'L',1);
$mpdf -> Cell(0,8,'Name: '.$row["name"],0,1,'L',1);
$mpdf -> Cell(0,8,'Entry Level: '.$row["level"],0,1,'L',1);
if($row['level'] == 'HND'){
    $mpdf -> Cell(0,8,"Amount: 25,000FCFA",0,1,'L',1);
}
else {
    $mpdf -> Cell(0,8,"Amount: 30,000FCFA",0,1,'L',1);
}
$mpdf -> Image('../img/footer.png', '15', '80');
$mpdf->Output('Payment reciept.pdf','D');
}