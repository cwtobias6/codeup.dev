<?php
require_once "functions.php";
session_start();
// var_dump($_POST);
$sessionID = session_id();
var_dump($sessionID);



$songTitle = inputGet("title");
$songArtist = inputGet("artist");

if(!isset($_SESSION['songs'])){
	$_SESSION['songs'] = [];	
}

if(!empty($songTitle) && !empty($songArtist)) {
	$_POST['title'] = $songTitle;
	$_POST['artist'] = $songArtist;
	$newSongs = array(
		'title' => $songTitle,
		'artist' => $songArtist
		);
	array_push($_SESSION['songs'], $newSongs);
} 

$counter = 0;

var_dump($_SESSION['songs']);




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
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Song Title</th>
				<th>Song Artist</th>
			</tr>
		</thead>
		<tbody>
			<? foreach($_SESSION['songs'] as $key => $newSongs): ?>
				<tr>
				<td><a href="/show.php?song=<?=$key?>">Entry:</a></td>
				
				<td><?=$newSongs['title']?></td>
				<td><?=$newSongs['artist']?></td>
				</tr>

			<? endforeach; ?>
		</tbody>
	</table>

	
</body>
</html>