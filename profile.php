<? session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<link href="finalproj.css" type="text/css"rel = "stylesheet"/>
	<title>Profile - ProwlShop.com</title>
</head>
<body>
	<?
		if (isset($_SESSION['ID'])) {
	?>
	<div id = "inventory">
		<h1>Your Profile</h1><hr style = "width: 70%">
		<h4 style = "text-decoration: underline">prowlshop.com</h4>
	</div>
	<div id = "profile_body">
		<form>
		<table align = "center" cellspacing = "15">
		<tr><td class = "profile_header">Personal Information</td></tr>
		<tr><td class = "profile_info">
			<ul>
				<li>Username: <?php echo $_SESSION['User']; ?></li>
				<li>Password: <?php echo $_SESSION['Pass']; ?></li>
				<li>Email: <?php echo $_SESSION['email']; ?></li>
				<li>First Name: <?php echo $_SESSION['fname']; ?></li>
				<li>Last Name: <?php echo $_SESSION['lname']; ?></li>
			</ul>
		</td></tr>
		<tr><td class = "profile_header">Past Purchases</td></tr>
		<tr><td class = "profile_info">
			<ol>
				<li>Purchase 1</li>
				<li>Purchase 2</li>
			</ol>
		</td></tr>
		</table>
		</form>
	</div>
	<?
		}
	?>
	<p><a href = "menu.php" align = >Back to menu</a></p>
</body>
</html>