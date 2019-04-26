<!doctype html>
<html>
<head>
<meta charset="UTF-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="styles.css" rel="stylesheet">
  <style>
  .carousel-inner img{
	  width:70%;
	  height:65%;
	  margin-left: 15%;
	  
	  }
  </style>


</head>

<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators" >
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="/images/image1.jpg" alt="Los Angeles" >
    </div>
    <div class="carousel-item">
      <img src="/images/image2.jpg" alt="Chicago" >
    </div>
    <div class="carousel-item">
      <img src="/images/image3.jpg" alt="New York" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev" style="background: #000000" >
    <span class="carousel-control-prev-icon" ></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="background:#000000">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

</body>
</html>