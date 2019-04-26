<!doctype html>
<html><head>
<meta charset="UTF-8">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/bootstrap.min.js"> </script>
<link href="styles.css" rel="stylesheet">
<title>Contact Us</title>


  <body>
   
<div class="container-fluid" style="background-image: url(images/bg.jpg);">
 <?php include('navbar.php');?>
<div style=" font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif ; font-style: bold ; font-size: 16px; color: white;">
    
    <h2 class="text-center" style="font-size:34px;">GET IN TOUCH</h2> 
    <hr>
    <div id="contact" class="container-fluid bg-grey">
 
  <div class="row">
    <div class="col-sm-4">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Brisbane, Australia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> bandofbarbers@gmail.com</p>
    </div>
    
    <div class="col-sm-7 slideanim">
   
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" style="background-color: #f4511e">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
<!-- Image of location/map -->
<img src="images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">


    <?php include('footer.php'); ?>
</body>

  
</html>
