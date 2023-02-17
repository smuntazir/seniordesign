<?php

include("senior_database_connect.php"); 


if (isset($_POST['sign_up'])) {
 
    if((isset($_POST['user_id'])) && (isset($_POST['user_pass']))) {
    
    $user_id = mysqli_real_escape_string($db,$_POST["user_id"]);
    $user_pass= mysqli_real_escape_string($db, $_POST["user_pass"]);
    
    $pwd_error = "/^(?=.*[a-z])(?=.*\d)(?=.*[`~!@#$%^&*|\\\'\";:\.\,\/?=+\-_()<>{}])[a-z\d`~!@#$%^&*|\\\'\";:\.\,\/?=+\-_(){}<>]{8,}$/m";
    $sql_injection = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
        
        if (empty($user_id)) {
          
            header("location: sign_up.php?error=you must put user name");
        } 
        else {
          $user_pass = password_hash($user_pass, PASSWORD_DEFAULT);
    
    
          $sql = "INSERT INTO `login_info`(`user_id`, `user_pass`) VALUES ('$user_id','$user_pass')";
          $result = mysqli_query($db, $sql);
          if ($result) {
            echo "User information add in database";
          } else {
            echo "FAIL to add in database";
    
          }
        }
      }
    }




?>



<!DOCTYPE html>
<link href="signup.css" rel="stylesheet" type="text/css" /> 
<script type="text/javascript" src="signup.js"></script>
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="sign_up.php" class="form" id="form1" method="post">
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="User ID: " class="input" name="user_id" id="user_id"  for="user_id"/>
			<input type="text" placeholder="Password: " class="input" name="user_pass" id="user_pass" for="user_pass"/>
			<button class="btn" name="sign_up">Sign Up</button>
		</form>
        <div style="border:2px solid purple; padding:15px;width:40%;color:red;text-align:center;" name="error">
        <?php echo $_GET['error']; ?> 
           
        </div>
	</div>

	<!-- Sign In -->


	<!-- Overlay -->

</div>
</html>
