<?php
session_start();
    $errmsg_array = array();
    $errflag = false;   
    $msg="";
    include 'variables.php';
    $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //login admin
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if($email == '') {
            $errmsg_arr[] = 'You must enter your Email';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'You must enter your Password';
            $errflag = true;
        }

        $result = $conn->prepare("SELECT * FROM admins WHERE `Email`=? AND `Password`=?");
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_NUM);
        // $sql = mysqli_query($conn, "SELECT * FROM admins WHERE `Email` = '$email' AND `Password` = '$password'");
        // $row  = mysqli_fetch_assoc($sql);
        if($rows >0) {
        $_SESSION['email'] = $email;
        header("Location: ../admin/admin.php");
        }
        else{
			echo "<script language='javascript'>alert('Username/Password not found');
			window.location.href='/shibat-students/admin/';
			 </script>";
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: ../admin");
            exit();
        }
         
    }
    // insert course
    if(isset($_POST['addAdmin']))
    {
        $aemail = $_POST['email'];
        $role = $_POST['role'];
       
        
        $query = $conn->prepare( "SELECT `Email` FROM `admins` WHERE `Email` = ?" );			
        $query->bindValue( 1, $aemail );
        $query->execute();
        if($query->rowCount() > 0 )
        {	
            echo "<script language='javascript'>alert('This Email already exists.');
			window.location.href='/shibat-students/admin/addAdmin.php';
             </script>";        }
        else{
            $sql = "INSERT INTO `courses` (`Email`,  `role`)VALUES ('$aemail','$role')";
                    if ($conn->query($sql))
                    {
                        echo "<script language='javascript'>alert('Admin Added Successfully');
                        window.location.href='/shibat-students/admin/addAdmin.php';
                         </script>";                        
                    }
                    else
                    {
                        echo "An Error Occured Contact SysAdmin";
                    }
        }


    }

?>