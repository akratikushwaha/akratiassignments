<?php

 	//connection to database
	//$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn=mysqli_connect("localhost","root","","kyc");

if($conn === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
//$echo = ""; 
 if(isset($_POST['submit']))
 {
 
 if(!empty($_POST)){

   $name=$_POST['name'];
   
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $country=$_POST['country'];
   $state=$_POST['state'];
   $city=$_POST['city'];
   $address=$_POST['address'];
   $pincode=$_POST['pincode'];

   $query="UPDATE log SET name='".$name."', phone=".$phone.", email='".$email."', gender='".$gender."', country='".$country."', state='".$state."', city='".$city."', pincode=".$pincode.", address='".$address."' WHERE id=1";

// execute query
    $run=mysqli_query($conn,$query);
   
   
   if($run)
   {
     echo "Data updated Sucessfully";
   }
  else
  {
   echo "Error".mysqli_error($conn);
  }
 }
 else
  {
   echo "Error";
  }
   
 } 
 ?>
 <div style="background-color:#E6E6FA" align="center"></br>
 <h2> LOGIN DETAIL</h2>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<link rel="stylesheet" href="form.css" type="text/css">
<div " align="center"; class="body-content">
  <div class="module">

<form action="logdetail.php" method="POST" id="first_form" onSubmit="return validate();">
  <div class="container">
    
   <body>     

   <input type="hidden" name="size" value="1000000">
  <div>
   <input type="file" name="image">
  </div>

  <div>
    <label for="name"> Name:</label>
    <input type="text" id="name" name="name" required></input>
  </div>
  <div>
    <label for="phone">phone:</label>
    <input type="text" maxlength="10" id="phone" name="phone" required></input>
  </div>
 <div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required></input>
  </div>
  <div>
  <label>Gender</label><br>
  <input type="radio" name="gender" value="male" required> Male<br>
  <input type="radio" name="gender" value="female" required> Female<br>
  <input type="radio" name="gender" value="other" required> Other
 </div>
  <div>
    <label for="country" required>Country:</label>
    
  <div class="row">

<select name="country">
<option>Select</option>
<option> India</option>
</select> 
<div class="error" id="countryErr"></div>
</div>
 
</select>
  </div>
  <div>
    <label for="state" required>State:</label>
   <select name="state">  
  <option value="delhi">delhi</option>
  <option value="mp">MP</option>
  <option value=up">UP</option>

</select>
  </div>
   <div>
    <label for="city" required>City</label>
    <select name="city">   
  <option value="delhi">delhi</option>
  <option value="indore">INDORE</option>
  <option value="luckhnow">LUCKHNOW</option>

</select>
  </div>
 <div>
    <label for="pincode">Pincode:</label>
    <input type="pincode" maxlength="6" id="pincode" name="pincode" required></input>
  </div>
  <div>
  <label><b>Address:</b></label><br> 
       <textarea name="address" rows="10" cols="30">Please enter address</textarea>
       <br>
     </div>
  
  <div>
    <input name="submit" type="submit" value="Submit" /><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  </div>
  </div>
</form>
</body>
<script type="text/javascript">
  $(document).ready(function() {

  $("#first_form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});

</script>
