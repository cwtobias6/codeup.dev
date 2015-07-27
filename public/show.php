<?php
require_once "functions.php";
session_start();

var_dump($_GET);

$theindex = intval($_GET['song']);

$showArray = $_SESSION['songs'][$theindex];
$showTitle = $showArray['title'];
$showArtist = $showArray['artist'];



?>

<h1>Song: <?= $showTitle ?></h1>
<h2>Artist: <?= $showArtist ?></h2>

