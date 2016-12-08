<?
include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
	//go to admin menu
	?><script type="text/javascript">location.href = 'admin.php';</script<?
}

else {
	//SELECT to check if previous user, if so -> user menu
	$query = "SELECT Username FROM Users WHERE Username = "$username";"
	if ($query = null) {
		?><script type="text/javascript">alert("Username not recognized.");</script>
		<script type="text/javascript">location.href = 'login.html';</script><?
	}
	$query = "SELECT Password FROM Users WHERE Password = "$password";"
	else if ($query = null) {
		?><script type="text/javascript">alert("Password not recognized");</script>
		<script type="text/javascript">location.href = 'login.html';</script><?
	}
	else {
		?><script type="text/javascript">location.href = 'menu.php';</script><?
	}
}

mysql_close();
?>