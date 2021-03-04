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
//Connect to the databasse

//Selects the database

/*
The Above code can be in a different file, then you can place include'filename.php'; instead.
*/

//Lets search the databse for the user name and password
//Choose some sort of password encryption, I choose sha256
//Password function (Not In all versions of MySQL).
$sql ="SELECT * FROM registration  
        WHERE username='$em' AND 
        passcode='$pass' 
        LIMIT 1;";
if(mysqli_select_db($db,"hospitals_database"))
{
	$result=mysqli_query($db,$sql);
	if($result->num_rows==1)
	{
		$_SESSION['username'] = $row['username'];
		header("Location: ../../HTML%20Pages/Logedin.html"); // Modify to go to the page you would like
	}
	else
	{
		header("Location: ../../HTML%20Pages/Home.html");
	}
}
?>