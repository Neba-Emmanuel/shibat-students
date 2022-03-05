<?php
session_start();
if(isset($_POST['create-account'])){
    include_once '../include/db_connection.php';

    $mat_num = stripslashes($_POST['matricle-number']);
    $email = mysqli_real_escape_string($conn, $_POST['institute-email']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $cpwd = mysqli_real_escape_string($conn, $_POST['confirm-password']);
    $hpwd = MD5($pwd);

    $sql = mysqli_query($conn,"SELECT * FROM student_account WHERE Matricle_Number = '$mat_num' AND Email = '$email' LIMIT 1");
    if(mysqli_fetch_assoc($sql)>0){
        header("Location:../pages/account.signup.php?Account Already Exist!");
        exit;
    }
    elseif ($pwd != $cpwd) {
        header("Location:../pages/account.signup.php?Password do not match!");
        exit;
    }
    else{
        $query = "INSERT INTO student_account(`Matricle_Number`, `Institute_Email`, `Phone_No.`, `Password` VALUES('$mat_num', '$email', '$tel', '$hpwd'))";
        $sql = mysqli_query($conn,$query);
        if($sql){
            header("Location:../pages/account.login.php?status=success!");
            mysql_close($conn);
        }
        else{
            header("Location:../pages/admission.signup.php?Error try again!");
            exit;
        }
    }
}
if(isset($_POST['login'])){
    include_once '../include/db_connection.php';

    $mat_num = mysqli_real_escape_string($conn, $_POST['matricle-number']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $hpwd = MD5($pwd);

    $sql = mysqli_query($conn,"SELECT * FROM student_account WHERE Matricle_Number='$mat_num' AND `Password`='$hpwd'");
    $row  = mysqli_fetch_assoc($sql);
    if($row == TRUE){
        $_SESSION['userid'] = $row['ID'];
        $_SESSION["email"]=$row['Institute_Email'];
        $_SESSION["tel"]=$row['Phone_No.'];
        header("Location: ../pages/account.profile.php?status=login success"); 
        mysql_close($conn);
    }
    else
    {
        header("Location:../pages/account.login.php?Invalid email/password");
        exit;
    }
}