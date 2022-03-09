<?php
session_start();
// if(isset($_POST['submit'])){
    include_once '../include/db_connection.php';

    // Personal info
    $Name = stripslashes($_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $pob = mysqli_real_escape_string($conn, $_POST['pob']);
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital-status']);
    $tel = mysqli_real_escape_string($conn, $_POST['number']);
    $special_needs = mysqli_real_escape_string($conn, $_POST['special-needs']);
    $address = mysqli_real_escape_string($conn, $_POST['p-address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Other info's
    $father_name = mysqli_real_escape_string($conn, $_POST['father-name']);
    $father_address = mysqli_real_escape_string($conn, $_POST['father-address']);
    $father_num = mysqli_real_escape_string($conn, $_POST['father-num']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother-name']);
    $mother_address = mysqli_real_escape_string($conn, $_POST['mother-address']);
    $mother_num = mysqli_real_escape_string($conn, $_POST['mother-num']);
    $sponsor_name = mysqli_real_escape_string($conn, $_POST['sponsor-name']);
    $sponsor_address = mysqli_real_escape_string($conn, $_POST['sponsor-address']);
    $sponsor_num = mysqli_real_escape_string($conn, $_POST['sponsor-num']);

    // Program choice
    $school = $_POST['school'];
    $programme = $_POST['programme'];
    $level = $_POST['level'];

    // Academic qualification
    $institutename = mysqli_real_escape_string($conn, $_POST['institute-name']);
    $from = mysqli_real_escape_string($conn, $_POST['from']);
    $to = mysqli_real_escape_string($conn, $_POST['to']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    
    $pic = $_FILES["admissionPic"]["name"];
    $tempname = $_FILES["admissionPic"]["tmp_name"];    
        $folder = "../upload/".$pic;  
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($tempname, $folder);

        $id_card = $_FILES["id_card"]["name"];
    $id_card1 = $_FILES["id_card"]["tmp_name"];    
        $folder = "../upload/".$id_card;  
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($id_card1, $folder);

        $bc = $_FILES["birth_certificate"]["name"];
    $bc1 = $_FILES["birth_certificate"]["tmp_name"];    
        $folder = "../upload/".$bc;  
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($bc1, $folder);

        $qualificationupload = $_FILES["qualification_doc"]["name"];
    $qualificationupload1 = $_FILES["qualification_doc"]["tmp_name"];    
        $folder = "../upload/".$qualificationupload;  
        // Now let's move the uploaded image into the folder: image
        move_uploaded_file($qualificationupload1, $folder);

        $query = "INSERT INTO admission(`name`, `dob`, `pob`, `tel`, `email`, `gender`, `nationality`, `maritalStatus`, `specialNeeds`, `address`, `img`, `idCard`, `birthCert`, `fatherName`, `fatherAddress`, `fatherNum`, `motherName`, `motherAddress`, `motherNum`, `sponsorName`, `sponsorAddress`, `sponsorNum`, `school`, `programme`, `level`, `instituteAttended`, `dfrom`, `dto`, `programmestudied`, `certificate_earned`, `remark`, `uploadq`) VALUES('$Name', '$dob', '$pob', '$tel', '$email', '$gender', '$nationality', '$marital_status', '$special_needs', '$address', '$pic', '$id_card', '$bc', '$father_name', '$father_address', '$father_num', '$mother_name', '$mother_address', '$mother_num', '$sponsor_name', '$sponsor_address', '$sponsor_num', '$school', '$programme', '$level', '$institutename', '$from','$to', '$program', '$qualification', '$remark', '$qualificationupload')";
        $sql = mysqli_query($conn,$query);
        if($sql){            
            echo "<script language='javascript'>alert('Insertion Successful!');
             </script>";
        }
        else{
            // echo(mysqli_error($conn));
            echo "<script language='javascript'>alert('Insertion Unsuccessful!');
			window.location.href='/shibat-students/pages/admission.form.php';
             </script>";
            
            mysqli_close($conn);
            exit;
        }

// }