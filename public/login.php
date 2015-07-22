<?php
var_dump($_POST);

session_start();
$sessionID = session_id();
var_dump($_SESSION);
var_dump($sessionID);



$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if(!empty($_POST)) {
	if(($username === "guest") && ($password === "password")) {
		$_SESSION["loggedinuser"] = $username;
		header("Location: /authorized.php");
		exit();
	} else {
		$message = "wrong answer";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="POST" >
		<input type="text" name="username" placeholder="Enter Username"/>

		<input type="password" name="password" placeholder="Enter Password"/>
     	<button>SUBMIT</button><br>


	</form><br>
	<a href="/logout.php"><button>Log Out</button></a>
</body>
</html>