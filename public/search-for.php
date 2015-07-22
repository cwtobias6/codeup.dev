<?php
var_dump($_POST);

$search = isset($_POST['searchrequest']) ? $_POST['searchrequest'] : '';


$query = urldecode($search);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Search For</title>
</head>
<body>
	<h1>Search For: <?= $search ?></h1>


	<form method="POST" >
		<input type="text" name="searchrequest" placeholder="Enter Search"/>
     	<button>SUBMIT</button>
	</form>

	<a href="https://duckduckgo.com/?q=<?=$query?>">Go there now</a>

</body>
</html>