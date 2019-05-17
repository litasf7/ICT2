<?php
session_start();
include("config.php");
//get by id or email of the salon
$salonid = $_GET['id'];
$_SESSION["salonid"] = $salonid;
$data1 = $connection->query("SELECT * FROM salon WHERE salon_id =" .$salonid);
$row1 = $data1 -> fetch_assoc();

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	
  } );
  </script>

 <script>
	 
    $(document).ready(function() {
		//$(document).on("click", '.date', function() {
        $('#datepicker').on('change',function(e) {
            e.preventDefault();
            $.ajax({
				cache: false,
                type: 'POST',
                url: 'time_option.php',
                data: {id: $('#datepicker').val()},
				
                success: function(data)
                {
					var opts = $.parseJSON(data);
				
					$.each(opts, function(index,time) {
						//alert(time);
					$('#time').append('<option value="' + time + '">'+ time + '</option>');
                   // $("#employee").html(data);	
                   // $("#time").html(data);
  					});
						   
						   }
    });
});
	});
</script>
<script>
	$(document).ready(function() {
    $("#time").change(function(e){
		e.preventDefault();
        $.ajax({
            type: 'POST',
			url: 'emp_check.php',
            data:  {id:$('#time option:selected').val()},
			    success: function(data)
                {
				
				
					$('#employee').empty().append('<option value="' + d + '">'+ d + '</option>');
                   // $("#employee").html(data);
					}
						   
						   
    });
});
	});
</script>
 <script>
	function getdate() {
    var input = document.getElementById("datepicker").value;
    alert(input);
}
	
	
	</script>
	
</head>
<body>
	 <?php do { ?>
		<div class="col-sm-8" style="text-align: center">
			<h1 Style="margin-top:30px;text-align:center;float: inherit"><?php echo $row1['sname']; ?></h1>	<br>
			<div><img src="<?php echo $row1['image'];?>" class="img-fluid" style="width:70%; height: 60%; "></div>
			<br>
            <p class="text-info" style="font-size:20px"><b>ADDRESS</b></p>
            <p><?php echo $row1['saddress']; ?><br>
				<?php echo $row1['city']; ?> &nbsp;
				<?php echo $row1['state']; ?> - 
                <?php echo $row1['zip']; ?><br>
				Contact Number: &nbsp;<?php echo $row1['number']; ?><br>
				Email Address: &nbsp;<?php echo $row1['email']; ?><br>
				Opening hours:&nbsp; Mon-Fri:7am-6pm; Sat-Sun: 9am-5pm </p>
	  <?php } while($row1 = $data1 -> fetch_assoc()) ?>
<br>
<form action="">
<div>
<?php 
	include("config.php");
	$services = $connection->query("SELECT * FROM services WHERE salon_id=".$salonid);
$row4 = $services -> fetch_assoc(); ?>
<?php do { ?>
<input type="checkbox" id="services" name="<?php echo $row4['serv_id'];?>"><?php echo $row4['serv_name'];?>

<?php } while($row4 = $services -> fetch_assoc()) ?>
</div>

<div>
<input type="text" id="datepicker">
<!--<input id="date" type="submit"> -->
</div>

<div>
<select id="time">
</select> 
</div>

<div>
 <select id="employee">
</select>
</div>
<input name="book" type="submit" value="BOOK">
</form>


 

</body>
</html>