<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'shibat_students';

    $conn = mysqli_connect($servername,$username,$password,$db_name);

    if($conn){
        echo "Connection Successfull";
    }
    else{
        echo "Connection Unsuccesfull";
    }
?>