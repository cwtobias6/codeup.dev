<?php 

$counter = empty($_GET['count'] ? $_GET['count'] : '');




?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter Exercise</title>
</head>
<body>
	<h2>Counter Value <?= $counter ?></h2>
	<a href="?counter=<?= $counter ?>&&up=true">Going Up</a>
	<a href="?counter=<?= $counter ?>&&down=true">Going Down</a>
</body>
</html>