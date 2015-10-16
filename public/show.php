<?php
require_once "functions.php";
session_start();

var_dump($_GET);

$theindex = intval($_GET['song']);

$showArray = $_SESSION['songs'][$theindex];
$showTitle = $showArray['title'];
$showArtist = $showArray['artist'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Page</title>
	<style type="text/css">

	#container {
		width:50%;
		height: 50%;
		margin-right: auto;
		margin-left: auto;
		text-align: center;
		border: ridge black;
		font-size: 30px;
		border-style: inset;
		box-shadow: 5px 5px 5px 5px #777777;
		padding: 0px;
  		border-radius: 100px;
	}
	h1 {
		color:LightSeagreen;
		opacity:.9;
	}
	h2 {
		color:RoyalBlue;
	}


	</style>
</head>
<body>
	<div id="container">
		<h1>Song: <?= $showTitle ?></h1>
		<h2>Artist: <?= $showArtist ?></h2>
		<a href="/albumsindex.php"><button>Back To Song Inventory</button></a>
	</div>
</body>
</html>


