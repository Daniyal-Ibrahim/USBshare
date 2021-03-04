<?php 
$em=$_POST['username'];
$pass=$_POST['passcode']; 
session_start();
$_SESSION['error']="Invalid username or password";
    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "hospitals_database";    //Database Name 
     
    $db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase); 

    $sql ="SELECT * FROM patientlogin  
        WHERE username='$em' AND 
        passcode='$pass' 
        LIMIT 1;"; 
    if(mysqli_select_db($db,"hospitals_database"))
	{		
		$result=mysqli_query($db,$sql);
		if($result->num_rows==1)
		{
			$_SESSION['username'] = $row['username'];
        header("Location: ../../HTML Pages/UserLogged.html"); // Modify to go to the page you would like
		}
		else
{
	header("Location: ../Login/Login.php");
}
	}	 
?> 