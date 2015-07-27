<?php
require_once "functions.php";
require_once "../Auth.php";
require_once "../Input.php";
session_start();
var_dump($_POST);
var_dump($_SESSION);


if(!isset($_SESSION["loggedinuser"])) {
	header("Location:/login.php");
	exit();
} 



?>


<!DOCTYPE html>
<html>
<head>
	<title>Authorized Page</title>
</head>
<body>
	<h1>Authorized</h1>
	<h2>Username:"<?= $_SESSION["loggedinuser"] ?>"</h2>
	<a href="/logout.php"><button>Log Out</button></a>

</body>
</html>

