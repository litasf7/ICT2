
<?php
session_start();

$id=$_GET['id'];

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

$data1 = $connection->query("SELECT * FROM slot WHERE slot.emp_id =".$id);
$row1 = $data1 -> fetch_assoc();
?>
<?php do { ?>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><?php echo $row1['avail']; ?></h3>
   
    </div> 
  </div>
  
   <?php } while($row1 = $data1 -> fetch_assoc()) ?>