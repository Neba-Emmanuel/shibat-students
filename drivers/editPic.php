<?php
session_start();
$email = $_SESSION["email"];
if(isset($_POST['editPic'])){
    include_once '../include/db_connection.php';
    $ppic = $_FILES["pic"]["name"];
    $tempname = $_FILES["pic"]["tmp_name"];    
    $folder = "../upload/".$ppic;  
    // Now let's move the uploaded image into the folder: image
    move_uploaded_file($tempname, $folder);

    $sql = mysqli_query($conn,"UPDATE student_account SET pic = '$ppic' WHERE Institute_Email = '$email'");
    if($sql){
        echo "<script language='javascript'>alert('Picture updated!');
            window.location.href='/shibat-students/pages/account.profile.php';
             </script>";
    }
    else{
        echo "<script language='javascript'>alert('An error occured!');
			window.location.href='/shibat-students/pages/admission.form.php';
             </script>";
            
            mysqli_close($conn);
            exit;
    }
}