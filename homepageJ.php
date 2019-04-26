<!DOCTYPE html>
<html lang="en">
<head>
  <title>bandofbarbers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body >

  <div class="container-fluid" style="background-image: url(images/bg.jpg); background-size: cover;
  background-repeat: no-repeat;
  height: 100%;">
<?php include("nav.php")?>

<div class="container" style="margin-top:30px; margin-left:100px;margin-right:100px;">
  <div class="row">
    <div class="col-sm-10 " style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white; ";>
      <?php include('carousel.php'); ?>
      <br>
  </div>
  <div class="col-sm-2" style=" margin-right: 0px;font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
    <h3>Whats New?</h3>
    <br>
    <img src="images/salon1.jpg" alt="Nature" class="responsive" width="300" height="300">
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>Blog</h3>
    <p>Write-ups by proffesionals</p>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link" href="http://www.myhaircare.com.au/blog/protect-seasonal-shedding-breakage/">Protect your Strands form seasonal breakage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.luxyhair.com/blogs/hair-blog/hairstyle-mistakes">How to undo hairstyling mistakes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <hr class="d-sm-none">
  </div>
</div>
</div>
<br><br>
<div class="container">
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
						<div class="row slideanim">
<div class="col-sm-4 col-xs-12">
<div class="card text-center">
<div class="card-header">
<h1><button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-user"></span> User
</button></h1>
</div>
<div class="card-body">
<img src="images/salon1.jpg" alt="Card image" style="width:100%">
</div>
<div class="card-footer">

<a href="User Login.php"<button class="btn btn-lg" style="margin: 7px;">Sign In</button></a><a href="User Registration.php"<button class="btn btn-lg" style="margin: 7px">Sign Up</button></a>

</div>
</div>
</div>
<div class="col-sm-4 col-xs-12">
<div class="card  text-center">
<div class="card-header">
<h1><button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-user"></span> Membership
</button></h1>
</div>
<div class="card-body">
<img src="images/salon6.jpg" alt="Card image" style="width:100%">
</div>
<div class="card-footer">
<a href="Salon Login.php"<button class="btn btn-lg" style="margin: 7px;">Sign In</button></a><a href="Salon Registration.php"<button class="btn btn-lg" style="margin: 7px">Sign Up</button></a>
</div>
</div>
</div>
<div class="col-sm-4 col-xs-12">
<div class="card text-center">
<div class="card-header">
<h1><button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-gift"></span> Employee
</button></h1>
</div>
<div class="card-body">
<img src="images/salon3.jpg" alt="Card image" style="width:100%">
</div>
<div class="card-footer">
<a href="Employee Login.php"<button class="btn btn-lg" style="margin: 7px;">Sign In</button></a><a href="User Registration.php"<button class="btn btn-lg" style="margin: 7px">Sign Up</button></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</div>
</body>
</html>
