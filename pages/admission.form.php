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
    <title>Admission Form</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
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
    </div>
    <form id="regForm" action="" method="post">
        <!-- Circles which indicates the steps of the form: -->
    <div class="step-container">
        <span class="step"><img src="../img/user-check.png" alt=""> Personal Information</span>
        <span class="step"><img src="../img/book.png" alt="">Other Information</span>
        <span class="step"><img src="../img/check.png" alt="">Program Choice</span>
        <span class="step"><img src="../img/graduation-cap.png" alt="">Academic Qualification</span>
    </div>
    <!-- <h1>Register:</h1> -->
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <table>
            <tr>                
                <td><p>Name <span>(as on birth certificate)</span></p><input type="text" name="name"></td>
                <td><p>Gender</p><input type="text" name="gender"></td>
                <td><p>National ID or Passport No.</p><input type="text" name="NI/P"></td>
            </tr>
            <tr>
                <td><p>Date of Birth</p><input type="text" name="dob"></td>
                <td><p>Nationality</p><input type="text" name="nationality"></td>
                <td rowspan="3"><div></div><p><span>Picture must be on a red or white background</span></p></td>
            </tr>
            <tr>
                <td><p>Place of Birth</p><input type="text" name="pob"></td>
                <td><p>Marital Status</p><input type="text" name="marital-status"></td>                
            </tr>
            <tr>
                <td><p>Telephone</p><input type="text" name="number"></td>
                <td><p>Special Needs</p><input type="text" name="p-address"></td>
            </tr>
            <tr>
                <td><p>Email</p><input type="email" name="email"></td>
                <td><p>Permanent Address</p><input type="text" name="p-address"></td>
                <td><label for="file">Upload Picture</label><input type="file" name="admission-pic" class="file"></td>
            </tr>
            <tr>
                <td><p>Scan copy of Birth Certificate <span>(preferably *.pdf)</span></p><label for="file">Upload</label><input type="file" name="admission-pic" class="file"></td>
            </tr>
        </table>
    </div>

    <div class="tab">
        <table>
            <tr>
                <td><p>Father's Name</p><input type="text" name="father-name"></td>
                <td><p>Father's Address</p><input type="text" name="father-address"></td>
                <td><p>Father's Tel.</p><input type="text" name="father-num"></td>
            </tr>
            <tr>
                <td><p>Mother's Name</p><input type="text" name="mother-name"></td>
                <td><p>Mother's Address</p><input type="text" name="mother-address"></td>
                <td><p>Father's Tel.</p><input type="text" name="mother-num"></td>
            </tr>
            <tr>
                <td><p>Gaurdian/Sponsor's Name</p><input type="text" name="sponsor-name"></td>
                <td><p>Gaurdian/Sponsor's Address</p><input type="text" name="sponsor-address"></td>
                <td><p>Gaurdian/Sponsor's Tel.</p><input type="text" name="sponsor-num"></td>
            </tr>
        </table>
    </div>

    <div class="tab">
        <p>Select School and Programme you wish to be admiited</p>
    </div>

    <div class="tab">
        <h4>Qualification Requirement</h4>
        <p>Upload all copies of qualification or certificate that are relevant to this application.</p>
        <table border=1 style="text-align: center;">
            <tr>
                <td rowspan="2">Institute Attended</td>
                <td colspan="2">Date</td>
                <td rowspan="2">Programme of Study</td>
                <td rowspan="2">Qualification Earned</td>
                <td rowspan="2">Remarks/Honors</td>
            </tr>
            <tr>
                <td>From</td>
                <td>To</td>
            </tr>
            <tr>
                <td><input type="text" name="institute-name"></td>
                <td><input type="text" name="from" placeholder="dd/mm/yyyy"></td>
                <td><input type="text" name="to" placeholder="dd/mm/yyyy"></td>
                <td><input type="text" name="program"></td>
                <td><input type="text" name="qualification"></td>
                <td><input type="text" name="remark"></td>
            </tr>
            <tr>
                <td style="text-align: left; display: inline;">Upload Qualification <label for="file">Upload Qualification</label><input type="file" name="qualification-doc" class="file"></td>
            </tr>
        </table>
    </div>

    <div style="overflow:auto;">
    <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Save and Continue</button>
    </div>
    </div>

    
    </form>
    <footer>
        <p>Powered by Emmis Technologies</p>
        <p>&copy copyright swisslink 2022</p>
    </footer>

    <script>
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
    </script>
    <script>
        <?php include_once '../js/script.js' ?>
    </script>
</body>
</html>