
<?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
   $connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers"); 
      $query = "SELECT * FROM slot WHERE slot.emp_id = '".$_POST["id"]."'";  
      $result = mysqli_query($connection, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
	 	

      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
		
                <tr>  
                     <td width="70%">'.$row["avail"].'</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>