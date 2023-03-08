<?php
$db = mysqli_connect('localhost', 'root', 'dnflwlq88','project');

if( isset($_POST['submit'])){
	$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$city = mysqli_real_escape_string($db,$_POST['city']);
	$zipcode = mysqli_real_escape_string($db,$_POST['zipcode']);

	if((isset($_POST['first_name'])) && (isset($_POST['last_name'])) && (isset($_POST['email'])) && (isset($_POST['address'])) && (isset($_POST['address'])) && (isset($_POST['city'])) && (isset($_POST['zipcode'])))
{
  
    $sql = "INSERT INTO registration (firstname, lastname, address, city, zipcode, email, phone,gender) VALUES ('$first_name', '$last_name', '$address', '$city', '$zipcode', '$email', '$phone')";

    $result = mysqli_query($db, $sql);
      
      if($result){
        echo "SUCCESSFULLY information store in database";
      }
      else{
      echo "Fail to add information: " .mysqli_connect_error();
      }

    
    
  }
}

?>
<!DOCTYPE html>
<html>
<link href="signup.css" rel="stylesheet" type="text/css" /> 
<script type="text/javascript" src="signup.js"></script>
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="#" class="form" id="form1">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="First Name " class="input" name="first_name"/>
			<input type="text" placeholder="Last Name" class="input" name="last_name" />
			<input type="email" placeholder="Email Address" class="input" name="email"/>
      <input type="text" placeholder="Street Address" class="input" name="address"/>
      <input type="text" placeholder="City" class="input" name="city"/>
      <input type="text" placeholder="Zip Code" class="input" name="zipcode"/>
			<button class="btn" name="submit">Sign Up</button>
		</form>
	</div>

	<!-- Sign In -->


	<!-- Overlay -->

</div>
</html>