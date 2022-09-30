<?php

require_once('config.php');

error_reporting(E_ALL); 
ini_set('display_errors', 1);


$email=$_POST['email'];
$name=$_POST['name'];

$psw=$_POST['psw'];


$stmt = $cn->prepare('SELECT * FROM signup WHERE Email = ? ');
$stmt->bind_param('s', $email); 
$stmt->execute();  

 $result = $stmt->get_result(); // get the mysqli result
$user = $result->fetch_assoc(); // fetch data   





if($user>0)
{
         echo '<script>alert("Email already exists!")</script>'; 
              include("index.php");

    
}



else
{


    
    $stmt=$cn->prepare("INSERT INTO signup (Name,Email,Password) VALUES(?,?,?)");
	$stmt->bind_param("sss",  $name,$email, $psw);
    $stmt->execute();
 
     echo '<script>alert("Registration successfull!!")</script>'; 
     include("index.php");
}


?>
