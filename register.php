<!DOCTYPE html>
<html>
    <head>
        <link href="finalproj.css" type="text/css"rel = "stylesheet"/>
        <title>Register - ProwlShop.com</title>
    </head>
    <body>
        <h1>Enter your information to register with us!</h1><hr style = "width: 70%">
        <div id = "register">
            <form action = "register.php" method = "POST">
                <p>Username: <br /><br />
                <input type = "text" name = "newUsername"><br /><br />
                Password: <br /><br />
                <input type = "password" name = "newPassword"><br /><br />
                E-mail: <br /><br />
                <input type = "text" name = "newEmail"><br /><br /><br />
                First Name: <br /><br />
                <input type = "text" name = "newFname"><br /><br />
                Last Name: <br /><br />
                <input type = "text" name = "newLname"><br /><br />
                <input type = "submit" value = "Create Account" name = "register"><br /><br />
                <a href = "login.php">Back to home</a>
                </p>
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

if(isset($_POST["register"])){
	$username = $_POST['newUsername'];
	$password = $_POST['newPassword'];
	$email = $_POST['newEmail'];
	$fname = $_POST['newFname'];
	$lname = $_POST['newLname'];
	
	if($fname==""){
		echo"<script>alert('Enter all fields')</script>";
		return;
	}
	if($lname==""){
		echo"<script>alert('Enter all fields')</script>";
		return;
	}
	if($username==""){
		echo"<script>alert('Enter all fields')</script>";
		return;
	}
	
	if($password==""){
		echo"<script>alert('Enter all fields')</script>";
		return;
	}
    
    // check if email exists or not
    $res = mysql_query("SELECT Email FROM Users WHERE Email='$email'");
    $count = mysql_num_rows($res);
    
    if($count > 0) {
        echo "<script> alert('Email $email already exists')</script>";
        return;
    }
    
    // check if user exists or not
    $res = mysql_query("SELECT Username FROM Users WHERE Username='$username'");
    $count = mysql_num_rows($res);
    
    if($count > 0) {
        echo "<script> alert('Username $username already exists')</script>";
        return;
    }
    
    // Register new user
    if ($count == 0) {
        $res = mysql_query("INSERT INTO Users VALUES ('$email', '$username', '$password', '$fname', '$lname')");
    }

	if($result){
		echo "<script>alert('Registration successful')</script>";
		echo "<script>window.open('login.php','_self')</script>";
		//create user table
		$query = "CREATE TABLE $username (ID int(3) NOT NULL auto_increment, Product varchar(50) NOT NULL, Quantity int(20))";
		mysql_query($query);
	}
}
	
?>
