<?php
$host = "localhost";
$username = "mcarbajal2";
$password = "mirnarypass";
$database = "mcarbajal2";

$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>