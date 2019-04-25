<?php
session_start();
//get by id or email of the salon
$id = $_GET['id'];

$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

$data1 = $connection->query("SELECT * FROM salon WHERE salon_id =" .$id);
//$data1 = $connection->query("SELECT * FROM employee,salon WHERE salon.salon_id = employee.salon_id");
//$data1 = $connection->query("SELECT salon.sname, salon.saddress,salon.pin,salon.state,employee.emp_id
							//	FROM salon 
							//	INNER JOIN salon On salon.salon_id = employee.salon_id
							//	WHERE salon_id=".$id);
/*$data1 = $connection->query("SELECT salon.*, employee.* FROM salon
        			INNER JOIN salon employee
					ON salon.salon_id = employee.salon_id
					WHERE salon.salon_id = '" . $id ."'");*/

$data3 = $connection->query("SELECT * FROM slot WHERE slot.salon_id =" . $id );

$data2 = $connection->query("SELECT * FROM employee WHERE employee.salon_id =" . $id );
$row1 = $data1 -> fetch_assoc();
$row2 = $data2 -> fetch_assoc();
$row3 = $data3 -> fetch_assoc(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include('nav.php') ?>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<h2 Style="margin-top:50px;text-align:center">Employee </h2><hr class="bg-info">
		<img src="images/Employee.jpg" class="rounded-circle mx-auto d-block" alt="employee" width="200" height="200" style="margin-bottom: 20px;margin-top: 30px; ">
		<?php do { ?> 
		<ul>
       <li class="nav-link">
           <a href="empDesc.php?id= <?php echo $row2['emp_id']; ?>" data-toggle="tooltip"  class="btn btn-outline-info " style="margin-top:10px; width:100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;  "><?php echo $row2['fname']; ?></a>
      </li>
      <li>

     <div class="container">
     <h1>Available Timeslots</h1>
    <table id="table">
        <thead>
            <tr>
               <?php 
 do {
	 ?>
                <th data-field="id"><?php $row3['slot_id']; ?></th>
                <th data-field="time"><?php $row3['avail']; ?></th>
                <th data-field="price">Book This Slot</th>
            </tr>
        </thead>
    </table>
</div>
    <?php } while($row3 = $data3 -> fetch_assoc()) ?>  
      </li>

      
      <?php } while($row2 = $data2 -> fetch_assoc()) ?>
    </ul>
	  </div>
	
		
	 <?php do { ?>
		<div class="col-sm-8" style="text-align: center">
			<h1 Style="margin-top:50px;text-align:center;float: inherit"><?php echo $row1['sname']; ?></h1>	
			<div><img src="<?php echo $row1['image'];?>" class="img-fluid" style="width:100%; height: 60%; "></div>
			<br>
			<p><li>Address: <?php echo $row1['saddress']; ?>.</li>
				<li><?php echo $row1['city']; ?>.</li>
				<li><?php echo $row1['zip']; ?>.</li>
				<li><?php echo $row1['state']; ?>.</li>
				<li>Contact Number: <?php echo $row1['number']; ?>.</li>
				<li>Email Address: <?php echo $row1['email']; ?>.</li>
				<li>Opening hours: Mon-Fri:7am-6pm; Sat-Sun: 9am-5pm </li></p>
	  <?php } while($row1 = $data1 -> fetch_assoc()) ?>
	  	</div>
	  </div>
	  </div>
	<br>
<!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div>
     </div>
  <!-- Footer -->
</body>
</html>
