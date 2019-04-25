<?php

session_start();
$user_email = $_SESSION['email'];

$id = $_GET['id'];

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");



$user = $connection->query("SELECT * FROM user WHERE email = '$user_email'");
if ($user->num_rows>0){
	$row = $user->fetch_assoc();
	echo $row['fname'];
	$user_id = $row['user_id'];
	
	
	$booking = $connection->query("UPDATE slot SET  user_id = '$user_id' WHERE slot_id = '$id'");
	
	echo "booking Confirmed ";
	header("Location:Homepage.php");
	
}
