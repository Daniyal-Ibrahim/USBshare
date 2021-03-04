<html>
<head>
<title>Doctor Insert</title>
    <link rel="stylesheet" href="../../styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br>
<div class="bg-img">
<form method="post" action="../Doctors/doctorprocess.php" class="container">
    <div>
        <center> <b><label>DOCTOR INFORMATION </label></b> </center>
    </div>
    <br>
<label>Doctor ID</label>
<input type="text" placeholder="Enter Doctor Id" name="DoctorId">

<label>Doctor Name</label>
<input type="text" placeholder="Enter Doctor Name" name="DoctorName">

<label>Qulalification</label>
<input type="text" placeholder="Enter Qualification" name="Qualification">

<label>Experience</label>
<input type="text" placeholder="Enter Experience" name="Experience">

<label>PhoneNo</label>
<input type="text" placeholder="Enter PhoneNo" name="PhoneNo">
    <div class="input-group">
        <button class="btn" type="submit" name="camper" formaction="../Doctors/doctorprocess.php">Save</button>
        <button class="btn" type="submit" name="camper" formaction="../../HTML%20Pages/AdminLogged.html">Back</button>
    </div>
<br>
<br>
</body>
</form>
</body>
</html>
