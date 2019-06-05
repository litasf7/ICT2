<?php
session_start();
$user_check = $_SESSION['email'];
include("config.php");


   		$user_sql = $connection -> query("select * from user where email='$user_check'");

		if ($user_sql -> num_rows == 1) {
			$row = $user_sql -> fetch_assoc();
			$id = $row['user_id'];
      $image=$row['image'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$address=$row['address'];
			$city=$row['city'];
			$pin=$row['pin'];
			$state=$row['state'];
			$number=$row['number'];


	if(isset($_GET['Submit'])){//if the submit button is clicked



  $nimage = $_GET['nimage'];

	$nfname = $_GET['nfname'];

	$nlname = $_GET['nlname'];

	$nemail = $_GET['nemail'];

	$naddress=$_GET['naddress'];

	$ncity=$_GET['ncity'];

	$npin=$_GET['npin'];

	$nstate=$_GET['nstate'];

	$nnumber=$_GET['nnumber'];


	$update = $connection->query("UPDATE user SET image='$nimage',fname='$nfname', lname='$nlname', email='$nemail',address='$naddress',city='$ncity',pin='$npin',state='$nstate', number='$nnumber' WHERE user_id = '$id'");




  if(preg_match("!image!",$_FILES['image']['type'])){
  if(copy($_FILES['image']['tmp_name'],$image_path)){

if($update === true){//if the update worked

		$message = "Update Successful";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='user_update.php';
			</script>";
	header("Location:user_profile.php");
} } }
else {

	$message = "Update Error";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='user_update.php';
			</script>";
}


	}
?>

<?php include("nav.php"); ?>
<body style="background-image: url(images/salon-bg1.jpg);">

<div class="container" style=" min-height: 700px ">
    <h1 class="text-dark text-center" style="margin-top:40px; ">Update Details</h1>

<form action="user_update.php" method="GET">
<div class="row" >
<div class="col-lg-4">
    <img class="rounded-circle mx-auto"
              alt="Card image cap" style="width: 300px;height: 300px;margin-top:50px"><br>
               <div class="form-group">
                    <div class="input-group ">
                        <input id="image" type="file" accept="image/*" name="nimage" value="<?php echo $row['image'];?>">
                    </div>
                </div>
              </div>
  	<div class="col-lg-8 " style="margin-top:30px">
            <div class="row">
             <div class="col-1 " ></div>
            <div class="col-5  field-label-responsive font-weight-bold">
                <label for="Fname">FIRST NAME:</label>
            </div>
            <div class="col-5 ">
                <div class="form-group">
                     <div class="input-group  ">

                        <input type="text" name="nfname" class="form-control " id="Fname"
                               placeholder="First Name" value="<?php echo $row['fname']; ?>">
							   </div>
                </div>
            </div></div>

            <div class="row">
            <div class="col-1"></div>
            <div class="col-5 field-label-responsive font-weight-bold">
                <label for="lname">LAST NAME:</label>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <div class="input-group ">

                        <input type="text" name="nlname" class="form-control" id="lname"
                               placeholder="Last Name" value="<?php echo $row['lname']; ?>">
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-1"></div>
            <div class="col-5 field-label-responsive font-weight-bold">
                <label for="email">EMAIL:</label>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <div class="input-group ">

                        <input type="text" name="nemail" class="form-control" id="email"
                               placeholder="you@example.com" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col-5 field-label-responsive font-weight-bold">
                <label for="address">ADDRESS:</label>
            </div>
            <div class="col-5">
                <div class="form-group has-danger">
                    <div class="input-group ">

                        <input type="text" name="naddress" class="form-control" id="address"
                               placeholder="address" value="<?php echo $row['address']; ?>">
                    </div>
                </div>
            </div>
</div>


<div class="row">
  <div class="col-1"></div>
            <div class="col-5 field-label-responsive font-weight-bold">
                <label for="city">CITY:</label>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" name="ncity" class="form-control" id="city"
                               placeholder="city" value="<?php echo $row['city']; ?>">
                    </div>
                </div>
            </div>
          </div>


          <div class="row">
            <div class="col-1"></div>
                <div class="col-5 field-label-responsive font-weight-bold">
                    <label for="zip">PIN:</label>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <div class="input-group ">

                            <input type="int" name="npin" class="form-control" id="zip"
                                   placeholder="Zip" value="<?php echo $row['pin']; ?>">
                        </div>
                    </div>
                </div>
              </div>



              <div class="row">
                <div class="col-1"></div>
                <div class="col-5 field-label-responsive font-weight-bold">
                    <label for="state">STATE:</label>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <div class="input-group ">

                            <input type="text" name="nstate" class="form-control" id="state"
                                   placeholder="State" value="<?php echo $row['state']; ?>">
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-1"></div>
            <div class="col-5 field-label-responsive font-weight-bold">
                <label for="number">PHONE:</label>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <div class="input-group ">

                        <input type="int" name="nnumber" class="form-control" id="snumber"
                               placeholder="Contact Number" value="<?php echo $row['number']; ?>" >
                    </div>
                </div>
            </div>
  </div>

</div>
	<INPUT TYPE="Submit" VALUE="Update Your Details" NAME="Submit" class="mx-auto mt-5">
	</div>
</div>
</form>
</div>
</body>
<!-- Footer -->
<div class="footer">
<div class=" text-light bg-dark" style="margin-bottom:0;  padding-bottom:10px; padding-top:20px;">

<?php include("footer.php") ?>

     </div></div>
  <!-- Footer -->
<?php }?>
