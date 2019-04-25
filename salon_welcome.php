<?php session_start(); 
if(!isset($_SESSION['loggedIn'])) {
    header('Location: salon_login.php');
}
?>
<html>  
<?php include("nav.php")?>
<body>  
<h1>Welcome</h1><br>  


<?php  
echo $_SESSION['email'];  
echo $fname;
	
?>  
<br>
<div class="card">
	<a>Add an Employee</a>
	<form action="emp_code.php" method=post> 
		<input type="text" name="emp_code" placeholder="Employee Code" /><br>
		
 	 <input type="submit" value="Generate" name= "code" /> 
	</form>
</div>






<h1><a href="salon_logout.php">Logout here</a> </h1>   
</body>  
</html>  
