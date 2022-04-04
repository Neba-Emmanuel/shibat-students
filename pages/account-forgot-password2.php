<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="icon" href="../icon.ico" type="image/x-icon">
    <link rel="manifest" href="../manifest.webmanifest">
</head>
<body>
    <style>
        <?php include_once "../css/signin.login.css" ?>
    </style>
    <div class="container">  
        <header>
            <a href="../index.php"><p><img src="../img/nav logo.png" alt="SwissLink logo"></p></a>
            <nav>
                <ul>
                    <li><a href="#">Back to SHIBAT</a></li>
                    <li><a href="account.signup.php">Already a Student</a></li>
                    <li><a href="admission.signup.php">Admission</a></li>
                </ul>
            </nav>
        </header>
        <div class="forgot-form-container">
            <form action="" method="post">
                <div class="form-head">
                    <!-- <img src="../img/form-head.svg" alt="swisslink logo"> -->
                    <h2>SWISSLINK University</h2>
                    <h4>Enter recovery code</h4>
                </div>
                <p><input type="email" placeholder="Enter Code"></p>
                <p class="submit-btn"><input type="submit" value="Submit"></p>
            </form>
        </div>
        <footer>
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
        </footer>
    </div>
</body>
</html>