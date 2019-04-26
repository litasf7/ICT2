<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="login.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<div class="container">
<?php include('navbar.php') ?>
	<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<h2 Style="margin-top:50px;text-align:center">Employees </h2>
		<img src="images/Employee.jpg" class="rounded-circle" alt="employee" width="200" height="200" style="margin-bottom: 20px">
		<ul class="nav nav-pills flex-column">
        <li class="nav-item" style="margin-bottom:20px">
          <a class="nav-link active" href="#">Employee 1</a>
        </li>
        <li class="nav-item" style="margin-bottom:20px">
          <a class="nav-link active" href="#">Employee 2</a>
        </li>
        <li class="nav-item" style="margin-bottom:20px">
          <a class="nav-link active" href="#">Employee 3</a>
        </li>
        <li class="nav-item" style="margin-bottom:20px">
          <a class="nav-link active" href="#">Employee 4</a>
        </li>
      </ul>
	  </div>
		<div class="col-sm-8" style="text-align: center">
			<h1 Style="margin-top:50px;text-align:center;float: inherit">Saloon 1</h1>
			<img src="images/Employee.jpg" class="responsive" style="max-width:100%; height: auto">
			<p><li>Address: 378 queens street, Brisbane, Queensland, Australia.</li>
			<li>Phone Number: 0738956456</li>
			<li>Email: Saloon1@gmail.com</li>
			<li>Opening hours: Mon-Fri:7am-6pm; Sat-Sun: 9am-5pm </li></p>
			
		</div>
	  </div>
		</div>
	</div>
	
</body>
</html>