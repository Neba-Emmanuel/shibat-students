<?php
session_start();
include_once '../include/db_connection.php';

$name = $_SESSION['studname'];
$level = $_SESSION['level'];
$tel = $_SESSION['number'];
$amt = $_SESSION['amt'];
$matricle = $_SESSION['matricle'];
$sql = mysqli_query($conn,"INSERT INTO `transaction`(`name`, `level`, `amount`, `number`, `matricle`) VALUES('$name', '$level', '$amt', '$tel', '$matricle')");
if($sql){
    // Payment reciept
// $sql = mysqli_query($conn,"SELECT * FROM admission WHERE `name` = '\$_SESSION['username']'");
// while($row = mysqli_fetch_assoc($sql)){
   
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' => 'A6-P']);
$mpdf -> AddPage();

// $mpdf -> Image('../img/account-logo.png', '15', '10');
$mpdf -> Image('../img/header.png', '15', '8');
$mpdf -> SetFont('','B','12');
$mpdf -> Cell(0,15,'PAYMENT RECIEPT',0,1,'C',1);
$mpdf -> SetFont('','N','12');
$mpdf -> Cell(0,8,'Date: '.date("d M, Y"),0,1,'L',1);
$mpdf -> Cell(0,8,'Name: '.$_SESSION['studname'],0,1,'L',1);
$mpdf -> Cell(0,8,'Entry Level: '.$_SESSION['level'],0,1,'L',1);
$mpdf -> Cell(0,8,"Matricle: ". $_SESSION['matricle'],0,1,'L',1);
$mpdf -> Cell(0,8,"Number: ". $_SESSION['number'],0,1,'L',1);
$mpdf -> Cell(0,8,"Amount: ". $_SESSION['amt']." CFA",0,1,'L',1);
$mpdf -> Cell(0,30,"Signature: ___________________",0,1,'L',1);
$mpdf -> Image('../img/footer.png', '15', '120');
$mpdf->Output('Payment reciept.pdf','D');
// }
echo "<script language='javascript'>
window.location.href='../pages/account.payment.php';
 </script>";
header('Location: ../pages/account.payment.php');
}
else{
    echo "<script language='javascript'>alert('Submission was unsucessful!');
			window.location.href='../pages/account.payment.php';
             </script>";
}