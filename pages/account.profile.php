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
    <title>Account Profile</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon">
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        <?php include_once "../css/student.account.css";
        include_once "../admin/css/bootstrap.min.css";
		include_once "../admin/css/apply.css";
		include_once "../css/profile.css";
		
		?>
    </style>
    <div class="container">
        <a href="../index.php"><img src="../img/profile.png" alt="swisslink logo" width="180" height="140"></a>
        <nav>            
            <img src="../img/user.png" alt="user-icon">
            <p>Neba Emmanuel Fuh <img src="../img/dropdown.png" alt=""></p>
        </nav>
        <div class="side-bar">
        <p><a href="#" class="active">PROFILE</a></p>
        <p><a href="account.payment.php">PAYMENT</a></p>
        <p><a href="account.noticeboard.php">NOTICE BOARD</a></p>
        <p><a href="account.timetable.php">TIME TABLE</a></p>
    </div>
    <section id="breadcrumb">
				<div class="container">
					<ol class="breadcrumb">
						<li class="active">Admissions Record</li>
					</ol>
				</div>
			</section>
			<div class="col-md-12">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Personal Information</h3>
					</div>
					<div class="panel-body">
						<br/>
						<div class="row">
								<div class="col-sm-6 form-group">
									<img src="<?php echo '../upload/' . $details[11];?>" height="200" width="200">
								</div>
								<div class="col-sm-6 form-group">
									<label>Fullname</label>
									<input type="text" class="form-control" value="<?php echo $details[1]; ?>" readonly><br>
									<label>Date of Birth</label>
									<input type="text" class="form-control" value="<?php echo $details[2]; ?>" readonly><br>
									<label>Place of Birth</label>
									<input type="text" class="form-control" value="<?php echo $details[3]; ?>" readonly>
								</div>

								
							</div>
							<div class="row">
								<div class="col-sm-4 form-group">
									<label>Gender</label>
									<input type="text" class="form-control" value="<?php echo $details[6]; ?> " readonly>
								</div>
								<div class="col-sm-4 form-group">
									<label>Nationality</label>
									<input type="text" class="form-control" value="<?php echo $details[7]; ?> " readonly>
								</div>
								<div class="col-sm-4 form-group">
									<label>Special Needs</label>
									<input type="text" class="form-control" value="<?php echo $details[9]; ?> " readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3 form-group">
									<label>Phone No.</label>
									<input type="text" class="form-control" value="<?php echo $details[4]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>Email</label>
									<input type="text" class="form-control" value="<?php echo $details[5]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>Address</label>
									<input type="text" class="form-control" value="<?php echo $details[10]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>Marital Status</label>
									<input type="text" class="form-control" value="<?php echo $details[8]; ?> " readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 form-group">
									<label>National ID / Passport</label>
									<h4><a href="<?php echo"../upload/".$details[12]; ?>" target="_blank">Preview</a></h4>
								</div>
								<div class="col-sm-4 form-group">
									<label>Birth Certificate</label>
									<h4><a href="<?php echo"../upload/".$details[13]; ?>" target="_blank">Preview</a></h4>
								</div>
								<div class="col-sm-4 form-group">
									<label>Admission Date</label>
									<input type="text" name="reg_date" class="form-control" value="<?php echo $details[33]; ?> " readonly>
								</div>
							</div>
						</div>
					</div>
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Other Information</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Father's Name</label>
								<input type="text" class="form-control" value="<?php echo $details[14]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Father's Address</label>
								<input type="text" class="form-control" value="<?php echo $details[15]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Father's No.</label>
								<input type="text" class="form-control" value="<?php echo $details[16]; ?> " readonly>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Mother's Name</label>
								<input type="text" class="form-control" value="<?php echo $details[17]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Mother's Address</label>
								<input type="text" class="form-control" value="<?php echo $details[18]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Mother's No.</label>
								<input type="text" class="form-control" value="<?php echo $details[19]; ?> " readonly>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Gaurdian's Name</label>
								<input type="text" class="form-control" value="<?php echo $details[20]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Gaurdian's Address</label>
								<input type="text" class="form-control" value="<?php echo $details[21]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Gaurdian's No.</label>
								<input type="text" class="form-control" value="<?php echo $details[22]; ?> " readonly>
							</div>
						</div>
						</div>
					</div>
					<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Program Choice</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>School of Study</label>
								<input type="text" class="form-control" value="<?php echo $details[23]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Field of Study</label>
								<input type="text" class="form-control" value="<?php echo $details[24]; ?> " readonly>
							</div>
							<div class="col-sm-4 form-group">
								<label>Certification</label>
								<input type="text" class="form-control" value="<?php echo $details[25]; ?> " readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Academic Qualification</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-2 form-group">
								<label>Institute Addended</label>
								<input type="text" class="form-control" value="<?php echo $details[26]; ?> " readonly>
							</div>
							<div class="col-sm-2 form-group">
								<label>Period</label>
								<input type="text" class="form-control" value="<?php echo $details[27]." to ".$details[28]; ?> " readonly>
							</div>
							<div class="col-sm-2 form-group">
								<label>Program Studied</label>
								<input type="text" class="form-control" value="<?php echo $details[29]; ?> " readonly>
							</div>
							<div class="col-sm-2 form-group">
								<label>Certificate Earned</label>
								<input type="text" class="form-control" value="<?php echo $details[30]; ?> " readonly>
							</div>
							<div class="col-sm-2 form-group">
								<label>Remark</label>
								<input type="text" class="form-control" value="<?php echo $details[31]; ?> " readonly>
							</div>
							<div class="col-sm-2 form-group">
								<label>Certificate Obtained</label>
								<h4><a href="<?php echo"../upload/".$details[32]; ?>" target="_blank">Preview</a></h4>
							</div>
						</div>
					</div>
				</div>
				<form action="decision.php" method="post">
				<div class="decision" style=" width: auto; height: 200px; display: flex; justify-content: center; align-items: center;">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<input type="submit" name="admit" value="Admit" style="background: #00985A; color: white; width: 180px; text-align: center; padding: 10px 0 10px 0; font-size: 24px; border: none; border-radius: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="reject" value="Decline" style="background: #BD0006; color: white; width: 180px; text-align: center; padding: 10px 0 10px 0; font-size: 24px; border: none; border-radius: 5px;">
				</div>
				</form>
			</div>
			</div>
			</div>
			</section>
    </div>
    
    

    <footer>
        <p>Powered by Emmis Technologies</p>
        <p>&copy copyright swisslink 2022</p>
    </footer>

    <script src="../js/script.js"></script>
	<script src="../admin/js/bootstrap.min.js"></script>
</body>
</html>