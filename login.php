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
$connect = mysqli_connect("localhost", "vbarot1", "vbarot1", "vbarot1"); 
if($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
}
//include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

if(isset($_POST["login"])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
	$result = $connect->query($query);
	if($run->num_rows > 0){
		//check if admin here?
		
			header("menu.php");
			session_start();
			$row = $run->fetch_array(MYSQLI_ASSOC);
			$_SESSION["ID"] = $row["ID"];
			$_SESSION["User"] = $row["username"];
			$_SESSION["Pass"] = $row["password"];
			$_SESSION['fname'] = $row["fname"];
			$_SESSION['lname'] = $row["lname"];
			$_SESSION['email'] = $row["email"];
	}
	else {
		?><script type="text/javascript">alert("Username and/or Password not recognized")</script><?
		return;
	}
}
mysql_close();
?>