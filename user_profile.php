<?php 
session_start();
		include("nav.php");
include "include/config.php";
?>
   
<?php 
  	// check session variable
  	if (isset($_SESSION['email']))
  	{
		//make the database connection
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select * from user where email='$user_check'";
    	$result = $connection -> query($ses_sql);
        
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			
    		
		}
			
	}	?>

<div class="container" style="text-align:center; ">
    <h1 class="text-info" style="margin-top:40px">My Account</h1>
    <a  href=user_update.php class="btn btn-outline-info" style="float:right" >EDIT</a><br><hr>
    
	  <table class="table table-info " style="width:50%; margin-left:25%; margin-top:50px">
         
          
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
    </table></div> <br><br><br><br><br><br><br><br><br>
		<!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->