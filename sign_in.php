<?php

include("senior_database_connect.php");



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
           
            header("location: index.html"); /* This line goes to dashboard.html; destination  */
           

          
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
<html>

<div style="border:2px solid purple; padding:15px;width:40%;color:red;text-align:center;" name="error">
          <?php echo $_GET['error']; ?> 
        </div>
<body>

<div>
<p style="color:cornflowerblue;">If you are User, Please login here</p>


<form class="email" action="sign_in.php" method="post">  <!--If ERROR, Please check "ACTION"-->
    <label style="color:black;" for="log_user_name">User Name : </label>
    <input type="text" id="log_user_name" name="log_user_name">
<br>

<label style="color:black;" for="password">Password : </label>
<input type="text" id="passwd" name="log_password"><br><br>
<button type="submit" action="" name="login">Log In</button>

</form>  
</div>
</body>

</html>
