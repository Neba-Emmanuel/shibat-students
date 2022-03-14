<?php
session_start();
include 'variables.php';
$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(isset($_POST['admit'])){
    $id = $_POST['id'];

    $sql = "UPDATE admission SET status = 'admitted' WHERE ID = '$id'";
    $result =mysqli_query($conn, $sql);
    echo "<script language='javascript'>alert('Student Admitted!');
    window.location.href='view.php';
     </script>";
}

if(isset($_POST['reject'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM admission WHERE ID = '$id'";
    $result =mysqli_query($conn, $sql);
    echo "<script language='javascript'>alert('Student Rejected!');
    window.location.href='view.php';
     </script>";
}
// function StudentCode(){
//     $rs  = mysqli_query($con,"SELECT CONCAT('CUTM',LPAD(RIGHT(ifnull(max(s_id),'CUTM00000'),5) + 1,5,'0')) FROM admission");
//     return mysqli_fetch_array($rs)[0];
//   }
  
//   function StudentPsw()
//   {
//       $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
//       $pass = array();
//       $alphaLength = strlen($alphabet) - 1;
//       for($i=0;$i<8;$i++)
//       {
//           $n=rand(0,$alphaLength);
//           $pass[]=$alphabet[$n];
//       }
//       return implode($pass);
//   }