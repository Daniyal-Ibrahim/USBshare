<html>
<head>
    <title>LOGIN</title>
     <link rel="stylesheet" href="../../styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        background-image: url(../../Images/1.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

</style>
</head>
<body>
<br>
<br>
<br>
<div class="bg-img">
<form action="../Login/verifyLogin.php" method="post" class="container">
<center><h1>LOGIN </h1></center>
<br>
    User Name:<br><input type="text" name="username"><br><br>
    Password:<br><input type="password" name="passcode"><br><br>
    <div class="input-group">
        <button class="button2" type="submit" name="camper" formaction="../Login/UserLogin.php">Login</button>
        <button class="button1" type="submit" name="camper" formaction="../Login/AdminLogin.php">Admin</button>
    </div>
</form>
    <center>
        <a href="../../HTML%20Pages/index.html"><button class="button2" <span>Back</span></button></a>
        </div>
    </center>
</body>
</html>