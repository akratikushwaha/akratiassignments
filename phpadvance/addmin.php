<?php
if(isset($_POST['submit'])){
     $con=mysqli_connect("localhost", "root", "", "kyc");
    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }
//echo "SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]'";

    $query=mysqli_query($con,"SELECT * FROM admin WHERE name='$_POST[name]' && password='$_POST[password]'");
    
   
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        header("location: panel.php");
        }
    else
    {
        echo "Invalid username or password";
        }   

    mysqli_close($con);
  }
   
    ?>

<html>
<head>
    <title>admin Form</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		
  		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
 	

		<h2>login</h2>

		<form action="panel.php" method="post" id="myform">

			<label>Name:</label>
			<input type="text" id="name" name="name" class="required"><br><br>
			<label id="errorname" class="errormsg"></label>
    		<label id="noerrorname" class="noerror"></label>

             <br>
			<label>Password:</label>
			<input type="password" id="password" name="password" class="required"><br><br>
			<label id="errorpassword" class="errormsg"></label>
    		<label id="noerrorpassword" class="noerror"></label>
			
                    <!--login button-->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login" name="check">
                    </div>

                   <!-- <p>Don't have an account? <a href="form1p.html">register up now</a>.</p>-->

                </form>
            </div>
        </div>
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
			
			//password Validation
			$("#name").on("input", function() {

    			var input=$(this);
    			var reg=/"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/;
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
			</script>
</body>
</html>
