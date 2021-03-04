<html>
<head>

<title>Update</title>
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
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #273746;
    border: none;
    border-radius: 5px;
}
</style>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$Id = $_GET['update'];
$conn =mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['update'])) {
	
	$id = $_GET['update'];
	 $id;
	$result=mysqli_query($conn, "select p.PatientId,p.PatientName,p.Age,p.Gender,p.Sickness,pf.PhoneNo from patients as p join patientinfo as pf on p.PatientId=pf.PatientId");
	while ($row = mysqli_fetch_array($result)) { 
		      $PatientId=$row['PatientId']; 
			 $PatientName= $row['PatientName']; 
			 $Age= $row['Age']; 
			  $Gender=$row['Gender']; 
			 $Sickness= $row['Sickness']; 
	          $PhoneNo= $row['PhoneNo']; 
}
}

?>
<center><h1>Update From The Exisiting Patients</h1></center>
<form method="post" action="updatePatientsProcess.php">
<table id="all" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Sickness</th>
			<th>PhoneNo</th>
			<th colspan="2">  Action</th>
		</tr>
	</thead>

<tr>
<td>
<input type="text" name="PatientId" value="<?php echo $PatientId; ?>"> 
</td>

<td>
<input type="text" name="PatientName" value="<?php echo $PatientName; ?>">
</td>

<td>
<input type="text" name="Age" value="<?php echo $Age; ?>">
</td>

<td>
<input type="text" name="Gender" value="<?php echo $Gender; ?>">
</td>

<td>
<input type="text" name="Sickness" value="<?php echo $Sickness; ?>">
</td>

<td>
<input type="text" name="PhoneNo" value="<?php echo $PhoneNo; ?>">
</td>

<td>
<div class="input-group">
<button class="btn" type="submit"  name="save ">Update</button>
</div>
</td>
</tr>
</form>


</body>
</html>