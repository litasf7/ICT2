<?php
	session_start();


	if (isset($_SESSION["loggedIn"])) {
		
		header("Location: emp_welcome.php");
		exit();
	}

	if (isset($_POST["login"])) {
		 $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
	
		$emp_code = $connection->real_escape_string($_POST["emp_code"]);
		$data = $connection->query("SELECT * FROM employee WHERE emp_code ='$emp_code'");
				
		if ($data->num_rows > 0) {
			$row = $data->fetch_assoc();
			$_SESSION["email"] = $row['email'];

			$_SESSION["loggedIn"] = 1;
			$_SESSION["emp_code"] = $emp_code;
			$_SESSION["emp_id"] = $emp_id;
			
			header("Location: emp_welcome.php");
			exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>   
