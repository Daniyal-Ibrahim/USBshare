<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['PatientName'])) {
$PatientName=$_POST["PatientName"];
$PatientId=$_POST["PatientId"];
$Age=$_POST["Age"];
$Gender=$_POST["Gender"];
$Sickness=$_POST["Sickness"];
$PhoneNo=$_POST["PhoneNo"];

$query="INSERT INTO `patients`(`PatientId`, `PatientName`, `Age`, `Gender`, `Sickness`) VALUES ('$PatientId','$PatientName','$Age','$Gender','$Sickness')";
$query1="INSERT INTO `patientinfo`(`PatientId`, `PhoneNo`) VALUES ('$PatientId','$PhoneNo')";
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
		$result=mysqli_query($conn,$query1);
	}
}
 header('location: ../Patients/selectPatients.php');

}
if (isset($_GET['del'])) {
	
	$id = $_GET['del'];
	echo $id;
	mysqli_query($conn, "DELETE FROM patientinfo WHERE PatientId=$id");
	mysqli_query($conn, "DELETE FROM patients WHERE PatientId=$id");
	
	header('location: ../Patients/selectPatients.php');
}


?>
