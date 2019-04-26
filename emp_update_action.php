<?php          
session_start();
if (!isset($_SESSION["loggedIn"])) {
	header("Location:empLogin.php");
}
else{
	$emp_code = $_SESSION["emp_code"];
	echo $_SESSION["emp_code"];
}
    if (isset($_POST["submit"])) {
     $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$fname = $connection->real_escape_string($_POST["fname"]);
		$lname = $connection->real_escape_string($_POST["lname"]);					
		$email = $connection->real_escape_string($_POST["email"]);  
		$password = md5($connection->real_escape_string($_POST["password"])); 
		
		
		$emp_check = $connection->query("SELECT * FROM employee WHERE emp_code='$emp_code'");
		
		
		
		if ($emp_check->num_rows > 0) 
		{
			
			$data = $connection->query("UPDATE employee SET fname = '$fname' , lname = '$lname' , email = '$email' , password = '$password' WHERE emp_code = '$emp_code' ");
			echo "Registration Sucessful";
    		
				header("Location:emp_welcome.php");
		} 		
		else 
		{
			echo "Registration Error";
			
		} 	   
		
		
}
		
			
?>
