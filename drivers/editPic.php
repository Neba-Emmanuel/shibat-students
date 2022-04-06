<?php
session_start();
$email = $_SESSION["email"];
if(isset($_POST['editPic'])){
    include_once '../include/db_connection.php';
    $pic = $_FILES["profilePic"]["name"];
    $tempname = $_FILES["profilePic"]["tmp_name"];    
    $folder = "../upload/".$pic;  
    // Now let's move the uploaded image into the folder: image
    move_uploaded_file($tempname, $folder);

    $sql = mysqli_query($conn,"UPDATE student_account SET pic = '$pic' WHERE Institute_Email = '$email'");
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