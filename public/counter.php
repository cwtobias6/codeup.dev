<?php

var_dump($_GET);




if(empty($_GET["counter"])) {
	$counter = 0;
} else {
	$counter = $_GET["counter"];
}


if (!empty($_GET["up"])) {
	$counter++;
} else if (!empty($_GET["down"])) {
	$counter--;
} 

if($counter < 0){
	$counter = 0;
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter Exercise | Christian Tobias</title>
</head>
<body>
	<h1>Counter:<?=$counter ?></h1>
	<a href="?counter=<?= $counter; ?>&up=true">Going Up</a>
	<a href="?counter=<?= $counter; ?>&down=true">Going Down</a>

</body>
</html>