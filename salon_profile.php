
<?php 
session_start();
include "include/config.php";

  	// check session variable
  	if (isset($_SESSION['email']))
  	{
		//make the database connection
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$ses_sql = "select * from salon where email='$user_check'";
    	$result = $connection -> query($ses_sql);
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
           // $image = $row['image']
			//$fname = $row['fname'];
			$lname = $row['lname'];
			$sname = $row['sname'];
			$saddress = $row['saddress'];
			$pin = $row['pin'];
			$state = $row['state'];	
			$email = $row['email'];
			
    		
		}
			
	}	?>

<?php include("nav.php")?>
<div class="container" style="text-align:center;">
    
    <h1  class="text-info" style="margin-top:40px">My Account</h1><hr>
   <!-- <a  href=user_update.php class="btn btn-outline-info" style="float:right" >EDIT</a><br> -->
	<table class="table table-info " style="width:50%; margin-left:25%; margin-top:50px">
        
        
		<tr>
            <td>First Name:</td>
           <td> <?php echo $row["fname"] ?></td>
        </tr>
		<tr>
            <td>Last Name:</td>
            <td><?php echo $row["lname"] ?></td>
        </tr>
		<tr>
           <td> Email: </td>
           <td> <?php echo $row["email"] ?></td>
        </tr>
        <tr>
            <td>Salon Image:</td>
           <td><img src="<?php echo $row['image'];?>" style="width:200px; height:200px;"></td>
        </tr>
		<tr>
            <td>Salon Name: </td>
            <td><?php echo $row["sname"] ?></td>
        </tr>
       
		<tr>
            <td>Salon Address: </td>
            <td><?php echo $row["saddress"] ?></td>
        </tr>
		<tr>
           <td> Pin: </td>
            <td><?php echo $row["pin"] ?></td>
        </tr>
		<tr>
           <td> State: </td>
            <td><?php echo $row["state"] ?></td>
        </tr>						
	
			 
    </table>
</div>   <br> 
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div></div>
  <!-- Footer -->