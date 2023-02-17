<?php


include("senior_database_connect.php");

$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$gender= $_POST['gender'];
if( (isset($_POST['first_name'])) && (isset($_POST['last_name'])))
{

    $sql = "INSERT INTO registration (firstname, lastname, address, city, zipcode, email, phone, gender) VALUES ('$first_name','$last_name','$address','$city','$zipcode','$email','$phone', '$gender')";

    $result = mysqli_query($db, $sql);
    
      
      if($result){
        echo"<div class='form'
            >
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to go back <a href='index.html'>home</a></p>";
      }
      else{
      echo "Connection Error: " .mysqli_connect_error();
      }
  }

?>


<!DOCTYPE html>
<html>
 <link href="newstyle.css" rel="stylesheet" type="text/css" />

  <head>
    <title>Form Validation</title>
  </head>
  <body>
    <div class="main">
      <h1>Teacher Sign Up v.4 </h1>
      <div class="form1">
        <!--	Registration Form<br>!-->
        <form action="" method="post">
          <input type="text" id="req1" placeholder="First Name" name="first_name"><br /><br />
          <input type="text" id="req2" placeholder="Last Name" name="last_name"><br /><br />
          <input
            type="text" id="req3" placeholder="Email address" name="email"><br /><br />
          <input type="text" id="req4" placeholder="Street Address" name="address"><br /><br />
          <input type="text" id="req5" placeholder="City" name="city"><br /><br />
          <input type="number" id="req6" placeholder="Zip Code" name="zipcode"><br /><br />
          <input
            type="text"
            id="req7"
            placeholder="Contact number"
            name="phone"/><br /><br />

          Gender:
          <select id="selection" name="gender">
            <option>Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
          <br /><br />
          
          
          <button type="submit" name="submit">Save</button>
          
          
       
          
<!--
          <input
            type="submit"
            value="Submit"
            name="submit"
            onclick="emailValidate(document.getElementById('req3'),'Invalid Email id.'), Selection(document.getElementById('selection'),'Please select gender')" 
          /> -->
       
          
        </form>
        <form>
        <input class = "submit"
            type="home"
            value="Go to Home"
             onclick= "location.href='index.html'"
    
          />
        </form>
      </div>
    </div>
  </body>
</html>
