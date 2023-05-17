



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
