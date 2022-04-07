<?php
include_once '../include/db_connection.php';
$name = $_SESSION['studname'];
$level = $_SESSION['level'];
$tel = $_SESSION['number'];
$amt = $_SESSION['amt'];
$matricle = $_SESSION['matricle'];
$sql = mysqli_query($conn,"INSERT INTO `transaction`(`name`, `level`, `amount`, `number`, `matricle`) VALUES('$name', '$level', '$amt', '$tel', '$matricle')");
if($sql){
    echo "window.location.href='/shibat-students/pages/account.payment.php';
             </script>";
}
else{
    echo "<script language='javascript'>alert('Submission was unsucessful!');
			window.location.href='/shibat-students/pages/account.payment.php';
             </script>";
}