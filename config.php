$host = "localhost";
$username = "mcarbajal2";
$password = "mirnarypass";
$database = "mcarbajal2";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$database")or die("cannot select database"); 