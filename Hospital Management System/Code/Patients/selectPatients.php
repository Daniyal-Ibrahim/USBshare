<html>

<title>Data</title>
<style>
#all {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#all td, #all th {
  border: 1px solid #ddd;
  padding: 8px;
}

#all tr:nth-child(even){background-color: #f2f2f2;}

#all tr:hover {background-color: #ddd;}

#all th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #7FB3D5;
  color: white;
}
h1 {
 background: linear-gradient(to right, transparent, #A9CCE3);
  padding: 30px;
  
  font-family:verdana;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background:  #7FB3D5;
    border: none;
    border-radius: 5px;
}
</style>

</head>

<body>
<center><div class="input-group">	
    <a href="../../HTML%20Pages/AdminLogged.html"><button class="btn" type="submit" name="submit">Back To Home</a></button>
	
	</div></center>
<center><h1>ALL DATA OF PATIENTS</h1></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn =mysqli_connect($servername, $username, $password, $dbname);
$query="select p.PatientId,p.PatientName,p.Age,p.Gender,p.Sickness,pf.PhoneNo from patients as p join patientinfo as pf on p.PatientId=pf.PatientId;";
if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}
if($conn)
{
	//echo"connected to server "; 
	echo"<br>";
	$result=mysqli_query($conn,$query);
}

?>

<table id="all">
	<thead>
		<tr>
			<th>Patient Id</th>
			<th>Patient Name</th>
			<th>Age </th>
			<th>Gender</th>
			<th>Sickness</th>
			<th>PhoneNo</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['PatientId']; ?></td>
			<td><?php echo $row['PatientName']; ?></td>
			<td><?php echo $row['Age']; ?></td>
			<td><?php echo $row['Gender']; ?></td>
			
			<td><?php echo $row['Sickness']; ?></td>
			<td><?php echo $row['PhoneNo']; ?></td>
		<td>
				<div class="input-group">
				<a href="Patientsprocess.php?del=<?php echo $row['PatientId']; ?>">
<center><button class="btn">delete</button></center></div></a>
			</td>
			<td>
				<div class="input-group">
				<a href="patientupdateForm.php?update=<?php echo $row['PatientId']; ?>">
<center><button class="btn">update</button></center></div></a>
			</td>
		</tr>
	<?php } ?>
	
	</table>
</body>	
</html>