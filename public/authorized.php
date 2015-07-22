<?php
session_start();

if(!isset($_SESSION["loggedinuser"])) {
	header("Location:/login.php");
	exit();
} else{

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

