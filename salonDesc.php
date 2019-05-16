<?php
session_start();
include("config.php");
//get by id or email of the salon
$id = $_GET['id'];

//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");

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

$data3 = $connection->query("SELECT * FROM slot WHERE  slot.salon_id =" . $id );

$data2 = $connection->query("SELECT * FROM employee WHERE fname IS NOT NULL AND employee.salon_id =" . $id );
$row1 = $data1 -> fetch_assoc();
$row2 = $data2 -> fetch_assoc();
$row3 = $data3 -> fetch_assoc(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Salon Description</title>
	

</head>


<?php include('nav.php') ?>
<body>
<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(<?php echo $row1['image'];?>); background-repeat: no-repeat; background-size:cover; background-position: center center; min-height:700px">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center" >
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class=" text-center text-white" style="padding-top:150px">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown font-weight-bold" data-wow-delay="0.3s" style="background: rgba(0, 0, 0, 0.3); padding:10px"><?php echo $row1['sname']; ?></h1>
                            
                            <h6 class="text-uppercase white-text mb-3 mt-1 font-weight-bold wow fadeInDown " data-wow-delay="0.3s">Check Our</h6>
                            <a href="#employee" class="btn btn-danger btn-lg wow fadeInDown" style="width:150px" >STYLISTS</a>
                            <a href="#services" class="btn btn-light btn-lg wow fadeInDown" style="width:150px" >SERVICES</a><br>
                            <a href="#book-appointment" class="btn btn-light btn-lg wow fadeInDown" style="margin-top:20px" >BOOK APPOINTMENT</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>       
<br>
<div class="container-fluid">
    <div class="row">
    <div class="col-xl-4">
                    <ul class="list-inline text-center ">
                            <li class="list-inline-item"><i class="fas fa-map-marker fa-2x"></i> </li>
                            <li class="list-inline-item">
                                <ul class="list-inline text-center "><li class="list-inline-item">
                                    <p style="font-size:20px">
                                        <?php echo $row1['saddress']; ?>
                                        <?php echo $row1['city']; ?> &nbsp;
				                        <?php echo $row1['state']; ?>
                                        <?php echo $row1['zip']; ?>
                                    </p></li></ul>
                            </li>
                    </ul>
    </div>
    <div class="col-xl-4">
                    <ul class="list-inline text-center ">
                            <li class="list-inline-item"><i class="fas fa-phone fa-2x"></i> </li>
                            <li class="list-inline-item"><p style="font-size:20px"><?php echo $row1['number']; ?></p></li>
                    </ul>
    </div>
    <div class="col-xl-4">
                    <ul class="list-inline text-center">
                            <li class="list-inline-item"><i class="fas fa-envelope fa-2x"></i> </li>
                            <li class="list-inline-item"><p style="font-size:20px"><?php echo $row1['email']; ?></p></li>
                    </ul>
    </div>
    
    </div>
    
    </div>
<div class="container-fluid" style="background-image: url(images/salon-bg1.jpg);">
   <br><br>
    <div class="container-fluid" id="employee"> 
    <div class="card text-center mx-auto" style="width:500px; height:auto;padding:30px" >
        <p style="font-size:30px"> Remove this card and put a carousel type to move the employees</p>
        <h2 Style="margin-top:50px;text-align:center">Employee </h2><hr class="bg-danger">
		<img src="images/employee_fake.png" class="rounded-circle mx-auto d-block" alt="employee" width="200" height="200" style="margin-bottom: 20px;margin-top: 30px; ">
		 <?php if($data2->num_rows>0) { ?> 
		<?php do { ?>
		<ul class="nav-link">
       <a type="btn" name="view" style="color: black; width: 100%;" href="u1.php?id=<?php echo $row2["emp_id"]; ?>" class="btn btn-dark view_data text-light" > <?php echo $row2["fname"]; ?></a>
         </ul> 
   <?php } while($row2 = $data2 -> fetch_assoc()) ?>
   <?php } else { ?>
        
        <button name="view" style="color: black; width: 100%;" class="btn btn-danger btn-xs view_data" disabled> No employee yet</button>
        
   <?php } ?>
    
    </div>
    </div>
   <hr class="bg-danger " style="margin-top:100px">
    
    <div class="conatiner-fluid" id="services" style="margin-top:100px"> 
    
    <div class="card text-center mx-auto" style="width:500px; height:200px;padding:30px" >
        <p style="font-size:30px"> Remove this card and put a carousel type to move the services</p>
    
    </div>
    </div>
    
    <hr class="bg-danger " style="margin-top:100px">

    <div class="container-fluid" id="book-appointment"> 

  <div class="card text-center mx-auto" style="width:500px; height:200px;padding:30px" >
        <p style="font-size:30px"> Book Appointment</p>
    
    </div>
	</div><br>
	 
</div>
    </body>
	
<!-- Footer -->
<div class="footer">
<div class=" text-light bg-dark" style="margin-bottom:0;  padding-bottom:10px; padding-top:20px;">
  
<?php include("footer.php") ?>
  
     </div></div>
  <!-- Footer -->

</html>
