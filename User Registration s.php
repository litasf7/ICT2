<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/bootstrap.min.js"> </script>
<title>User Registration</title>
</head>

<body onLoad="run_first()">

<div class="container-fluid" style="background-image: url(images/bg.jpg);">
<?php include('navbar.php'); ?>
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
    <form class="form-horizontal" role="form" method="POST" action="action_page.php">
	<div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center">Register as a User</h2>
                <hr>
            </div>
        </div>
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
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success" style="background:#f4511e"> Register</button>
            </div>
        </div>
    </form>
	</div>

<br>
</div>
</div>
<?php include('footer.php') ?>
</body>
</html>