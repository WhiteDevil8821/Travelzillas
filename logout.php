

<?
// Logout button will destroy the session, and 
// will unset the session variables 
// User will be headed to 'login.php' 
// after loggin out 


session_start();


	session_destroy(); 
	unset($_SESSION['name']); 
	header("location: index.php"); 
	


?>