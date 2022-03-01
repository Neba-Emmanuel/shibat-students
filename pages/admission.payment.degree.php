<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['userid'])){
        header("location:admission.login.php");
        exit;
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
            <div class="payment-statement">
                <h3>Make Payment with MTN Mobile Money</h3>
                <p>Please enter MTN Mobile Money Account Number and Click Make Payment to Make a Mobile Money Payment of<br> 
                30000 XAF for Admission.</p>
                <p>Attention! You should have more than 30000 XAF as account balance to complete this transaction successfully.</p>
                <span class="caption">( MTN Mobile Money debits a small commission for every transaction done using their service)</span>
                <p> You have 120 seconds to approve payment using your mobile phone. </p>
            </div>
            <div class="mtn-to-shibat">
                <img src="../img/mtn2shibat.png" alt="mtn2shibat" style="width: 100%; height: auto;">
                <p>MTN Mobile Money Number<input type="text" placeholder="+237" disabled class="disabled"><input type="number" placeholder="Mobile Money Number" class="momo-number"></p>
                <p><input type="submit" value="Make Payment" class="payment-btn"></p>
            </div>
        </div>
        <footer>
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
        </footer>
    </div>
</body>
</html>