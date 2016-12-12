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
		<a href = "login.html">Back to home</a>
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

if(isset($_POST["register"])){
	$username = $_POST['newUsername'];
	$password = $_POST['newPassword'];
	$email = $_POST['newEmail'];
	$fname = $_POST['newFname'];
	$lname = $_POST['newLname'];
	
	$query = "SELECT * FROM Users WHERE username = '$username'";
	$result = $connect->query($query);
	//check username
	if($run->num_rows > 0){
		?><script type="text/javascript">alert("You cannot register using that username.");</script><?
	}
	
	$query = "SELECT * FROM Users WHERE email = '$email'";
	$result = $connect->query($query);
	//check email
	if($run->num_rows > 0){
		?><script type="text/javascript">alert("You cannot register using that e-mail.");</script><?
	}
	
	//Register user
	$query = "INSERT INTO Users VALUES ('$newEmail', '$username', '$password', '$newFname', '$newLname')";
	$result = $connect->query($result);
	if($result){
		?><script type="text/javascript">alert("Success!");</script>
		<script type="text/javascript">location.href = 'menu.php';</script><?
	}

/*//create user's orders table
		$query = "CREATE TABLE $username (ID int(3) NOT NULL auto_increment, Product varchar(50) NOT NULL, Quantity int(20))";
		try {
			mysql_query($query);
			//Could create user table
			?><script type="text/javascript">location.href = 'menu.php';</script><?
		}

		catch(Exception $e) {
			//could not create user table
			?><script type="text/javascript">alert("There was an error registering you, please try again. Thank you.");</script><?
		}
	}*/
}
	
mysql_close();
?>