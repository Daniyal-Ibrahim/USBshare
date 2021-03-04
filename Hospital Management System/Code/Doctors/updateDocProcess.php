<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn =mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}

else{

	$DoctorId=$_POST['DoctorId'];
	$DoctorName=$_POST['DoctorName'];
	$Qualification=$_POST['Qualification'];
	$Experience=$_POST['Experience'];
	$PhoneNo=$_POST['PhoneNo'];
	
	mysqli_query($conn, "update doctors set DoctorName='$DoctorName',Qualification='$Qualification',Experience='$Experience' WHERE DoctorId='$DoctorId';");
	mysqli_query($conn, "update doctorinfo set PhoneNo='$PhoneNo' WHERE DoctorId='$DoctorId';");
	
	
	header('location: selectDoctor.php');
	
}
?>