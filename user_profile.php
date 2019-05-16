
<?php
session_start();
$user_check = $_SESSION['email'];
include("config.php");
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from user where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);

		if ($user_sql -> num_rows == 1) {
    	//make a query to check if a valid user
    	$ses_sql = "select * from user where email='$user_check'";

  	// check session variable
  	if (isset($_SESSION['email']))
  	{

		$user_check = $_SESSION['email'];

		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");


    	//make a query to check if a valid user
    	$ses_sql = "select * from user where email='$user_check'";
    	$result = $connection -> query($ses_sql);

		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$saddress=$row['saddress'];
			$city=$row['city'];
			$pin=$row['pin'];
			$state=$row['state'];
			$number=$row['number'];

	?>
<?php include("nav.php"); ?>

<div class="container" style="text-align:center; ">
    <h1 class="text-danger" style="margin-top:40px">My Account</h1>
    <a  href=user_update.php class="btn btn-outline-danger" style="float:right" >EDIT</a><br><hr>

	  <table class="table table-danger " style="width:50%; margin-left:25%; margin-top:50px">


          <tr >
             <td> First Name:</td>
            <td><?php echo $row["fname"] ?></td>
          </tr>
          <tr>
             <td> Last Name:</td>
             <td> <?php echo $row["lname"] ?></td>
          </tr>
          <tr>
              <td>Email:</td>
                <td><?php echo $row["email"] ?></td>
          </tr>
					<tr>
						<td>Address:</td>
						 <td><?php echo $row['saddress']; ?></td>
					</tr>
					<tr>
						<td>City:</td>
						<td><?php echo $row['city']; ?></td>
					</tr>
					<tr>
						<td>Pin:</td>
						<td><?php echo $row['pin']; ?></td>
					</tr>
					<tr>
						<td>State:</td>
						<td><?php echo $row['state']; ?></td>
					</tr>
					<tr>
						<td>Phone:</td>
						 <td><?php echo $row['number']; ?></td>
					</tr>
    </table></div> <br><br><br><br><br><br><br><br><br>
		<!-- Footer -->
<div class="footer">
<div class=" text-light bg-dark" style="margin-bottom:0;  padding-bottom:10px; padding-top:20px;">

<?php include("footer.php") ?>

     </div></div>
  <!-- Footer -->
<?php } ?>
  <?php } ?>
  <?php } else {
	header(("Location:index.php"));
?>
<?php }?>
