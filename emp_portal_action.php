<?php
	session_start();


	if (isset($_POST["Login"])) {
		 $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		
		$email = $connection->real_escape_string($_POST["email"]);
		$password = md5($connection->real_escape_string($_POST["password"]));
		$data = $connection->query("SELECT fname FROM employee WHERE email='$email' AND password='$password'");

		if ($data->num_rows > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;
	
			header("Location: emp_main_page.php");
			exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>   