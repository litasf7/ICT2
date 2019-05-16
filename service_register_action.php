<?php
session_start();
include("config.php");

if(isset($_POST["register"])){
	
$user_check = $_SESSION['email'];
if (isset($_POST["register"])) {
     //$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		 $image_path = 'uploads/'.$_FILES['image']['name'];
		 $image_path = $connection->real_escape_string($image_path);
		$serv_name = $connection->real_escape_string($_POST["service"]);
		$serv_desc = $connection->real_escape_string($_POST["description"]);
		$sprice = $connection->real_escape_string($_POST["price"]);



		$data1 = $connection->query("SELECT * FROM services WHERE service= '$serv_name'");
        

		if ($data1->num_rows>0)
		{
			$message1 = "You have already registered this Service";
			echo "<script type='text/javascript'>alert('$message1');
			window.location.href='salon_serv.php';
			</script>";

		}
		else
		{
				
		$data = $connection->query("INSERT INTO services (image, service , description, price, salon_id) VALUES ('$image_path', '$serv_name' , '$serv_desc', '$sprice', (SELECT salon_id FROM salon WHERE email = '$user_check'))");

    	if ($data === false)
		{
			//echo "<img src='$image_path' />";
			$message2 = "Error Please Try Again";
			echo "<script type='text/javascript'>alert('$message2');
			window.location.href='salon_serv.php';
			</script>";
		}

    	else
		{
			$message3 = "Your sevice has been added";
			echo "<script type='text/javascript'>alert('$message3');
			window.location.href='salon_welcome.php';
			</script>";

		  }
	   
		}

}}

?>
