<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Booking Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //font files -->
<!-- css files -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all">
<link href="css/wickedpicker.css" rel="stylesheet" type="text/css" media="all">        
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/modal.css" rel="stylesheet" type="text/css" media="all">
<!-- /css files -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- /js files -->		
</head>
<body>
<div class="header">
	<h1>Book your AndroidLand Package</h1>
</div>
<form  method="Post" id="form-booking">
        <div class="banner-top">
				<h2>Book Your Room Today</h2>
				<div class="banner-bottom">
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker" name="checkin" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Date</p>
						</div>
						<div class="bnr-right">
							<input class="date" id="datepicker1" name="checkout" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check In Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker1" class="timepicker form-control"><br>
						</div>
						
						<div class="clearfix"></div>
					</div>
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Check Out Time</p>
						</div>
						<div class="bnr-right time-pic">
							<input type="text" id="timepicker" name="timepicker2" class="timepicker form-control"><br>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Number of People</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="people">
								<option  class="rm" value="0">0</option>
								<option  class="rm" value="1">1</option>
								<option  class="rm" value="2">2</option>
								<option  class="rm" value="3">3</option>
								<option  class="rm" value="4">4</option>
								<option  class="rm" value="5">5</option>
								<option  class="rm" value="6">6</option>
								<option  class="rm" value="7">7</option>
								<option  class="rm" value="8">8</option>

							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="bnr-one">
						<div class="bnr-left">
							<p>Universes</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="universe">
								<option value="Select a type">Select a type</option>
								<option value="Roman Empire">Roman Empire</option>
								<option value="WW3">WW3</option>
								<option value="Super Hero">Super Hero</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="bnr-one">
						<div class="bnr-left">
							<p>Package number</p>
						</div>
						<div class="bnr-right">
							<select class="selection" name="package">
								<option  class="rm" value="1">1</option>
								<option  class="rm" value="2">2</option>
								<option  class="rm" value="3">3</option>
								</select>
								</div>
					<div class="bnr-btn">
						
							<input id='submit' type="submit" value="Book Now" />
						
					</div>
				</div>
				</form>

	<!---/End-date-piker---->
</div>
<div class="footer">
	<p>© 2017 AndroidLand</p>
</div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="Modalsuccess">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <h3>Booking done with success</h3>
	  <p class="universeName"></p>
    </div>
  </div>
</div><div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="Modalfailure">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <h3>booking with failure</h3>
	  <p class="failure">have you lost your Universe?</p>
    </div>
  </div>
</div>
				<!---start-date-piker---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
				$("#form-booking").submit(function(e){
					e.preventDefault;
					url="insert.php";
					var value = $('select[name="universe"] option:selected').val();
				$.ajax({
					type: "POST",
					url: url,
					data: $("#form-booking").serialize(), // serializes the form's elements.
					success: function(data)
					{
						console.log(data); // show response from the php script.
						if (data==='success'){
							$('.universeName').html("").append('welcome to the universe of '+value);
							$('#Modalsuccess').modal();
						} else {
							$('#Modalfailure').modal();
						}
					}
				});
					e.preventDefault;
					return false;
				});
			</script>
<!-- js for time-picker -->
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
	$('.timepicker').wickedpicker({twentyFour: false});
	$('.timepicker-two').wickedpicker({twentyFour: true});
</script>
<!-- /js for time-picker -->
</body>
</html>