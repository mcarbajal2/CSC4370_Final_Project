<? session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<link href="finalproj.css" type="text/css"rel = "stylesheet"/>
	<title>Profile - ProwlShop.com</title>
</head>
<body>
	<?
		if (isset($_SESSION['username'])) {
			 $resU = mysql_query("SELECT Username FROM Users WHERE Username='. $_SESSION['username'] .'");
			 $resP = mysql_query("SELECT Password FROM Users WHERE Username='. $_SESSION['username'] .'");
			 $resE = mysql_query("SELECT Email FROM Users WHERE Username='. $_SESSION['username'] .'");
			 $resF = mysql_query("SELECT FirstName FROM Users WHERE Username='. $_SESSION['username'] .'");
			 $resL = mysql_query("SELECT LastName FROM Users WHERE Username='. $_SESSION['username'] .'");
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
				<li>Username: <?php echo $resU; ?></li>
				<li>Password: <?php echo $resP; ?></li>
				<li>Email: <?php echo $resE; ?></li>
				<li>First Name: <?php echo $resF; ?></li>
				<li>Last Name: <?php echo $resL; ?></li>
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