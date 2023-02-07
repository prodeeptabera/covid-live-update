<?php
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'covid';
  // Create connection
    $con = mysqli_connect($server, $user, $password, $db);
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error()); 
    }
?>