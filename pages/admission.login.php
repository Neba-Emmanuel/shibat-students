<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - Login</title>
    <link rel="icon" href="../icon.ico" type="image/x-icon">
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
                    <li><a href="#">Admission</a></li>
                </ul>
            </nav>
        </header>
        <div class="admission-form-container">
            <form action="../drivers/admission.login.php" method="post">
                <div class="form-head">
                    <!-- <img src="../img/form-head.svg" alt="swisslink logo"> -->
                    <h2>SWISSLINK University</h2>
                    <h4>Login to Admission Account</h4>
                </div>
                <p><input type="email" placeholder="Email Address" name="email" required></p>
                <p><input type="password" placeholder="Password" name="password" required></p>
                <p class="submit-btn"><input type="submit" value="Login" name="login"></p>
                <p class="other-links">
                    <a href="admission.signup.php">I don't have an account</a>
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    <a href="forgot-password1.php">Forgot Password?</a>
                </p>
            </form>
        </div>
        <footer>
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
        </footer>
    </div>
</body>
</html>