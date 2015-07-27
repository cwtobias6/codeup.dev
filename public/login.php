<?php
require_once "functions.php";
require_once "../Auth.php";
require_once "../Input.php";
var_dump($_POST);

session_start();
$sessionID = session_id();
var_dump($_SESSION);
var_dump($sessionID);



$username = Input::get('username');
$password = Input::get('password');


if(!empty($_POST)) {
	if(Auth::attempt($username,$password)) {
		header("Location: authorized.php");
		exit();
	} else {
		$message = "Attempt Failed. Please try again.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

}



var_dump($username);
var_dump($password);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">

	body{
		margin-right: auto;
		margin-right: auto;
	}
	div {
		width: 380px;
		margin-right: auto;
		margin-left: auto;
	}
	fieldset {
		  width: 350px;
		  border: 1px solid #dcdcdc;
		  border-radius: 10px;
		  padding: 20px;
		  text-align: right;
		  border-style: inset;
	}
	legend {
		  background-color: #efefef;
		  border: 1px solid #dcdcdc;
		  border-radius: 10px;
		  padding: 10px 20px;
		  text-align: left;
		  text-transform: uppercase;
		  border-style: outset;
	}
	</style>
</head>
<body>
	<div>
	<h1>Login Page</h1>
	<form method="POST" >
		<fieldset>
			<legend>Login</legend>
			<input type="text" name="username" placeholder="Enter Username"/>

			<input type="password" name="password" placeholder="Enter Password"/>
	     	<button>SUBMIT</button><br>
     	</fieldset>
	</form><br>
	<a href="/logout.php"><button>Log Out</button></a>
	</div>
</body>
</html>