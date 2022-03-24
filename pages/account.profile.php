<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['studid'])){
        header("location:account.login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <!-- <link href="../admin/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css";
		
		?>
    </style>
    <div class="container">
       <div class="nav">
            <a href="../index.php"><img src="../img/profile.png" alt="swisslink logo" width="180" height="140"></a>
            <nav>            
                <p><img src="../img/user.png" alt="user-icon">Neba Emmanuel Fuh <img src="../img/dropdown.png" alt=""></p>
            </nav>
       </div>
       <div class="side-bar">
            <p><a href="#" class="link active">PROFILE</a></p>
            <p><a href="account.payment.php">PAYMENT</a></p>
            <p><a href="account.noticeboard.php">NOTICE BOARD</a></p>
            <p><a href="account.timetable.php">TIME TABLE</a></p>
       </div>
       <div class="main-content">

       </div>
       <div class="footer">

       </div>
    </div>
    <!-- <script src="../js/script.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script> -->
</body>
</html>