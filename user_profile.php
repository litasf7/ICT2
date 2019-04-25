<?php 
session_start();
		include("nav.php");
include "include/config.php";
?>
   <div class="container-fluid" style="text-align:center;">
    <div class="row">
    <div class="col-12 col-s-12">
    <h1>My Account</h1>
<?php 
  	// check session variable
  	if (isset($_SESSION['email']))
  	{
		//make the database connection
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select * from user where email='$user_check'";
    	$result = $connection -> query($ses_sql);
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			
    		
		}
			
	}	?>
	 <div class="row">
	 <h2>User id: <?php echo $row["user_id"] ?></h2>
	<h2>First Name: <?php echo $row["fname"] ?></h2>
	<h2>Last Name: <?php echo $row["lname"] ?></h2>
		 <h2>Email: <?php echo $row["email"] ?></h2>
	</div>
		<h2><a class="link" href="user_update.php" > Update your profile here</a></h2>
		 <h1><a href="user_logout.php">Logout here</a> </h1>  