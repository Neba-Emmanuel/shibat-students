<?php
    session_start();
    if(isset($_POST['register'])){
        include_once '../include/db_connection.php';

        $name = stripslashes($_POST['username']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $cpwd = mysqli_real_escape_string($conn, $_POST['confirm-password']);
        $hpwd = MD5($pwd);

        $sql = mysqli_query($conn,"SELECT * FROM registration_account WHERE Email = '$email' LIMIT 1");
        if(mysqli_fetch_assoc($sql)>0){
            echo "<script language='javascript'>alert('Email Already Exist!');
			window.location.href='../pages/admission.signup.php';
			 </script>";
            exit;
        }
        elseif ($pwd != $cpwd) {
            echo "<script language='javascript'>alert('Password do not match!');
			window.location.href='../pages/admission.signup.php';
			 </script>";
            exit;
        }
        else{
            $query = "INSERT INTO registration_account(`Name`, `Email`, `DOB`, `Password`) VALUES('$name','$email','$dob','$hpwd')";
            $sql = mysqli_query($conn,$query);
            if($sql){

                $_SESSION['username'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['dob'] = $dob;
                header("Location:../pages/admission.login.php?status=success!");
                mysql_close($conn);
            }
            else{
                echo "<script language='javascript'>alert('Error try again!');
                window.location.href='../pages/admission.signup.php';
                </script>";
                exit;
            }
        }
    }

    if(isset($_POST['login'])){
        include_once '../include/db_connection.php';

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $hpwd = MD5($pwd);

        $sql = mysqli_query($conn,"SELECT * FROM registration_account WHERE Email='$email' AND `Password`='$hpwd'");
        $row  = mysqli_fetch_assoc($sql);
        if($row == TRUE){
            $_SESSION['userid'] = $row['ID'];
            $_SESSION["email"]=$row['Email'];
            $_SESSION["username"]=$row['Name'];
            header("Location: ../pages/admission.program.php?status=success!"); 
            mysql_close($conn);
        }
        else
        {
            echo "<script language='javascript'>alert('Invalid email/password!');
                window.location.href='../pages/admission.login.php';
                </script>";
            exit;
        }
    }
?>

