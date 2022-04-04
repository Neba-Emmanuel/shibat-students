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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Page</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <link rel="manifest" href="../manifest.webmanifest">
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
                        <img src="../img/user.png" alt="user-icon" width="20" height="20">
                        <?php echo $_SESSION['username']; ?>
                        <img src="../img/dropdown.png" alt="dropdown">
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../drivers/logout.php"><img src="../img/logout.png" alt="logout" width="20">Logout</a>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="main">
        <h2>Success!</h3>
        <hr>
        <h3>Admission form has successfully been submited</h3><br>
        <h3>Please feel free to browse our websitea <a href="http://swisslinkedu.com" target="_blank">http://swisslinkedu.com/</a>  to learn more about our wonderful institution</h3><br>
        <a href="../admin/payment.reciept.php" style="background: #0487D9; width: 180px; height: 50px; text-align: center; padding-top: 12px; color: white; border-radius: 5px;" target="_blank">Download Receipt</a><br>
        <a href="../index.php" style="background: #0487D9; width: 180px; height: 50px; text-align: center; padding-top: 12px; color: white; border-radius: 5px;">Back to Home Page</a>
    </div>
    <footer>
        <p>Powered by Emmis Technologies</p>
        <p>&copy copyright swisslink 2022</p>
    </footer>

    <script>
        // admission form
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Save and Continue";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
    }

    /* Logout drop down*/
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
        }
    }
    }
    </script>
    <script>
        <?php include_once '../js/script.js' ?>
    </script>
</body>
</html>