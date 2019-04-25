<?php 

session_start();
$id = $_GET[id];


$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

$data3 = $connection->query("SELECT * FROM slot WHERE slot.emp_id =21"  );


 if($data3->num_rows>0){
     $row = $data3->fetch_assoc();
     
  foreach($row['avail'] as $values)  {
      
      echo $values;
  } 
 }

?>


