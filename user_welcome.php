<?php  
session_start();  
 $semail =  $_SESSION['email'];
if(!$_SESSION['email'])  
{  
  
    header("Location: homepage.php");//redirect to login page to secure the welcome page without login access.  
}  
else{

  $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
 $sql = $connection->query("SELECT * FROM user WHERE email = '$semail' ");
if ($sql->num_rows>0){
	$row = $sql -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$password = $row['password'];
	
	
}
}
?> 
<html>  
<?php include("nav.php")?>
<body>  
<h1>Welcome</h1> 
<?php  
echo $row['fname'];  
?>  <br>
 <?php echo $row['lname'];
	?>
<br>	<?php echo $row['email'];
	?>
  
  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html>  
