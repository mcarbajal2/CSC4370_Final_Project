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
		<p>Username: <br /><br />
		<input type = "text" name = "username"><br /><br />
		Password: <br /><br />
		<input type = "password" name = "password"><br /><br />
		<a href = "register.php">New user?</a>
		<input type = "submit" value = "Enter" name = "login">
		</p>
		</form>
	</div>
<body>
</html>

<?
include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

if(isset($_POST["login"])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "admin" && $password == "admin" && !empty($username) && !empty($password)) {
		//go to admin menu
		?><script type="text/javascript">location.href = 'admin.php';</script><?
	}

	else {
		//SELECT to check if previous user, if so -> user menu
		$query = "SELECT Username FROM Users WHERE Username = '$username';"
		if ($query != $username || empty($username)) {
			?><script type="text/javascript">alert("Username not recognized.");</script><?
		}
		$query = "SELECT Password FROM Users WHERE Password = "$password";"
		else if ($query != $password || !empty($password)) {
			?><script type="text/javascript">alert("Password not recognized");</script><?
		}
		else {
			?><script type="text/javascript">location.href = 'menu.php';</script><?
		}
	}
}

mysql_close();
?>