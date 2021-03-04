<html>
<head>
    <link rel="stylesheet" href="../../styles.css">
    <title>Doctor Data</title>
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
    background: #5DADE2;
    border: none;
    border-radius: 5px;
}
h1 {
 background: linear-gradient(to right, transparent, #A9CCE3);
  padding: 30px;
  
  font-family:verdana;
}
</style>

</head>

<body>
<center><div class="input-group">	
    <a href="../../HTML%20Pages/UserLogged.html"><button class="btn" type="submit" name="submit">Back to home</a></button>
	</div></center>
<center><h1>ALL DATA OF DOCTORS</h1></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn =mysqli_connect($servername, $username, $password, $dbname);
$query="select d.DoctorId,d.DoctorName,d.Qualification,d.Experience,df.PhoneNo from doctors as d join doctorinfo as df on d.DoctorId=df.DoctorId;";
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
<table id="all" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Qualification</th>
			<th>Experience</th>
			<th>PhoneNo</th>
			<th colspan="2"></th>
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['DoctorId']; ?></td>
			<td><?php echo $row['DoctorName']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
			<td><?php echo $row['Experience']; ?></td>
			<td><?php echo $row['PhoneNo']; ?></td>
		</tr>
	<?php } ?>
	
	</table>
</body>	
</html>