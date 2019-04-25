
<?php
session_start();

$id = $_GET['id'];

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

$data1 = $connection->query("SELECT * FROM slot WHERE slot.emp_id = ".$id);
$row1 = $data1 -> fetch_assoc();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	
	function empSlot() {
     var id = $('.a').attr('data-id');
	
		$.ajax({
			type: "POST",
			url: "aj.php",
			data: {
				id: id
			},
			success: function(data) {
			//alert(data);
				$("#newid").html(data);
			}
			
		})
	}

</script>

<div id="newid"></dvi>
	
		
	</div>
	<?php do { ?>
	<div class="row">
  <div class="column">
    <div class="card">
<button class = "a" data-id="<?php echo $row1['slot_id']; ?>" onclick="empSlot();" ><?php echo $row1['avail']; ?></button>
    </div> 
  </div>
		</div>
  
   <?php } while($row1 = $data1 -> fetch_assoc()) ?>


