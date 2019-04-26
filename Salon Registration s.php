<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/bootstrap.min.js"> </script>
<title>Salon Registration</title>
</head>

<body onLoad="run_first()">

<div class="container-fluid" style="background-image: url(images/bg.jpg);">
<?php include('navbar.php'); ?>
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
    <form class="form-horizontal" role="form" method="POST" action="action_page.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 style="text-align: center">Register a Salon</h2>
                <hr>
            </div>
        </div>
		<div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="simage">Salon Image</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="file" name="fileToUpload" id="fileToUpload">
						<input type="submit" value="upload" id="image" name="submit" onClick="image_upload_action.php">
						
						
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="sname">Salon Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="sname" class="form-control" id="sname"
                               placeholder="Salon Name" required autofocus>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="lname">Owner Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="oname" class="form-control" id="oname"
                               placeholder="Owner Name" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Salon E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="semail" class="form-control" id="semail"
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
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="password" name="password" class="form-control"
                               id="password" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="address">Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="address" class="form-control" id="address"
                               placeholder="1234 Main St" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="city">City</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="city" class="form-control" id="city"
                               placeholder="city" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="zip">Zip Code</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="int" name="zip" class="form-control" id="zip"
                               placeholder="Zip" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="state">State</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="text" name="state" class="form-control" id="state"
                               placeholder="State" required>
                    </div>
                </div>
            </div>

        </div>
            <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="snumber">Store Contact Number</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                        <input type="int" name="snumber" class="form-control" id="snumber"
                               placeholder="Store Contact Number" required autofocus>
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