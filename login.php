
<?php

session_start();


if(isset($_SESSION['uname']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
{
    header("Location:index.php"); 
  
 }

require_once("config.php");

error_reporting(E_ALL); 
ini_set('display_errors', 1);

$uname=$_POST['uname'];

$psw=$_POST['psw'];





//var_dump($_POST);

$stmt = $cn->prepare("SELECT  Email,Password FROM signup WHERE Email = '$uname' ");

//$stmt->bind_param('s', $uname); 
$stmt->execute();  




$stmt->bind_result( $p,$n);


    while ($stmt->fetch()) 
    {
		
    }

if($p == $uname AND $n==$psw)
			{
			    
			 
			   
				   
				   $_SESSION['uname']= $uname;  // Initializing Session with value of PHP Variable
                  
                               header('location: index.php'); 

                 
			  
				       
			   
			}
			else
			{
			    				   echo '<script>alert("Phone or Password Wrong!!")</script>';
                                     				         include("index.php");

			}







    


?>




