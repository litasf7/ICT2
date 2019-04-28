<?php
session_start();
$user_check = $_SESSION['email'];
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from user where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);
        
		if ($user_sql -> num_rows == 1) {
	$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		
		$s_email = $_SESSION['email'];


?>


<?php
$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

	
//Create a query
$sql = "SELECT * FROM user WHERE email = '$s_email'";

//submit the query and capture the result
$result = $connection->query($sql) or die(mysql_error());

	if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$password = $row['password'];
	
?>
<?php 


	if(isset($_GET['Submit'])){//if the submit button is clicked
	
	$nfname = $_GET['nfname'];
	
	$nlname = $_GET['nlname'];
	
	$nemail = $_GET['nemail'];
	
	$npassword = md5($_GET['npassword']);
		
	$update = "UPDATE user SET fname='$nfname', lname='$nlname', email='$nemail', password='$npassword' WHERE user_id = '$id'";
	
	$connection->query($update) or die("Cannot update");//update or error
	}


?>
<h2>Update Record <?php echo $id;?></h2>
<form action="user_update.php" method="get">
<table border="0" cellspacing="10">
<tr>
<td>First Name:</td> <td><input type="text" name="nfname" value="<?php echo $row['fname']; ?>"></td>
</tr>
<td>Last Name:</td> <td><input type="text" name="nlname" value="<?php echo $row['lname']; ?>"></td>
</tr>
<tr>
<td>Email:</td> <td><input type="text" name="nemail" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td>Password:</td> <td><input type="password" name="npassword" value="<?php echo $row['password']?>"></td>
</tr>
<tr>
<td><INPUT TYPE="Submit" VALUE="Update Your Details" NAME="Submit"></td>
</tr>
</table>


</form>
<?php } ?>

<?php
	if($update){//if the update worked
	echo "<b>Update successful!</b>";		
		
}  
?>
<a href="user_profile.php">My account</a>
<?php } else { ?>
<?php header("Location:homepage.php") ;} ?>

