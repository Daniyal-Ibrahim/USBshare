<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nurse Insert</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body>
<div class="bg-img"><form method="post" action="../Nurse/nurseProcess.php" class="container">
        <div>
            <center> <b><label>NURSE INFORMATION </label></b> </center>
        </div>
        <br>
<label>Nurse ID</label>
<input type="text" name="NurseId">

<label>Nurse Name</label>
<input type="text" name="NurseName">

<label>Qulalification</label>
<input type="text" name="Qualification">

<label>Experience</label>
<input type="text" name="Experience">

<label>PhoneNo</label>
<input type="text" placeholder="Enter PhoneNo" name="PhoneNo">
<div class="input-group">
    <button class="btn" type="submit" name="camper" formaction="../Nurse/nurseProcess.php">Save</button>
    <button class="btn" type="submit" name="camper" formaction="../../HTML%20Pages/AdminLogged.html">Back</button>
</div>
</div>


</form>
</body>
</html>
