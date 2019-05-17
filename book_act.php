<?php
include("config.php");
 if(isset($_POST["id"])) {
$data = $connection->query("SELECT * FROM employee WHERE fname IS NOT NULL AND emp_id = '".$_POST["id"]."' " ); 
$row = $data -> fetch_assoc();
  $output .= ' 
		   		  <tr>
				  <th width="70%"  ></th>   
				  <th width="70%"  ></th> 
				  
				  </tr>
				   <td width="70%">'.$row["email"].'</td>  
				   <td width="70%">
				    <a'.$row["fname"].'">Book</a>
					</td>
					</tr>
				  
				 <form name="input">
<input type="text" id="datepicker">
<input type="submit" id="submit">
	</form>

 <div id ="emp_details" ></div>
				 
               
                ';  
echo $output;
 }else{
	 echo "boom";
 }
?>