<?php
// require_once "functions.php";
session_start();
var_dump($_POST);
$sessionID = session_id();
var_dump($_SESSION);
var_dump($sessionID);


$songTitle = inputGet("title");
$songArtist = inputGet("artist");

// if(!empty($songTitle) && !empty($songArtist)) {
// 	$_SESSION["title"][] = $songTitle;
// 	$_SESSION["artist"][] = $songArtist;
// }



?>

<!DOCTYPE html> 

<html>
<head>
	<title>Songs Inventory</title>
</head>
<body>
	<h1>Songs Inventory</h1>
	<form method="POST">
		<input type='text'name='title' placeholder='Enter Song Title'>
		<input type='text'name='artist' placeholder='Enter Artist Name'>
		<button>Submit</button>
	</form>

</body>
</html>