<?php
session_start();
$sid=0;
if(isset($_SESSION['email']))
{
	$id=$_GET['id'];
	include 'variables.php';
	$mysqli = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);

	$query = "SELECT * FROM admission WHERE id =$id"; 
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
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<li class="active">Records</li>
					</ol>
				</div>
			</section>
			<div class="col-md-12">
				<!-- Website Overview -->
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Admissions Record</h3>
					</div>
					<div class="panel-body">
						<br/>
						<div class="row">
								<div class="col-sm-6 form-group">
									<!-- <label>Image</label> -->
									<img src="<?php echo '../upload/' . $details[11];?>" height="200" width="200">
								</div>
								<div class="col-sm-6 form-group">
									<label>Fullname</label>
									<input type="text" class="form-control" value="<?php echo $details[1]; ?>" readonly><br>
									<label>Date of Birth</label>
									<input type="text" class="form-control" value="<?php echo $details[1]; ?>" readonly><br>
									<label>Place of Birth</label>
									<input type="text" class="form-control" value="<?php echo $details[1]; ?>" readonly>
								</div>

								
							</div>
							<div class="row">
								<div class="col-sm-6 form-group">
									<label>Gender</label>
									<input type="text" class="form-control" value="<?php echo $details[2]; ?> " readonly>
								</div>
								<div class="col-sm-6 form-group">
									<label>Blood Group</label>
									<input type="text" class="form-control" value="<?php echo $details[3]; ?> " readonly>
								</div>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" rows="3" class="form-control" readonly> <?php echo $details[4]; ?> </textarea>
							</div>
							<div class="row">
								<div class="col-sm-3 form-group">
									<label>Date of Birth</label>
									<input type="text" class="form-control" value="<?php echo $details[12]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>City</label>
									<input type="text" class="form-control" value="<?php echo $details[5]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>State</label>
									<input type="text" class="form-control" value="<?php echo $details[6]; ?> " readonly>
								</div>
								<div class="col-sm-3 form-group">
									<label>Zip</label>
									<input type="text" class="form-control" value="<?php echo $details[7]; ?> " readonly>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 form-group">
									<label>Phone Number</label>
									<input type="text" class="form-control" value="<?php echo $details[8]; ?> " readonly>
								</div>
								<div class="col-sm-4 form-group">
									<label>Email Address</label>
									<input type="text" class="form-control" value="<?php echo $details[9]; ?> " readonly>
								</div>
								<div class="col-sm-4 form-group">
									<label>Registration Date</label>
									<input type="text" name="reg_date" class="form-control" value="<?php echo $details[33]; ?> " readonly>
								</div>
							</div>
						</form>
					</div>
				</div>
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