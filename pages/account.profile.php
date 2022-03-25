<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['studid'])){
        header("location:account.login.php");
        exit;
    }
    $email = $_SESSION["email"];
    $query = "SELECT * FROM admission WHERE instituteEmail ='$email'"; 
	$result = $conn->query($query) or die($conn->error);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			foreach($row as $val) {
				$details[] = $val;
			}
			$sid=$details[0];
		}   
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <!-- <link href="../admin/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css";
		
		?>
    </style>
    <div class="container">
       <div class="nav">
            <a href="../index.php"><img src="../img/profile.png" alt="swisslink logo" width="180" height="140"></a>
            <nav>            
            <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <img src="../img/user.png" alt="user-icon" width="20" height="20">
                        <?php echo $details[1]; ?>
                        <img src="../img/dropdown.png" alt="dropdown">
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../drivers/logout.php"><img src="../img/logout.png" alt="logout" width="20">Logout</a>
                    </div>
                </div>
            </nav>
       </div>
       <div class="side-bar">
            <p><a href="#" class="link active"><img src="../img/user.png" alt="user-icon">&nbsp;PROFILE</a></p>
            <p><a href="account.payment.php" class="link"><img src="../img/payment.png" alt="payment-icon">&nbsp;PAYMENT</a></p>
            <p><a href="account.noticeboard.php" class="link"><img src="../img/notice-board.png" alt="notice-icon">&nbsp;NOTICE BOARD</a></p>
            <p><a href="account.timetable.php" class="link"><img src="../img/time-table.png" alt="calender-icon">&nbsp;TIME TABLE</a></p>
       </div>
       <div class="main-content">
            <div class="profile-pic">
                <p><img src="../img/default.png" alt="profile-pic" height="210" width="230" style="border-radius: 5px;"></p>
                <p style="text-align: center; color: #667; font-weight: 600; font-size: 24px"><?php echo $details[1]; ?></p>
                <p style="text-align: center; color: #667; font-weight: 600; font-size: 24px"><?php echo $details[34]; ?></p>
            </div>
            <div class="details">
                <table>
                    <tr>
                        <td>STUDENT NAME</td>
                        <td class="info"><?php echo $details[1]; ?></td>
                    </tr>
                    <tr>
                        <td>SCHOOL OF STUDY</td>
                        <td class="info"><?php echo $details[23]; ?></td>
                    </tr>
                    <tr>
                        <td>PROGRAM</td>
                        <td class="info"><?php echo $details[24]; ?></td>
                    </tr>
                    <tr>
                        <td>LEVEL</td>
                        <td class="info"><?php echo $details[25]; ?></td>
                    </tr>
                    <tr>
                        <td>MATRICULATION No.</td>
                        <td class="info"><?php echo $details[34]; ?></td>
                    </tr>
                    <tr>
                        <td>GENDER</td>
                        <td class="info"><?php echo $details[6]; ?></td>
                    </tr>
                    <tr>
                        <td>PLACE OF BIRTH</td>
                        <td class="info"><?php echo $details[3]; ?></td>
                    </tr>
                    <tr>
                        <td>DATE OF BIRTH</td>
                        <td class="info"><?php echo $details[2]; ?></td>
                    </tr>
                    <tr>
                        <td>NATIONALITY</td>
                        <td class="info"><?php echo $details[7]; ?></td>
                    </tr>
                    <tr>
                        <td>INSTITUTIONAL EMAIL</td>
                        <td class="info"><?php echo $details[37]; ?></td>
                    </tr>
                    <tr>
                        <td>PHONE No.</td>
                        <td class="info"><?php echo $details[4]; ?></td>
                    </tr>
                    <tr>
                        <td>STUDENT ADDRESS</td>
                        <td class="info"><?php echo $details[10]; ?></td>
                    </tr>
                </table>
                <div class="edit" style="display: flex; justify-content: flex-end;">
                    <p><a href="#" style="padding: 10px 20px; color: #FFF; background: #00985A; font-size: 20px; border: none; border-raduis: 5px; cursor:pointer;">Edit Profile</a></p>
                </div>
            </div>           
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