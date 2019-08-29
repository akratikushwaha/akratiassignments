<?php
//print_r($_POST);
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'kyc');
 	
 	//connection to database
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 	
 	//Error if connection not established
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	if(!empty($_POST))
	{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	
	
// Attempt insert query execution

$sql ="INSERT INTO log(name, phone, email, gender) VALUES ('".$name."', '".$phone."', '".$email."','".$gender."')";


	if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}	
	}
	else{
		echo "resubmit";
	}
?>
<html>
	<head>
		<title>Registration Form</title>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		
  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<style>

			.error{
				display: none;
			}		

			.error_show{
				color: red;
				
			}

			input.invalid{
				border: 2px solid red;
			}

			input.valid{
				border: 2px solid green;
			}

			.noerror {
				color : green;
			}

			.errormsg {
  				color: red;
			}	

			.showoutput {
				position: absolute;
				left: 50%;
				top: 1%;
			}

		</style>

	</head>
	<body bgcolor="skyblue" >
		<h1 style="color: purple; border: 2px solid blue; letter-spacing: 5px; 
		background-color:#E6E6FA; padding: 10px;" align="center">KYC ( Know Your Customer ) </h1>
		
		<div>
		<style type="text/css">
			h1{
				text-align: center;
			}

			#slides {
    			position: relative;
    			height: 250px;
    			list-style-type: none;
				width:100%;
			}

			.slide {
    			position: absolute;
    			left: 0%;
    			top: 5px;
    			width: 100%;
    			height: 100%;
    			font-size: 35px;
    			padding: 40px;
    			box-sizing: border-box;
    			color: #fff;
				background:black url(loading.gif) no-repeat 50% 50%;
			}

			.showing {
    			opacity: 1;
    			z-index: 2;
			}

			.slide:nth-of-type(1) {
    			background-image: url("i1.jpg");
			}

			.slide:nth-of-type(2) {
    			background-image: url("i2.png");
			}

			.slide:nth-of-type(3) {
    			background-image: url("i3.jpg");
			}

			

		</style>
		<ul id="slides">
    		<li class="slide showing"></li>
    		<li class="slide"></li>
    		<li class="slide"></li>
    		
		</ul>
		<button class="controls1" id="play">Play</button>
		<button class="controls2" id="pause">Pause</button>
		<button class="controls3" id="previous">Previous</button>
		<button class="controls4" id="next">Next</button>
		<script type="text/javascript">
			
			var slides = document.querySelectorAll('#slides .slide');
			var currentSlide = 0;
			var playing = true;
			var playButton = document.getElementById('play');
			var pauseButton = document.getElementById('pause');
			var next = document.getElementById('next');
			var previous = document.getElementById('previous');

			next.onclick = function() {
    			nextSlide();
			};

			previous.onclick = function() {
    			previousSlide();
			};

			play.onclick = function() {
				playSlideshow();
			}

			function pauseSlideshow() {
    			playing = false;
    			clearInterval(slideInterval);
			}

			function playSlideshow() {
    			playing = true;
    			slideInterval = setInterval(nextSlide,2000);
			}

			pauseButton.onclick = function() {
    			if(playing) {
    				pauseSlideshow();
  				} 
			}

			function nextSlide() {
    			goToSlide(currentSlide+1);
			}

			function previousSlide() {
    			goToSlide(currentSlide-1);
			}

			function goToSlide(n) {
    			slides[currentSlide].className = 'slide';
    			currentSlide = (n+slides.length)%slides.length;
    			slides[currentSlide].className = 'slide showing';
			}

		</script>
		
		
		
		</div>
		<div style="background-color:#E6E6FA" align="center"></br>
			<h3 style="float:right;"><a href="addmin.php">admin</a></h3>
		<h2 style="color:blue;" align="center">Registration form</h2></br></br></br>
	

		<form action="form1p.php" method="post" id="myform" onSubmit="return validate();">
	<input type="hidden" name="id" />
			<label>Name:</label>
			<input type="text" id="name" name="name" class="required"><br><br>
			<label id="errorname" class="errormsg"></label>
    		<label id="noerrorname" class="noerror"></label>

    		<br>
			<label>Email:</label>
			<input type="text" id="email" name="email" class="required"><br><br>
			<label id="erroremail" class="errormsg"></label>
    		<label id="noerroremail" class="noerror"></label>
			<!--<input type="text" id="country" name="country" value="india" class="required">-->

    		<br>
			<label>Phone:</label>
			<input type="phone" id="phone" name="phone" size="10" class="required"><br><br>
			<label id="errorphone" class="errormsg"></label>
    		<label id="noerrorphone" class="noerror"></label>

    		<br>
			<label>Gender:</label>
			<input type="radio" name="gender" value="male" id="gender">Male
			<input type="radio" name="gender" value="female" id="gender">Female<br><br>
			<input type="submit" value="Submit" id="btnsubmit">
		</form>

		<div id="dialog" title="Confirmation Dialog" style="visibility:hidden;">

  			<label> Is it your Email? </label>

  			<button id="yes">Yes</button> 
  			<button id="no">No</button>

		</div>

		

		<br>

		<!--<div class="showoutput">
			<label> </label>
  			<p><span id="display1"></span></p>
  			<p><span id="display2"></span></p>
  			<p><span id="display3"></span></p>
  			<p><span id="display4"></span></p>
  			
  		</div> -->
		<div style="position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: orange;
		color: white;
		text-align: center;"><footer>
  
		<p>Contact information:9996676373 
		<a href="#"><i class="fa fa-facebook-official"></i></a>
		<a href="#"><i class="fa fa-pinterest-p"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-flickr"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="mailto:kyc@webdunia.com">
			kycwebsite@gmail.com</a>.</p>
		</footer>
		</div>
		
		<script>

			//Name Validation
			$("#name").on("input", function() {

    			var input=$(this);
    			var reg=/^[a-zA-Z]{3,16}$/;
				var is_name=reg.test(input.val());

				//If name matches the regular expression then, displays valid else displays invalid
				if(is_name) {

					input.removeClass("invalid").addClass("valid");
					$('#errorname').hide();
        			$('#noerrorname').text("Valid Name");

				} else {

					input.removeClass("valid").addClass("invalid");
					$('#errorname').text("Invalid Name") ; 
				}

			});

			//Email Validation
			$('#email').on('input', function() {

    			var input=$(this);
				var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
				var is_email=reg.test(input.val());

				//If email matches the regular expression then, displays valid else invalid
				if(is_email){

        			input.removeClass("invalid").addClass("valid");
        			$('#erroremail').hide();
        			$('#noerroremail').text("valid email");

             	} else {
        
        			input.removeClass("valid").addClass("");
        			$('#erroremail').text("invalid email") ; 
       
     			}

     			//When switched to another input field, dialog box will appear to confirm email
  				$("#phone").focus(function() {

    				if(is_email) {

     					$("#dialog").css("visibility","visible");
    					$( "#dialog" ).dialog();

               		} else {

    					$( "#dialogerr" ).dialog();

      				}

  				});

			});

			//Phone Validation
			$('#phone').on('input', function() {

				var input=$(this);
				var reg = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
				var is_phone=reg.test(input.val());

				//If phone matches the regular expression then, displays valid else invalid
				if(is_phone){

        			input.removeClass("invalid").addClass("valid");
        			$('#errorphone').hide();
        			$('#noerrorphone').text("valid phone number");

             	} else {
        
        			input.removeClass("valid").addClass("");
        			$('#errorphone').text("invalid phone number") ; 
       
     			}

			});

			

            	//Yes button on confirmation dialog box
            	$("#yes").click(function(){

    				$("#phone").focus();
    				$(this).closest('.ui-dialog-content').dialog('close'); 

  				}); 

            	//No button on confirmation dialog box
  				$("#no").click(function(){

  					$('#myform #email').val('');
  					$(this).closest('.ui-dialog-content').dialog('close'); 

  				});

  				//Change the color of input text fields which are required and left empty
  		

			//Show all the values of form after submitting the form
			function showInput() { 

        		document.getElementById('display1').innerHTML = document.getElementById("name").value;
        		document.getElementById('display2').innerHTML = document.getElementById("email").value;
        		document.getElementById('display3').innerHTML = document.getElementById("phone").value;
        		document.getElementById('display4').innerHTML = $("input[name='gender']:checked").val();
        	
    		}

		</script>
	</body>
</html>