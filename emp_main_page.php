<?php
	session_start();
if(!isset($_SESSION['loggedIn'])){
	header('Location: empLogin.php');
}

	$emp_code = $_SESSION["emp_code"];
 $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		
		$data = $connection->query("SELECT * FROM employee WHERE emp_code='$emp_code'");

			$row = $data -> fetch_assoc();
			$emp_id = $row['emp_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];

	 	$slot = $connection->query("SELECT * FROM slot WHERE emp_id='$emp_id' ORDER BY avail ASC ");		 
		  $row1 = $slot-> fetch_assoc();      
?> 	 
<!doctype html>
<html>
<head>
<meta charset="utf-8"><link href="styles.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>
<title>Employee Portal</title>
</head>

<?php include('nav.php'); ?>
<body>

<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">

<div>
	<h3 style="text-align: center; margin-top:40px">Welcome <?php echo $row['fname']; ?></h3>
</div>
	</div>
	
			<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 style="text-align: center; margin-top:40px">Selected Timeslots</h3>
                <hr class="bg-info">
            </div>
        </div>
	
	<div class="row">
	<?php do { ?>
	<div class="col-md-3">
	<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">

		<h5 style="text-align: center; margin-top:40px; margin-left:40px; margin-right:40px; border: 1px groove;"> <?php echo $row1['avail'] ?></h5> 
	
		</div>
		
	</div>
	<?php } while ($row1 = $slot-> fetch_assoc()) ?>
	</div>	
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: black;">
 
	<form class="form-horizontal" method="post" action="timeslot_action.php">
	<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center; margin-top:40px">Update Your TimeSlots</h2>
                <hr class="bg-info">
            </div>
        </div>
	<h3 style="text-align: center; margin-top:40px"> <?php include('timeslots.php'); ?></h3>
	</form> 
	   
	 
</div>
	</body>
	<?php include('footer.php'); ?>
</html>


	

