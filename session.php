<?php

// Starting the session, to use and 
// store data in session variable 
session_start(); 


     
  



// If the session variable is empty, this 
// means the user is yet to login 
// User will be sent to 'login.php' page 
// to allow the user to login 
if (!isset($_SESSION['uname'])) { 
	$_SESSION['msg'] = "You have to log in first"; 
//	header('location: index.php'); 
	
} 

?> 

