<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['studid'])){
        header("location:account.login.php");
        exit;
    }
    $email = $_SESSION["email"];
    $query1 = "SELECT * FROM student_account WHERE institute_Email ='$email'"; 
	$result1 = $conn->query($query1) or die($conn->error);
	if($result1->num_rows > 0) {
		while($row1 = $result1->fetch_assoc()) {
			foreach($row1 as $val1) {
				$details1[] = $val1;
			}
			$sid1=$details1[0];
		}   
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Time Table</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <!-- <link href="../admin/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="manifest" href="../manifest.webmanifest">
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css";
		
		?>
    </style>
    <div class="container1">
       <div class="nav">
            <a href="../index.php"><img src="../img/profile.png" alt="swisslink logo" width="180" height="140"></a>
            <nav>            
            <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <img src="<?php echo '../upload/'.$details1[6];?>" alt="user-icon" width="20" height="20">
                        <?php echo $_SESSION['studname']; ?>
                        <img src="../img/dropdown.png" alt="dropdown">
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <!-- <p><a href="../admin/admission_letter.php">Admission Letter</a></p> -->
                        <a href="../drivers/logout.php"><img src="../img/logout.png" alt="logout" width="20">Logout</a>
                    </div>
                </div>
            </nav>
       </div>
       <div class="side-bar">
            <p><a href="account.profile.php" class="link"><img src="../img/user.png" alt="user-icon">&nbsp;PROFILE</a></p>
            <p><a href="account.payment.php" class="link"><img src="../img/payment.png" alt="payment-icon">&nbsp;PAYMENT</a></p>
            <p><a href="account.noticeboard.php" class="link"><img src="../img/notice-board.png" alt="notice-icon">&nbsp;NOTICE BOARD</a></p>
            <p><a href="#" class="link active"><img src="../img/time-table.png" alt="calender-icon">&nbsp;TIME TABLE</a></p>
       </div>
       <div class="main-content">
            <embed src="../upload/Kba_2nd_Semester_Timetable_ 2020-2021.pdf" type="" style="width: 1316px; height: 100%;">
            <!-- <iframe src="../upload/atestation-2.pdf" frameborder="0" style="width: 100vw; height: 100%;"></iframe> -->
       </div>
       <div class="footer">
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
       </div>
    </div>
    <!-- <script src="../js/script.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script> -->
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
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
</body>
</html>