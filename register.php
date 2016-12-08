<?
include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

$username = $_POST['newUsername'];
$password = $_POST['newPassword'];
$email = $_POST['newEmail'];
$fname = $_POST['newFname'];
$lname = $_POST['newLname'];

//checking for blank fields
if ($username == "" || $password == ""|| $email == ""|| $fname == ""|| $lname == "") {
	<script type="text/javascript">alert("You must enter a valid value for all fields.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

//cannot register as admin
if ($username == "admin") {
	<script type="text/javascript">alert("You cannot register using that username.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

//check if previous user, if so -> username: $username / email: $email etc. already in system
$query = "SELECT Fname FROM Users WHERE Email = "$email";";
if ($query = null) {
	<script type="text/javascript">alert("That email is already in use.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

$query = "SELECT Fname FROM Users WHERE Username = "$username";";
if ($query = null) {
	<script type="text/javascript">alert("That username is already in use.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

//Register user
$query = "INSERT INTO Users VALUES ("'$newEmail', '$username', '$password', '$newFname', '$newLname'")";
try {
	mysql_query($query);
	//could register user
	<script type="text/javascript">alert("You have been registered!");</script>
}

catch(Exception $e) {
	//could not register user
	<script type="text/javascript">alert("There was an error registering you, please try again. Thank you.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

//create user's orders table
$query = "CREATE TABLE . $username . Orders(ID int(3) NOT NULL auto_increment, Product varchar(50) NOT NULL, Quantity int(20))";
try {
	mysql_query($query);
	//Could create user table
	<script type="text/javascript">location.href = 'menu.php';</script>
}

catch(Exception $e) {
	//could not create user table
	<script type="text/javascript">alert("There was an error registering you, please try again. Thank you.");</script>
	<script type="text/javascript">location.href = 'register.html';</script>
}

mysql_close();
?>