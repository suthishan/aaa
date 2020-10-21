<?php
$con=mysqli_connect("localhost","root","rootpass","amman");
date_default_timezone_set('Asia/Kolkata');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>