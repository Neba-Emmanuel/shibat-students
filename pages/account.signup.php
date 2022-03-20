<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Signup</title>
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
                    <li><a href="#">Already a Student</a></li>
                    <li><a href="admission.signup.php">Admission</a></li>
                </ul>
            </nav>
        </header>
        <div class="form-container">
            <form action="../drivers/account.login.php" method="post">
                <div class="form-head">
                    <!-- <img src="../img/form-head.svg" alt="swisslink logo"> -->
                    <h2>SWISSLINK University</h2>
                    <h4>Enter your personal details to create an account</h4>
                </div>
                <p><input type="text" placeholder="Matriculation Number" name="matricle-number"></p>
                <p><input type="email" placeholder="Institutional Email" name="institute-email"></p>
                <p><input type="text" placeholder="Telephone No." name="tel"></p>
                <p><input type="password" placeholder="Password" name="password"></p>
                <p><input type="password" placeholder="Confirm Password" name="confirm-password"></p>
                <p class="submit-btn"><input type="submit" value="Create Account" name="create-account"></p>
                <p class="other-links">
                    <a href="account.login.php">I already have an account</a>
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    <a href="#">Forgot Password?</a>
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