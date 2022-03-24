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
    <title>Notice Board</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css" ?>
    </style>
    <div class="container">
       <div class="nav">

       </div>
       <div class="side-bar">

       </div>
       <div class="main-content">

       </div>
       <div class="footer">
           
       </div>
    </div>

    <footer>
        <p>Powered by Emmis Technologies</p>
        <p>&copy copyright swisslink 2022</p>
    </footer>
</body>
</html>