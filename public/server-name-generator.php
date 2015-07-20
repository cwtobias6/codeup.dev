<?php

$adjective = ["Hubristic","Insidious","Loquacious","Nefarious","Parsimonious","Pernicious","Sagacious","Voluble","Voracious","Spasmodic"];
$nouns = ["chair", "pancake", "statue", "unicorn", "rainbows", "lasers", "gnomes", "bunny", "dragons", "baby"];
$randomAdjective = mt_rand(0,count($adjective) - 1);
$randomNoun = mt_rand(0,count($nouns) - 1);
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
	<h2>First: <?php echo $adjective[$randomAdjective]; ?> </h2>
		<p></p>
	<h2>Last: <?php echo $adjective[$randomNoun]; ?></h2>
		<p></p>

</body>
</html>