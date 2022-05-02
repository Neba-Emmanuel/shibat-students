<?php
session_start();
include 'variables.php';
$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(isset($_POST['admit'])){
    $id = $_POST['id'];

    // Admission Date
    $date = date("d M, y");
    $sql = "UPDATE admission SET `status` = 'admitted', admissionDate = '$date' WHERE ID = '$id'";
    $result =mysqli_query($mysqli, $sql);
    $query = mysqli_query($mysqli,"SELECT * FROM admission WHERE ID = '$id'");
        $row  = mysqli_fetch_assoc($query);
        if($row == TRUE){
            $school = substr($row['school'],10,1);
            $name = $row['name'];
            $campus = substr($row['campus_location'],0,1 );
        }

        // Student Matricle
        $year = substr("".date('Y'),-2);
        //$counter = 100;
        //$matricle = "SL".$campus.$year.$school;
        //$sql = "select CONCAT(\'SL20T\',LPAD(RIGHT(ifnull(max(\'ID\'),\'SL20T000\'),3) + 1,3,\'100\'))";

        $query1 = mysqli_query($mysqli,"SELECT Matricle FROM admission WHERE ID = '$id' ORDER BY Matricle LIMIT DESC 1");
        $row1  = mysqli_fetch_assoc($query1);
        if($row1 == TRUE){
            
        }

        // Student Email
        $pieces = explode(' ', $name);
        $last_name = array_pop($pieces);
        $first_name = explode(' ', trim($name));
        $email = strtolower($first_name[0].".".$last_name."@swisslinkedu.com");        

    $result1 = mysqli_query($mysqli,"UPDATE admission SET matricle = CONCAT('$matricle','$counter'+4), instituteEmail = '$email' WHERE ID = '$id'");   
    echo "<script language='javascript'>alert('Student Admitted!');
        window.location.href='records.php';
     </script>";
}

if(isset($_POST['reject'])){
    $id = $_POST['id'];
    echo "<script language='javascript'>
        var result = confirm(\"Are you sure to delete?\");
        if(result){";
            
            $sql = "DELETE FROM admission WHERE ID = '$id'";
            $result =mysqli_query($mysqli, $sql);
            
        echo "<script language='javascript'>
        alert('Student Rejected!');
        window.location.href='allRecords.php';
        }
    </script>";
    
    echo "<script language='javascript'>alert('Student Rejected!');
    window.location.href='allRecords.php';
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