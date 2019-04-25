
<?php
session_start();
if(isset($_POST['id'])){
	echo $id = $_POST['id'];
	
	$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

	$data = $connection->query("SELECT * FROM slot WHERE  slot.emp_id ='$id' " );
	$row = $data->fetch_assoc();


}?>


 <p class="text-info" style="font-size:20px"><b>Time Slots</b></p>
	<?php do { ?>
		<div class="col-sm-8" style="text-align: center">
			<h1 Style="margin-top:30px;text-align:center;float: inherit">><?php echo $row['avail']; ?></h1>	
	   <?php } while($row = $data -> fetch_assoc()) ?>