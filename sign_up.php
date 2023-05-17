<?php

$db = mysqli_connect('testdata2-instance-1.crxvoye8t6bs.us-west-1.rds.amazonaws.com', 'admin', 'password','project-2');



if (isset($_POST['login']))  /*$_POST['JS Name="" "]*/

{
    if ((isset($_POST['log_user_name'])) && (isset($_POST['log_password']))) {
      $log_user_name = mysqli_real_escape_string($db, $_POST["log_user_name"]);
      $log_password= mysqli_real_escape_string($db, $_POST["log_password"]);
      $sql_injection = "/[`~!@#$%^&*|\\\'\";:\/?^=^+_()<>]/";
      
      if (empty($log_user_name)) {
        header("location: sign_in.php?error= User name is empty");
  
      } elseif ((preg_match($sql_injection, $log_user_name))) {
        header("location: sign_in.php?error=User Name Cannot use Special Characters");
      } else {
        $log_user_check = "SELECT * FROM `login_info` WHERE `user_id` = '$log_user_name'";
        $result1 = mysqli_query($db, $log_user_check);
  
        if (mysqli_num_rows($result1) === 1) {
  
          $check = mysqli_fetch_assoc($result1);
          $hash_password = $check['user_pass'];
          $match = password_verify($log_password, $hash_password);
          
  
          if($match) {
            session_start();
            $_SESSION['log_user_name'] = $check['user_id'];
            
  
            header("location: 123.php"); /* This line goes to dashboard.html; destination  */
            echo "Session user Name: ".$_SESSION['log_user_name']."<br/>";
  
          } 
          else {
            header("location: sign_in.php?error=Password Does Not Match");
  
          }
          echo "0000000000000000000"; //error start here
        } else{
          header("location:sign_in.php?error=User is not Exist");
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
