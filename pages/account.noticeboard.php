<?php 
    if (!session_id()) session_start(); 
    include '../include/db_connection.php';
	
    // checks if user not is logged in
    if(!isset($_SESSION['studid'])){
        header("location:account.login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Notice Board</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="manifest" href="../manifest.webmanifest">
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css";
		include_once "../css/font-awesome.min.css";
		?>
    </style>
    <div class="container1">
       <div class="nav">
            <a href="../index.php"><img src="../img/profile.png" alt="swisslink logo" width="180" height="140"></a>
            <nav>            
            <div class="dropdown" style="margin-left: 550px;">
                    <button onclick="myFunction()" class="dropbtn">
                        <img src="../img/default.png" alt="user-icon" width="20" height="20">
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
            <p><a href="#" class="link  active"><img src="../img/notice-board.png" alt="notice-icon">&nbsp;NOTICE BOARD</a></p>
            <p><a href="account.timetable.php" class="link"><img src="../img/time-table.png" alt="calender-icon">&nbsp;TIME TABLE</a></p>
       </div>
       <div class="main-content">
       <div class="container">
 	<?php 
        
        $query = "SELECT * FROM announcement ORDER BY `time` DESC"; 
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
        
	?>
     <div class="mg-available-rooms col-lg-12">
                <div class="mg-avl-rooms">
                    <div class="mg-avl-room">
                        <div class="row">
                            <div class="col-sm-2 s-content" >
                                <span style="font-size: 55px"><img src="../img/calenda.png" alt="calenda">
                                </span>  
         						  <h5 class="mg-sec-left-title"><?php echo date_format(date_create($row['time']),'d M, Y'); ?></h5>
                            </div>
                            <div class="col-sm-10">
                                <div style=" padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                                <a href="#">
                                <?php echo $row['title'] ;?> 
                                </a>
                                </div> 
                                <div class="row contentbody" style="margin-left: -3px;">
                                    <div class="col-sm-12">
                                      <p> <?php echo $row['body']; ?></p> 
                                    </div>
                                
                                    <div class="col-sm-12 f-author">
                                        <p><span><img src="../img/user_black.png" alt="user"></span> Author :  <?php echo  $row['author']; ?> on  <?php echo  date_format(date_create($row['time']),"d M Y h:i a"); ?></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
          <?php    }
        } ?> 

</div> 
       </div>
       <div class="footer">
            <p>Powered by Emmis Technologies</p>
            <p>&copy copyright swisslink 2022</p>
       </div>
    </div>
    <script src="../js/script.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script>
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