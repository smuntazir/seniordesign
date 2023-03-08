<?php


// Create connection
$db = mysqli_connect('localhost', 'root', 'dnflwlq88','project');

// Check connection
if (!$db) {
  echo "Connection failed: " . mysqli_connect_error();
} else {
    echo "----------------Connected successfully!--------------";
}
?>