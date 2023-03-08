<?php
// db = connection SQL
$db = mysqli_connect('localhost', 'root', 'dnflwlq88','project');

session_start();


 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>
  
      <div class="content-wrap ">
      <section class="topdash">
      <img 
           class="profile-img column-narrow"
           
           src="https://cdn.glitch.global/9f26323b-3ea7-4786-8180-b1709971f27e/twitter-egg.jpg?v=1677037713485"
      >
     <h1>Hello, <?php 
     session_start();
     echo $_SESSION['log_user_name'] ?></h1>
      </section>
      </div>
  </header>   
  <main>
  </main>
  
<footer>
  <a href="logout.php">Logout</a>
</footer>
</body>
  
</html>
