<?php

$cn= mysqli_connect("localhost","u850106724_traveller","Journey12","u850106724_travel");
if (!$cn) 
  die("Connection failed: " . mysqli_connect_error());

mysqli_select_db($cn,"u850106724_travel");

?>