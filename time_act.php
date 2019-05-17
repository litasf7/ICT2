<?php 
include("config.php");
 if(isset($_POST["id"]))  {
	 //$date = $_POST["id"];
	
	  $query = "SELECT * FROM slot WHERE date = '".$_POST["id"]."' ";  
	 $result = mysqli_query($connection, $query);  
if( $result->num_rows>0){
echo $result['avail'];

 }
	 else {
		 echo "No Slost";
	 }
 }


 ?>