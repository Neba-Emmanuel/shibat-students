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
    <form id="regForm" action="../drivers/admissionform.handler.php" method="post" enctype="multipart/form-data">
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
                <td><p>Name <span>*(as on birth certificate)</span></p><input type="text" name="name" class="required"></td>
                <td><p>Gender</p>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select></td>
                <td><p>National ID or Passport</p><label for="file">Upload</label><input type="file" name="id_card" class="file"></td>
            </tr>
            <tr>
                <td><p>Date of Birth <span>*</span></p><input type="date" name="dob" class="required"></td>
                <td><p>Nationality</p>
                <select name="nationality">
                    <option value="Cameroonian" default>Cameroonian</option>
                    <option value="Foreigner">Foreigner</option>
                </select></td>
                <td rowspan="3"><div></div><p><span>Picture must be on a red or white background</span></p></td>
            </tr>
            <tr>
                <td><p>Place of Birth</p><input type="text" name="pob"></td>
                <td><p>Marital Status</p><select name="marital-status">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select></td>                
            </tr>
            <tr>
                <td><p>Telephone</p><input type="text" name="number"></td>
                <td><p>Special Needs</p><select name="special-needs">
                    <option value="None">None</option>
                </select></td>
            </tr>
            <tr>
                <td><p>Email <span>*</span></p><input type="email" name="email" class="required"></td>
                <td><p>Permanent Address</p><input type="text" name="p-address"></td>
                <td><label for="file">Upload Picture</label><input type="file" name="admissionPic" class="file"></td>
            </tr>
            <tr>
                <td><p>Scan copy of Birth Certificate <span>(preferably *.pdf)</span></p><label for="file">Upload</label><input type="file" name="birth_certificate" class="file"></td>
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
                <td><p>Mother's Tel.</p><input type="text" name="mother-num"></td>
            </tr>
            <tr>
                <td><p>Gaurdian/Sponsor's Name</p><input type="text" name="sponsor-name"></td>
                <td><p>Gaurdian/Sponsor's Address</p><input type="text" name="sponsor-address"></td>
                <td><p>Gaurdian/Sponsor's Tel.</p><input type="text" name="sponsor-num"></td>
            </tr>
        </table>
    </div>

    <div class="tab">
        <p style="margin-top: 20px; font-weight: 600;">Select School and Programme you wish to be admiited</p>
        <select name="school" style="margin: 20px 0 20px 0;">
            <option value="School of Business">School of Business</option>
            <option value="School of Technology">School of Technology</option>
            <option value="School of Education">School of Education</option>
        </select>
        <select name="programme" style="margin: 20px 0 20px 0;">
            <optgroup>
                <option value="Accounting">Accounting</option>
                <option value="Marketing">Marketing</option>
                <option value="Banking and Finance">Banking and Finance</option>
                <option value="Human Resourse Management">Human Resourse Management</option>
                <option value="Project Management">Project Management</option>
                <option value="Logistics and Transportation Management">Logistics and Transportation Management</option>
            </optgroup>
            <optgroup>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Computer Maintanace">Computer Maintanace</option>
                <option value="Computer Graphics & Web Design">Computer Graphics & Web Design</option>
                <option value="Telecommunication">Telecommunication</option>
                <option value="Network & Security">Network & Security</option>
                <option value="Electrical Power Systems">Electrical Power Systems</option>
                <option value="Electronics">Electronics</option>
            </optgroup>
            <optgroup>
                <option value="Didactics Curriculum Development Teaching">Didactics Curriculum Development Teaching</option>
                <option value="Education Management & Administration">Education Management & Administration</option>
                <option value="Special Education">Special Education</option>
                <option value="Distance & Continuing Education">Distance & Continuing Education</option>
            </optgroup>
        </select>
        <hr>
        <p style="margin-top: 20px; font-weight: 600;">Which certificate are you going in for?</p>
        <select name="level" style="margin: 20px 0 20px 0;">
            <option value="HND">HND</option>
            <option value="Degree">Degree</option>
        </select>
    </div>

    <div class="tab">
        <h4>Qualification Requirement</h4>
        <p>Upload all copies of qualification or certificate that are relevant to this application.</p>
        <table border=2 style="text-align: center; border-collapse: collapse; border: 2px solid grey; font-size: 20px;">
            <tr style="font-weight: 600;">
                <td rowspan="2" style="width: 20%; padding-left: 0; padding: 10px;">Institute Attended</td>
                <td colspan="2" style="width: 20%; padding-left: 0; padding: 10px;">Date</td>
                <td rowspan="2" style="width: 20%; padding-left: 0; padding: 10px;">Programme of Study</td>
                <td rowspan="2" style="width: 20%; padding-left: 0; padding: 10px;">Qualification Earned</td>
                <td rowspan="2" style="width: 20%; padding-left: 0; padding: 10px;">Remarks/Honors</td>
            </tr>
            <tr style="font-weight: 600; text-align: center;">
                <td>From</td>
                <td>To</td>
            </tr>
            <tr>
                <td><input type="text" name="institute-name" style="border: none;"></td>
                <td><input type="date" name="from" style="padding-right: 100px; border: none;"></td>
                <td><input type="date" name="to" style="border: none;"></td>
                <td><input type="text" name="program" style="border: none;"></td>
                <td><input type="text" name="qualification" style="border: none;"></td>
                <td><input type="text" name="remark" style="border: none;"></td>
            </tr>
            <tr>
                <td style="border: none; padding: 20px;">Upload Qualification </td>
                <td  style="border: none; padding: 20px;"><label for="file">Upload Qualification</label><input type="file" name="qualification_doc" class="file"></td>
            </tr>
        </table>
        <div class="add-btn">
        <button style="float: left; background: #00985A">&plus; Add Qualification</button>
        </div>
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