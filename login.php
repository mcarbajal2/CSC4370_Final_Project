<!DOCTYPE html>
<html>
    <head>
        <link href="finalproj.css" type="text/css"rel = "stylesheet"/>
        <title>Log in - ProwlShop.com</title>
    </head>
    <body>
        <br /><br /><h1>Log In to Prowl Shop</h1><hr style = "width: 20%">
        <div id = "login">
            <form action = "" method = "POST">
                <fieldset>
                    <label><b>Username:</b></label><br><br>
                    <input type = "text" name = "username" id="username"><br /><br />
                    <label><b>Password:</b></label><br><br>
                    <input type = "password" name = "password" id="password"><br /><br />
                    <label><a href = "register.php">New user?</a></label>
                    <input type="submit" value="Enter" name="login">
                </fieldset>
            </form>
        </div>
    </body>
</html>

<?php

$dbHost = 'localhost';
$dbUsername = 'jluu4';
$dbPassword = 'jluu4';
$dbName = 'jluu4';

$connect = mysql_connect($dbHost, $dbUsername, $dbPassword);
$dbConnect = mysql_select_db($dbName);
if (!$connect) {
    die("Connection failed: " . mysql_error());
}
if (!$dbConnect) {
    die("Database Connection failed: " . mysql_error());
}

if(isset($_POST["login"])){
	$username = $_POST['username'];
	$password = $_POST['password'];
    
    $res = mysql_query("SELECT * FROM Users WHERE Username='$username' AND Password='$password'");
    
    $row = mysql_fetch_array($res);
    
    $count = mysql_num_rows($res);
    
    if ($count > 0) {
        header("Location: menu.php");
        session_start();
    }
    
	else {
		echo "<script>alert('Username and/or Password not recognized')</script>";
		return;
	}
}
?>
