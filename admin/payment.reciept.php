<?php
session_start();
// checks if user not is logged in
if(!isset($_SESSION['userid'])){
    header("location:../pages/admission.login.php");
    exit;
}
include_once '../include/db_connection.php';
$sql = mysqli_query($conn,"SELECT * FROM admission WHERE `name` = '{$_SESSION['username']}'");
while($row = mysqli_fetch_assoc($sql)){
   
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' => 'A7-L']);
$mpdf -> AddPage();

// $mpdf -> Image('../img/account-logo.png', '15', '10');
$mpdf -> Image('../img/header.png', '15', '5');
$mpdf -> SetFont('','B','12');
$mpdf -> Cell(0,8,'PAYMENT RECIEPT',0,1,'C',1);
$mpdf -> SetFont('','N','12');
$mpdf -> Cell(0,8,'Date: '.date("d/m/Y"),0,1,'L',1);
$mpdf -> Cell(0,8,'Name: '.$row["name"],0,1,'L',1);
$mpdf -> Cell(0,8,'Entry Level: '.$row["level"],0,1,'L',1);
$mpdf -> Cell(0,8,'Amount: '.$row["admi_money"]." FCFA",0,1,'L',1);
$mpdf->Output();
}