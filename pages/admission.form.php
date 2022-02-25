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
                <img src="../img/user.png" alt="user-icon">
                <p>Neba Emmanuel Fuh <img src="../img/dropdown.png" alt=""></p>
            </nav>
        </header>
    </div>
    <form id="regForm" action="">
        <!-- Circles which indicates the steps of the form: -->
    <div class="step-container">
        <span class="step"><img src="../img/user-check.svg" alt=""> Personal Information</span>
        <span class="step"><img src="../img/book.svg" alt="">Other Information</span>
        <span class="step"><img src="../img/check.svg" alt="">Program Choice</span>
        <span class="step"><img src="../img/graduation-cap.svg" alt="">Academic Qualification</span>
    </div>
    <h1>Register:</h1>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">Name:
        <p><input placeholder="First name..." oninput="this.className = ''"></p>
        <p><input placeholder="Last name..." oninput="this.className = ''"></p>
    </div>

    <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
        <p><input placeholder="Phone..." oninput="this.className = ''"></p>
    </div>

    <div class="tab">Birthday:
        <p><input placeholder="dd" oninput="this.className = ''"></p>
        <p><input placeholder="mm" oninput="this.className = ''"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''"></p>
    </div>

    <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''"></p>
        <p><input placeholder="Password..." oninput="this.className = ''"></p>
    </div>

    <div style="overflow:auto;">
    <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
        document.getElementById("nextBtn").innerHTML = "Next";
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