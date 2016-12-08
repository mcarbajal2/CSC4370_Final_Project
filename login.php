<?
include("http://codd.cs.gsu.edu/~mcarbajal2/final/config.php");

$username=$_POST['name'];
$password=$_POST['password'];

if ($username == "" ||$password == "") {
	//error alert
	<script type="text/javascript">location.href = 'login.html';</script>
}

if ($username == "admin") {
	if ($password == "admin") {
		//select admin data and load admin session
		
		//JavaScript to redirect to admin menu
		<script type="text/javascript">location.href = 'admin.php';</script>
	}
}

//SELECT to check if previous user, if so -> user menu

//JavaScript to redirect
<script type="text/javascript">location.href = 'menu.php';</script>

//else "We don't recognize your username/password, please register again, thank you."

mysql_close();
?>