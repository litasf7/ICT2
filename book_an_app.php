   <?php 
				  include("config.php");?>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <script>$(document).ready(function(){
    $('.emp').click(function() {
        $('.emp').not(this).prop('checked', false);
    });
});</script>
          <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	
  } );
  </script>
      
       

	  
<form >
           <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="service">Services</label>
              <div class="col-lg-6">
               <?php 
				  include("config.php");
				  $services = $connection->query("SELECT * FROM services");
				  $row4 = $services -> fetch_assoc(); ?>
               <?php do { ?>
                <input type="checkbox" value="<?php echo $row4['serv_id'];?>" class="service" name="<?php echo $row4['serv_name'];?>" ><?php echo $row4['serv_name'];?></input>
                 <?php } while($row4 = $services -> fetch_assoc()) ?>
              </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
  </fieldset>
 
        
</div>

          <fieldset>
			<div id="date" class="form-group">
              <label class="col-lg-2 control-label" for="date">Date</label>
              <div class="col-lg-6">
               <input type="text" name="date" id="datepicker">
              </div>
            </div>
           
              <div class="col-lg-10 col-lg-offset-2"> 
                <button type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
       
 
          </fieldset>
     
      <script>

var date = $('#date').find('input[name="date"]').val();
		  console.log(date);
</script>
          <fieldset>
         
            <div class="form-group">
              <label class="col-lg-2 control-label" for="time">Time: </label>
              <div class="col-lg-6">
				  
              </div>
            </div>
 
            <div class="clearfix" style="height: 10px;clear: both;"></div>
 
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                
                <button type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>
 
          </fieldset>
              <fieldset>
         
            <div class="form-group">
              <label class="col-lg-2 control-label" for="time">Select an Employee </label>
                    <div class="col-lg-6">
               <?php 
				  include("config.php");
				  $emp = $connection->query("SELECT * FROM employee");
				  $row3 = $emp -> fetch_assoc(); ?>
               <?php do { ?>
                <input type="checkbox" value="<?php echo $row3['emp_id'];?>"  class="emp" name="<?php echo $row3['fname'];?>" ><?php echo $row3['fname'];?></input>
                 <?php } while($row3 = $emp -> fetch_assoc()) ?>
              </div>
            </div>
 
            <div class="clearfix" style="height: 10px;clear: both;"></div>
 
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                
                <button type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>
 
          </fieldset>
          <input type="submit" value="Book">
</form>