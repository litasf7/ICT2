<!doctype html>
<html>
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="login.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
<title>Time Slots</title>
</head>
<body onLoad="run_first()">

<div class="container-fluid" style="background-image: url(images/bg.jpg);">
<?php include('navbar.php'); ?>
<div class="container" style="text-align: center">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
	<h2 style="text-align: center;margin-top:30px">Employee Details</h2>
                <hr>
			<img src="images/Employee.jpg" class="rounded-circle" alt="employee" width="200" height="200" style="margin-bottom: 20px">
	<form class="form-horizontal" role="form" method="POST" action="action_page.php">
	
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="Fname">First Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="fname" class="form-control" id="Fname"
                               placeholder="First Name" required autofocus>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="lname">Last Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="lname" class="form-control" id="lname"
                               placeholder="Last Name" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="appointment">Timeslots</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <button style="margin-right: 20px">8am-9am</button><button style="margin-right: 20px">9am-10am</button><button>10am-11am</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success" style="background:#f4511e"> Book Appointment</button>
            </div>
        </div>
		<br>
    </form>
 
</div>
</div>
	
	</div>
	</div>
	</div>
</body>
</html>