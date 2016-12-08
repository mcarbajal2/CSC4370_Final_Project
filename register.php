<?
include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

$username=$_POST['newUsername'];
$password=$_POST['newPassword'];
$email=$_POST['newEmail'];
$fname=$_POST['newFname'];
$lname=$_POST['newLname'];

if ($username == "" ||$password == ""||$email == ""||$fname == ""||$lname == "") {
	//error alert
	<script type="text/javascript">location.href = 'register.html';</script>
}

if ($username == "admin") {
	if ($password == "admin") {
		//error, cannot use that login combination
		<script type="text/javascript">location.href = 'register.html';</script>
	}
}

//check if previous user, if so -> username: $username / email: $email etc. already in system


//Register user
$query = "INSERT INTO Users VALUES ("'$username', '$password', '$newEmail', '$newFname', '$newLname'")";
try {
	mysql_query($query);
	//Could insert user
}

catch(Exception $e) {
  //JavaScript alert "There was an error registering you, please try again. Thank you."
  <script type="text/javascript">location.href = 'register.html';</script>
}

//create user's purchase table
$query = "CREATE TABLE . $username . Orders(ID int(3) NOT NULL auto_increment, Product varchar(50) NOT NULL, Quantity int(20))";
try {
	mysql_query($query);
	//Could insert user table
	<script type="text/javascript">location.href = 'menu.php';</script>
}

catch(Exception $e) {
  //JavaScript alert "There was an error registering you, please try again. Thank you."
  <script type="text/javascript">location.href = 'register.html';</script>
}

//JavaScript to redirect user

mysql_close();
?>