<?php


// Create connection
$db = mysqli_connect('testdata1.cluster-crxvoye8t6bs.us-west-1.rds.amazonaws.com', 'admin', 'password','project');

// Check connection
if (!$db) {
  echo "Connection failed: " . mysqli_connect_error();
} else {

}
?>
