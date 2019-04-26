<?php 
session_start(); 
$user_check = $_SESSION['email'];
if(!isset($_SESSION['email']))
{
    header('Location: salonLogin.php');
}
else{
	
		//make the database connection
		$connection = new mysqli("localhost", "root", "root", "ictatjcu_bandofbarbers");
		//$user_check = $_SESSION['email'];
   
    	//make a query to check if a valid user
    	$sql = "select * from salon where email='$user_check'";
    
    	$result = $connection -> query($sql);
        
    
		if ($result -> num_rows == 1) {
			$row = $result -> fetch_assoc();
        	$salon_id = $row['salon_id'];
    		$employee = $connection -> query("select * from employee where salon_id = '$salon_id' ");
    
        $row2 = $employee -> fetch_assoc();
        
		}
			
}
?>  




<html>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    function transfer_id(){
        var emp_id = $('.btn').attr('data-id');
        
            
            $.ajax({
                type: "post", url:"text.php", data:{
                    emp_id:id
                },
                success: function(data){
                    alert(data);
                    $("#emp").html(data);
                }
            })
        }
        
        

    
    </script>
<?php include("nav.php")?>
<body> 
<div class="container text-center" >   
<h1 class="text-info" style="margin-top:40px">Welcome &nbsp; <?php echo $row['oname']?> </h1><br>  
    
    <div class="row" style="margin-top:50px">
    <div class="col-sm-4">
         <h5><b> Employees </b></h5><hr class="bg-info">
<?php do { ?> 
        
       
    
       <ul class="nav-link">
           
           <button onclick="transfer_id();" class="btn btn-dark " data-id="<?php echo $row2['emp_id']; ?>"  data-toggle="modal" style=" width:70%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; float:inherit" ><?php echo $row2['fname']; ?></button>
      </ul>
        <div id="emp"></div>
        <div class="modal" id="empSection">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
      
       <?php } while($row2 = $employee -> fetch_assoc()) ?>
        </div>
   
    

<div class="col-sm-8">   
<div class="card border-info" style="width:70%; margin-left:15%; padding:5%; margin-top:40px">
    <p>Please generate a code and give it to new employee. </p>
	<h3>Add an Employee</h3>
	<form action="emp_code.php" method=post style="margin-top:20px"> 
        
        <input type="text" name="emp_code" placeholder="Employee Code" />
		<input type="submit" value="Generate" name= "code" style="margin-top:10px" /> 
	</form>
</div>
</div>
    </div></div>


</body> <br><br><br><br>
    <!-- Footer -->
 <div class="footer">
<div class="jumbotron text-center bg-info" style="margin-bottom:0; padding-top:40px; padding-bottom:10px;">
  
<?php include("footer.php")?>
  
     </div>
     </div>
  <!-- Footer --> 
</html>  
