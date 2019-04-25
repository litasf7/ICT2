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

$data3 = $connection->query("SELECT * FROM slot WHERE slot.salon_id =".$id);

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
		<img src="images/employee_fake.png" class="rounded-circle mx-auto d-block" alt="employee" width="200" height="200" style="margin-bottom: 20px;margin-top: 30px; ">
		<?php do { ?> 
		
       <ul class="nav-link">
           
           <a href="text.php?=<?php echo $row2['emp_id']; ?>" ><button data-toggle="tooltip" class="btn btn-outline-info " style="margin-top:10px; width:100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;  "><?php echo $row2['fname']; ?></button></a>
      </ul>
      
      <?php } while($row2 = $data2 -> fetch_assoc()) ?>
   
	  </div>
	
		
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
	  	
	  <div id= "empSection" >
          What is Lorem Ipsum?<br><br>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>

  Where does it come from? <br><br>
  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>

  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero ar
	  	
<?php 
$i = 0;
$pre_slot_id = "";
				    
   echo "<h1 class='text-info'>Available Time Slots</h1>";
				  echo "<hr>";
				  echo "<br>";
    
    echo "<div class='container'>";
     
while($row3 = $data3->fetch_assoc()){ 
    if($row3['slot_id'] != $pre_slot_id){ 
        if($i > 0){
 
           
        }
       
       echo "<table align='center' >"; 
             
    echo "<tr>";
        echo "<td>";
        echo "".$row3['avail'].""; echo"&nbsp"; echo"&nbsp";
        echo "</td>"; 
        echo "<td>"; 
		echo '<a href="bookslot.php?id='. $row3['slot_id'] .'">Book This Slot</a>'; 
        echo "</td>";
        
    echo "</tr>";
    $i++; 
    $pre_slot_id = $row3['slot_id']; 
    }
    
}
//echo "</hr>";
  
echo "</table>"; 
           echo "</div >";?>
     
	  </div>
	  </div>
	  </div></div>
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
