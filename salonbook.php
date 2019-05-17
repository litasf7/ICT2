	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>


var prevLink = '<a class="prev" href="#">< < Prev</a> ';
var nextLink = '</a><a class="next" href="#">Next >></a>';
var navHTML = '<div class="prev-next">' + prevLink + nextLink + '</div>';
var FormData = [];
$(function() {
    // init
    $('#booking > div').hide().append(navHTML);
    $('#first-step .prev').remove();
    $('#last-step .next').remove();

  
    $('#first-step').show();

    $('a.next').click(function() {
        var whichStep = $(this).parent().parent().attr('id');

        if (whichStep == 'first-step') {

            // validate first-step
        }
        else if (whichStep == 'second-step') {

            // validate services
$('select').change(function()
                  {
                      var service = $(this).find('option:selected').text();
                      
                  });
		

            // validate third-step
            FormData[1] = $('#datepicker').val();
            if (!$('#datepicker').val()) {
                $("#errorMessage2").html('Please select a date!');
                return false;
            } else {
                $("#errorMessage2").html("");
            }
        }
        else if (whichStep == 'fourth-step') {
            // validate fourth-step
            FormData[2] = $('#amount2').val();
            //Finally...
            $('#mdata').html('Capacity: ' + FormData[0] + '<br>Booking Date: ' + FormData[1] + '<br>Grade: ' + FormData[2]);

            var paraData = "capacity=" + FormData[0] + "&date=" + FormData[1] + "&grade=" + FormData[2];
            alert(paraData);

        }
        else if (whichStep == 'last-step') {



        }

        $(this).parent().parent().hide(300).next().show(300);
    });

    $('a.prev').click(function() {
        $(this).parent().parent().hide(300).prev().show(300);
    });
});

// Service

SelectElement("services", valueToSelect)

function SelectElement(id, valueToSelect)
{    
    var element = document.getElementById(id);
    element.value = valueToSelect;
}
	
// datepicker
$(function() {
    $("#datepicker").datepicker({
        minDate: -0
    });
});

</script>


<form id="booking" method="post" action=""> 
<div id="first-step">
<h2>Let's Book an Appointment</h2>
<br>
</div>
 
<div id="second-step">

<h3>Select the Service</h3><br>
<?php 
	include("config.php");
	$services = $connection->query("SELECT * FROM services");
$row4 = $services -> fetch_assoc(); ?>
<select id="services" name="services">
<option value="">Choose an option</option>
<?php do { ?>
<option value="<?php echo $row4['serv_id'];?>"><?php echo $row4['serv_name']; ?></option>
<?php } while($row4 = $services -> fetch_assoc()) ?>
</select>
<input type="text" id="amount" style="border:0; color:#000; font: 16px Georgia, 'Times New Roman', Times, serif; padding-bottom: 10px;" readonly="readonly"/>
<div id="slider-range"></div>
<div id="errorMessage"></div>
<br>    
</div><!-- End Service -->
 
<div id="third-step">

<h3>Please select the date</h3><br>
<p>Date: <input type="text" id="datepicker" readonly="readonly">
<div id="errorMessage2"></div>
</p><br>  
</div><!-- end Select Date-->
    
<div id="fourth-step">

<h3>Please select the Timings</h3><br>
<input type="text" id="amount2" style="border:0;color:#000; font: 16px Georgia, 'Times New Roman', Times, serif; padding-bottom: 10px;" readonly="readonly"/>
<div id="slider"></div><br>
</div> <!-- end Timr -->
<div id="last-step">

<h3>Select an Employee</h3><br>
    <div id="mdata"></div><br>
    <input type="submit" value="Submit" /><br>
    <br>        
</div> <!-- end Employee -->
</form>