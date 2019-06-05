
<?php
session_start();
$user_check = $_SESSION['email'];
include("config.php");
		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		$user_sql = "select * from salon where email='$user_check'";
   		$user_sql = $connection -> query($user_sql);

		if ($user_sql -> num_rows == 1) {
    	//make a query to check if a valid user
    	$ses_sql = "select * from salon where email='$user_check'";

  	// check session variable
  	if (isset($_SESSION['email']))
  	{

		$user_check = $_SESSION['email'];

		//$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");


    	//make a query to check if a valid user
    	$ses_sql = "select * from salon where email='$user_check'";
    	$result = $connection -> query($ses_sql);

		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
			$id = $row['salon_id'];
			$image=$row['image'];
			$sname = $row['sname'];
			$oname = $row['oname'];
			$email = $row['email'];
			$saddress=$row['saddress'];
			$city=$row['city'];
			$zip=$row['zip'];
			$state=$row['state'];
			$number=$row['number'];





	?>
<?php include("nav.php"); ?>
<body style="background-image: url(images/salon-bg1.jpg); ">
<div class="container  " style="text-align:center; min-height: 700px">
    <h1 class="text-dark list-inline-item " style="margin-top:40px">My Account </h1>
	<div class="row">
	<div class="col-xl-4">
	<img class="rounded-circle mx-auto"
            src="<?php echo $row['image'];?>"
            alt="Card image cap" style="width: 300px;height: 300px;margin-top:50px"><br>
		<p style="font-family: aladin; font-size:35px"><?php echo $row["sname"] ?> &nbsp;  </p>
		<a  href=salon_update.php class="btn btn-outline-danger" style="float:center" >EDIT </a> &nbsp;
		<a  href=salon_welcome.php class="btn btn-outline-danger" style="float:center"> ADD EMPLOYEE</a>
		<a  href=salon_serv.php class="btn btn-outline-danger" style="float:center"> ADD SERVICES</a>
	</div>




	<table class="table mx-auto table-dark table-striped col-xl-8 col-12 text-uppercase" style=" margin-top:50px">

          <tr >
             <td> Salon Name:</td>
            <td><?php echo $row["sname"] ?></td>
          </tr>
          <tr>
             <td> Owner Name:</td>
             <td> <?php echo $row["oname"] ?></td>
          </tr>
          <tr>
              <td>Email:</td>
                <td><?php echo $row["email"] ?></td>
          </tr>
		<tr>
              <td>Address:</td>
                <td><?php echo $row["saddress"] ?></td>
          </tr>
        <tr>
              <td>City:</td>
                <td><?php echo $row["city"] ?></td>
          </tr>
		<tr>
              <td>Pin:</td>
                <td><?php echo $row["zip"] ?></td>
          </tr>
		<tr>
              <td>State:</td>
                <td><?php echo $row["state"] ?></td>
          </tr>
		<tr>
              <td>Phone:</td>
                <td><?php echo $row["number"] ?></td>
          </tr>
			</table>

	</div>

</div>
		<!-- Footer -->
<div class="footer">
<div class=" text-light bg-dark" style="margin-bottom:0;  padding-bottom:10px; padding-top:20px;">

<?php include("footer.php") ?>

     </div></div>
  <!-- Footer -->
<?php } ?>
  <?php } ?>
  <?php } else {
	header(("Location:index.php"));
?>
<?php }?>
