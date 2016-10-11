<!<?php 
$cookie_name = "loggedin";

$servername = "tsuts.tskoli.is";
$username = "0805982629";
$password = "mypassword";
$database = "0805982629_tut";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	die("Database connection failed:  ".mysql_connect_error());
}

if (isset($_POST['login']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$phash = sha1(sha1($pass."salt")."salt");

	$sql = "SELECT * FROM users WHERE username='$user' AND password='$phash';";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) 
	{
		$cookie_value = $user;
		setcookie($cookie_name, $cookie_value, time() + (180), "/");
		header("Location: personal.php");
	}
	else
	{
		echo "Username or password is incorrect!" ;
	}
}
elseif (isset($_POST['register'])) 
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	

	$phash = sha1(sha1($pass."salt")."salt");

	$sql = "INSERT INTO users(username, password) VALUES('$user', '$phash') ";

	echo("<script type='text/javascript'> var answer = prompt('".$sql."'); </script>");

	$result = mysqli_query($conn, $sql);
}
 ?>