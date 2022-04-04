<?php
session_start();
$sid=0;
if(isset($_SESSION['email']))
{
	
	include 'variables.php';
	$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);	
	$id=$_GET['id'];
	echo(mysqli_error($mysqli));	

	$query = "SELECT * FROM admission WHERE ID ='$id'"; 
	$result = $mysqli->query($query) or die($mysqli->error);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			foreach($row as $val) {
				$details[] = $val;
			}
			$sid=$details[0];
		}   
	}
	if($id==$sid){
		?><html lang="en">

		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Basic Profile</title>
			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link rel="icon" href="../icon.ico" type="image/x-icon">
			<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
			<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
			<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
	
			<!-- Date picker JS-->
			<script>
				$(function() {
					var dateFormat = "dd-mm-yy",
						from = $("#from")
						.datepicker({
							defaultDate: "+1w",
							changeMonth: true,
							numberOfMonths: 3,
							changeMonth: true,
							changeYear: true
	
						})
						.on("change", function() {
							to.datepicker("option", "minDate", getDate(this));
						}),
						to = $("#to").datepicker({
							defaultDate: "+1w",
							changeMonth: true,
							numberOfMonths: 3,
							changeMonth: true,
							changeYear: true
						})
						.on("change", function() {
							from.datepicker("option", "maxDate", getDate(this));
						});
	
					function getDate(element) {
						var date;
						try {
							date = $.datepicker.parseDate(dateFormat, element.value);
						} catch (error) {
							date = null;
						}
						return date;
					}
				});
			</script>
	
			<script type="text/javascript">
				$(document).ready(function() {
					$('#record').DataTable({
						dom: 'Bfrtip',
						buttons: [
							'print'
						]
					});
				});
			</script>
		</head>
	
		<body>
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
									<label>Date applied for admission</label>
									<input type="text" name="reg_date" class="form-control" value="<?php echo date_format(date_create($details[33]),'d M, Y'); ?> " readonly>
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
							<div class="col-sm-3 form-group">
								<label>Campus Location</label>
								<input type="text" class="form-control" value="<?php echo $details[39]; ?> " readonly>
							</div>
							<div class="col-sm-3 form-group">
								<label>School of Study</label>
								<input type="text" class="form-control" value="<?php echo $details[23]; ?> " readonly>
							</div>
							<div class="col-sm-3 form-group">
								<label>Field of Study</label>
								<input type="text" class="form-control" value="<?php echo $details[24]; ?> " readonly>
							</div>
							<div class="col-sm-3 form-group">
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
					<input type="hidden" name="id" value="<?php echo $details['0'] ?>">
					<input type="submit" name="admit" value="Admit" style="background: #00985A; color: white; width: 180px; text-align: center; padding: 10px 0 10px 0; font-size: 24px; border: none; border-radius: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" name="reject" value="Reject" style="background: #BD0006; color: white; width: 180px; text-align: center; padding: 10px 0 10px 0; font-size: 24px; border: none; border-radius: 5px;">
				</div>
				</form>
			</div>
			</div>
			</div>
			</section>
		<?php
	}
	else{
		?>
		<?php 
		echo '<title> Error </title>
		<div class="container" style="margin:150px;">
		<h1 class="well" style="text-align: center;color: red !important;">Error : Invalid Student ID</h1>
		<h3 class="well" style="text-align: center;"><a href="view.php?id=1" style="color: #000080 !important;">Click here to return ID 1</a></h3>';
	}
	?>    
	<?php
}
else{
	?>
	<?php	
	echo "<script language='javascript'>alert('Login to continue');
	window.location.href='/shibat-students/admin';
	</script>";

}
?>