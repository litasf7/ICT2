<div class="container-fluid" style="text-align:center;">
    <div class="row">
    <div class="col-12 col-s-12">
    <h1>My Account</h1>
<?php 
session_start();
include "include/config.php";

  	// check session variable
  	if (isset($_SESSION['email']))
  	{
		//make the database connection
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select * from salon where email='$user_check'";
    	$result = $connection -> query($ses_sql);
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$fname = $row['fname'];
			$lname = $row['lname'];
			$sname = $row['sname'];
			$saddress = $row['saddress'];
			$pin = $row['pin'];
			$state = $row['state'];	
			$email = $row['email'];
			
    		
		}
			
	}	?>
	<div class="row">
		<h2>First Name: <?php echo $row["fname"] ?></h2>
		<h2>Last Name: <?php echo $row["lname"] ?></h2>
		<h2>Email: <?php echo $row["email"] ?></h2>
		<h2>Salon Name: <?php echo $row["sname"] ?></h2>
		<h2>Salon Address: <?php echo $row["saddress"] ?></h2>
		<h2>Pin: <?php echo $row["pin"] ?></h2>
		<h2>State: <?php echo $row["state"] ?></h2>						
	</div>
		
		 <h1><a href="salon_logout.php">Logout here</a> </h1>  