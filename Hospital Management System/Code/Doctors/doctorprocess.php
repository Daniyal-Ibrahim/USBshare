<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['DoctorName'])) {
$DoctorName=$_POST["DoctorName"];
$DoctorId=$_POST["DoctorId"];
$Qualification=$_POST["Qualification"];
$Experience=$_POST["Experience"];
$PhoneNo=$_POST["PhoneNo"];


$query="INSERT INTO `doctors`(`DoctorId`, `DoctorName`, `Qualification`, `Experience`) VALUES ('$DoctorId','$DoctorName','$Qualification','$Experience')";
$query1="INSERT INTO `doctorinfo`(`DoctorId`, `PhoneNo`) VALUES ('$DoctorId','$PhoneNo')";
$conn=mysqli_connect("localhost","root","");
if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}
if($conn)
{
	
	if(mysqli_select_db($conn,"hospitals_database"))
	{
		
		$result=mysqli_query($conn,$query);
		$result1=mysqli_query($conn,$query1);
	}
}
 header('location: selectDoctor.php');

}
if (isset($_GET['del'])) {
	
	$id = $_GET['del'];
	echo $id;
	mysqli_query($conn, "DELETE FROM doctorinfo WHERE DoctorId=$id");
	mysqli_query($conn, "DELETE FROM doctors WHERE DoctorId=$id");
	
	
	header('location: selectDoctor.php');
}


?>
