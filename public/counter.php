<?php 

var_dump($_GET);
$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;

if(!empty($_GET["up"])) {
	$counter++;
} else if(!empty($_GET["down"])){
	$counter--;
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter Exercise</title>
</head>
<body>
	<h2>Counter Value: <?= $counter ?></h2>
	<a href="?counter=<?= $counter ?>&up=true">Going Up</a>
	<a href="?counter=<?= $counter ?>&down=true">Going Down</a>
</body>
</html>