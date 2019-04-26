
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php include('nav.php') ?>
<?php
session_start();
	if(!isset( $_SESSION["email"])){
		header("Location:viewslots.php");
	}
$user_email = $_SESSION["email"];


$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
$user = $connection->query("SELECT * FROM user WHERE email = '$user_email'");
if ($user->num_rows>0){
	$row = $user->fetch_assoc();
	$username=$row['fname'];
	$user_id = $row['user_id'];
	$id = $_GET['id'];
$booking = $connection->query("UPDATE slot SET  user_id = '$user_id' WHERE slot_id = '$id'");
}
	

	
$confirm = $connection->query("SELECT * FROM SLOT WHERE slot.user_id='$user_id'   ");
if($confirm->num_rows>0){
	$data = $confirm->fetch_assoc();
	
	$time = $data['avail'];
	$date = $data['date'];
	$emp = $data['emp_id'];
	
}
$empdet = $connection->query("SELECT * FROM employee WHERE emp_id = '$emp'");
if($empdet->num_rows>0){
	$data1 = $confirm->fetch_assoc();
	
	
	$empname = $data1['fname'];
	//echo "booking Confirmed ";
	//header("Location:Homepage.php");
}
?>
	<div class="row">
    <div class="col-sm-8">
     <h2 style="color: black; align-content: center;">Booking Confirmation</h2>
		</div>
	</div>

	<div class="row">
    <div class="col-sm-8">
     <h2 style="color: black; align-content: center;"><?php echo $username; ?></h2>
     <h3 style="color: black; align-content: center;"><?php echo $time; ?></h3>
     <h3 style="color: black; align-content: center;"><?php echo $date ?></h3>
      <h3 style="color: black; align-content: center;"><?php echo $empname ?></h3>
     
		</div>
	</div>
	<a href="homepage.php" >Go home</a>


 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  