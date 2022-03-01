<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['userid'])){
        header("location:admission.login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Payment</title>
    <link rel="icon" href="../icon.ico" type="image/x-icon">
</head>
<body>
    <style>
        <?php include_once "../css/admission.css" ?>
    </style>
    <div class="container">  
        <header>
            <a href="../index.php"><p><img src="../img/nav logo.png" alt="SwissLink logo"></p></a>
            <nav>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <img src="../img/user.png" alt="user-icon">
                        <?php echo $_SESSION['username']; ?>
                        <img src="../img/dropdown.png" alt="dropdown">
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../drivers/logout.php"><img src="../img/logout.png" alt="logout" width="20">Logout</a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="main-container">
            
        </div>
        <footer>
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
        </footer>
    </div>
</body>
</html>