<?php
	var_dump($_GET);
	$name = "Christian";
	$date = date("Y-m-d");

?>

<html>
<head>
	<title></title>
</head>
<body>
	<a href="?name=<?= $name; ?>&date=<?= $date; ?>">My Name and Today's date</a>

	<form method="GET" action="https://duckduckgo.com/">
	    <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
	    <button type="submit">Go!</button>
	</form>

</body>
</html>