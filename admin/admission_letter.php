<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

// $id = $_GET['id'];
$email = $_SESSION["email"];
include 'variables.php';
$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
$query = "SELECT * FROM admission WHERE instituteEmail = '$email'";
$result = mysqli_query($mysqli,$query);
while($row = mysqli_fetch_array($result)){

$mpdf = new \Mpdf\Mpdf();
$mpdf -> AddPage();

// $mpdf -> SetFont('Arial','','12');
$name = $row[1];
$school = $row[23];
$program = $row[24];
$matricle = $row[34];
$email = $row[37];
$date = $row[38];

$mpdf -> Image('../img/header.png', '15', '10');

$mpdf -> Cell(80,10,'Your Ref:.................',0,0,'L',1);
$mpdf -> Cell(80,10,'Date:'.$date,0,1,'R',1);
$mpdf -> Cell(60,5,'Dear: '.$name,0,0,'L');
$mpdf -> Cell(118,5,'Our Ref: SL/OA/2021-2022',0,1,'R',1);
$mpdf -> SetFont('','B','12');
$mpdf -> Cell(0,15,'OFFER OF ADMISSION',0,1,'C');
$mpdf -> SetFont('','I','12');
$mpdf -> Cell(0,0,'“The most important investment you can make is in yourself”. Warren Buffet',0,1,'C');
$mpdf -> SetFont('','','12');
$mpdf -> Ln(2);
$mpdf -> WriteHTML('<p align="justify" style="line-height: 2;"><b>SwissLink Higher Institute of Business and Technology</b>, presents the appropriate platform for you to/
    conduct the best investment that will build and forever shape your life. Education in <b>SwissLink
    Professional University</b> does more than give you the fact in a chosen field of study. We use the fact of
    life to create needs that are intuitive and critical to produce the right results. Education is the equipment
    every individual needs to produce the good(s) and /or service(s) he/she will use to revolutionize the
    world.</p>');
$mpdf -> WriteHTML('<p align="justify" style="line-height: 2;">In this regard, we are pleased to offer you a place to study '.$program.' in the '.$school.' at <b>SwissLink Higher Institute of Business and Technology</b>, for the academic year 2021/2022 with matriculation number '.$matricle.'</p>'); 
$mpdf -> WriteHTML('<p align="justify" style="line-height: 2;">As a student of this establishment, you are expected to pay an annual tuition fee of .
The said amount can be paid in two or three installments, however, the first installment is set at not less
than 200, 000 FRS. Internship placement is dependent on the completion of this annual tuition fee.
The total amount can be paid using your <b>Student account</b>, at the <b>Secretariat or to the <b>Institution\'s bank
account</b> at <b>UNICS PLC, Kumba</b> - Acoount No: <b>37131300357006</b></p>');
$mpdf -> WriteHTML('<p>Your personal school email account (In partnership with Google Education) will follow this format.</p>');
$mpdf -> WriteHTML('<p><b>Username: </b>'.$email.'</p>');
$mpdf -> WriteHTML('<p><b>Password: <b/>******** (Contact Admin)</p>');
$mpdf -> Ln(15);
$mpdf -> WriteHTML('<p>Yours Sincerly,</p>');
$mpdf -> WriteHTML('<p><b>SwissLink Pofessional University</b></p>');
$mpdf -> Image('../img/footer.png', '15', '265.5');
// $mpdf->WriteHTML('<p>Date:</p>');
$mpdf->Output();
}