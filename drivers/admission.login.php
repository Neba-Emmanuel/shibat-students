<?php
    if(isset($_POST['register'])){
        include_once '../include/db_connection.php';

        $name = stripslashes($_POST['username']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $cpwd = mysqli_real_escape_string($conn, $_POST['confirm-password']);
        $hpwd = MD5($pwd);

        $sql = mysqli_query($conn,"SELECT * FROM registration WHERE Email = '$email' LIMIT 1");
        if(mysqli_fetch_assoc($sql)>0){
            echo "Email already exist";
            exit;
        }
        elseif ($pwd != $cpwd) {
            echo "Passwords do not match";
            exit;
        }
        else{
            $query = "INSERT INTO registration(`Name`, `Email`, `DOB`, `Password`) VALUES('$name','$email','$dob','$hpwd')";
            $sql = mysqli_query($conn,$query);
            if($sql){
                header("Location:../pages/admission.login.php?status=success");
            }
            else{
                echo "Error, try again";
                exit;
            }
        }
    }

    
?>