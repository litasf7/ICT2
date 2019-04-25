<?php 
session_start();
$a = $_SESSION['email'];

if(isset($_POST['code'])){
	 
	$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
	$emp_code = $connection->real_escape_string($_POST["emp_code"]);
	
	$data = $connection->query("INSERT into employee (fname , lname , email , password , emp_code, salon_id) 
	VALUES ('','','','','$emp_code', (SELECT salon_id FROM salon WHERE email = '$a'))");

	
	if ($data === false)
        	echo "Connection error!";
    	else
    	   echo "The Code Has been activated: ";
	
	
	
}

?>
<h3><a href="salon_welcome.php">Go to Dashboard</a> </h3>   