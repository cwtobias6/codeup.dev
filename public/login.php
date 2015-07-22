<?php
var_dump($_POST);


$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if(!empty($_POST)) {
	if(($username === "guest") && ($password === "password")) {
		header("Location: /authorized.php");
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
     	<button>SUBMIT</button>


	</form>

</body>
</html>