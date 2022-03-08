<?php
session_start();
// if(isset($_POST['submit'])){
    include_once '../include/db_connection.php';

    $Name = stripslashes($_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    // $national_id = mysqli_real_escape_string($conn, $_POST['NI/P']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $pob = mysqli_real_escape_string($conn, $_POST['pob']);
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital-status']);
    $tel = mysqli_real_escape_string($conn, $_POST['number']);
    $special_needs = mysqli_real_escape_string($conn, $_POST['special-needs']);
    $address = mysqli_real_escape_string($conn, $_POST['p-address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $pic = mysqli_real_escape_string($conn, $_POST['admissionPic']);
    // $birth_certificate = mysqli_real_escape_string($conn, $_POST['birth-certificate']);

    // $father_name = mysqli_real_escape_string($conn, $_POST['father-name']);
    // $father_address = mysqli_real_escape_string($conn, $_POST['father-address']);
    // $father_num = mysqli_real_escape_string($conn, $_POST['father-num']);
    // $mother_name = mysqli_real_escape_string($conn, $_POST['mother-name']);
    // $mother_address = mysqli_real_escape_string($conn, $_POST['mother-address']);
    // $mother_num = mysqli_real_escape_string($conn, $_POST['mother-num']);
    // $sponsor_name = mysqli_real_escape_string($conn, $_POST['sponsor-name']);
    // $sponsor_address = mysqli_real_escape_string($conn, $_POST['sponsor-address']);
    // $sponsor_num = mysqli_real_escape_string($conn, $_POST['sponsor-num']);

    
    $filename = $_FILES["admissionPic"]["name"];
    $tempname = $_FILES["admissionPic"]["tmp_name"];    
        $folder = "upload/".$filename;
  
        // Now let's move the uploaded image into the folder: image
        
        $query = "INSERT INTO admission(`Name`, `DOB`, `POB`, `Tel`, `Email`, `Gender`, `Nationality`, `Marital_Status`, `Special_Needs`, `Address`) VALUES('$Name', '$dob', '$pob', '$tel', '$email', '$gender', '$nationality', '$marital_status', '$special_needs', '$address')";
        $sql = mysqli_query($conn,$query);
        if($sql){
            // move_uploaded_file($tempname, $folder);
            echo"Insertion successful";
            mysqli_close($conn);
        }
        else{
            echo"Insertion unsuccesful";
            exit;
        }

// }