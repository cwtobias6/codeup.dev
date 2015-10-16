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
	<style type="text/css">
	#container {
		height:70%;
		width:70%;
		margin-left: auto;
		margin-right: auto;
		border:6px ridge white;
		text-align: center;
		box-shadow: 5px 5px 5px 5px #777777;
	}
	td:hover {
		text-transform: uppercase;

	}
	table {
		/*border:1px solid black;*/
		width:50%;
		height: 50%;
		margin-left: auto;
		margin-right: auto;
		padding:10px;
	}
	tbody {
		text-align: center;
	}

	#form {
		width: 50%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
	#clear {
		width:50%;
		height: 50%;
		margin-left: auto;
		margin-right: auto;
		padding:20px;
	}
	button:hover {
		
	}
	h1 {
		font-family: cursive;
		font-weight: bold;
	}
	tr {
		border:1px solid black;
	}
	td {
		border:1px solid black;
	}
	a:hover {
		color:blue;
		font-size: 10px;
	}



	</style>
</head>
<body>
	<div id="container">
		<h1>Songs Inventory</h1>
		<div id="form">
				<form method="POST">
					<input type='text'name='title' placeholder='Enter Song Title'>
					<input type='text'name='artist' placeholder='Enter Artist Name'>
					<button>Submit</button>
		</div>
		</form>
		<table>
			<thead>
				<tr>
					<th>Song Links</th>
					<th>Song Title</th>
					<th>Song Artist</th>
				</tr>
			</thead>
			<tbody>
				<? foreach($_SESSION['songs'] as $key => $newSongs): ?>
					<tr>
					<td><a href="/show.php?song=<?=$key?>"><button>Link To:</button></a></td>
					<td><?=$newSongs['title']?></td>
					<td><?=$newSongs['artist']?></td>
					</tr>

				<? endforeach; ?>
			</tbody>
		</table>
		<div id="clear">
		<a href="/clearall.php"><button>Clear All</button></a>
		</div>
	</div>
</body>
</html>