<?php

function randomAdj () {
	$adjective = ["Hubristic","Insidious","Loquacious","Nefarious","Parsimonious","Pernicious","Sagacious","Voluble","Voracious","Spasmodic"];
	$randomAdjective = mt_rand(0,count($adjective) - 1);


	return $adjective[$randomAdjective]; 

}

function randomNouns () {
	$nouns = ["chair", "pancake", "statue", "unicorn", "rainbows", "lasers", "gnomes", "bunny", "dragons", "baby"];
	$randomNoun = mt_rand(0,count($nouns) - 1);
	
	return $nouns[$randomNoun];
}

function pageController()
{

    $data = [];

    $data['firstName'] = randomAdj();
    $data['lastName'] = randomNouns();

    return $data;    
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Random Name Generator</title>
	<style type="text/css">




	</style>
</head>
<body>

	<h1>Random Name Generator</h1>
	<h2>First: <?= $firstName; ?> </h2>
	<h2>Last: <?= $lastName; ?></h2>


</body>
</html>