<?php

require_once "../parks_config.php";
require_once "../db_connect.php";
require_once "functions.php";
require_once "../Input.php";

$next = "btn btn-default";
$previous = "btn btn-default";
$parkLength = $dbc->query('SELECT COUNT(*) FROM national_parks')->fetchColumn();
$lastPage = ceil($parkLength / 4);

if(Input::has('page')) {
	$page = Input::get('page');
} else {
	$page = 1;
}

if($page <= 1) {
	$page = 1;
	$previous = "invisible";
}

if ($page >= $lastPage) {
	$page = $lastPage;
	$next = "invisible";
}



$math = (($page - 1) * 4);
$statement = $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $math);
$parks = $statement->fetchAll(PDO::FETCH_ASSOC);




// print_r($parkLength);
// var_dump(($parks));



?>

<!DOCTYPE HTML>
<html>
<head>
	<title>National Parks | Christian Tobias</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		.continer {
			margin-right: auto;
			margin-left: auto;
		}
		.table-bordered {
			padding:10px;
			text-align: center;
			margin-right: auto;
			margin-left: auto;

		}
		td {
			padding: 10px;
		}
		th {
			text-align: center;
			padding: 10px;
		}
		a:hover {
			color:red;
		}
		.btns {
			padding:10px;
			margin-left: auto;
			margin-right: auto;
		}
		h1 {
			margin-right: auto;
			margin-left: auto;
			text-align: center;
		}
		body {
			text-align: center;
		}
		forms {
			text-align: left;
		}
	</style>

</head>
<body>

	<div class="continer">
		<table class="table-bordered">
				<thead>
					<h1>NATIONAL PARK DATA</h1>
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Date Established</th>
						<th>Area In Acres</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($parks as $park): ?>
						<tr>
							<td><?=$park['name']?></td>
							<td><?=$park['location']?></td>
							<td><?=$park['date_established']?></td>
							<td><?=$park['area_in_acres']?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		<div class="btns">
			<button class="<?= $previous ?>"><a href="/national_parks.php?page=<?= $page -1 ?>">Previous</a></button>
	    	<button class="<?= $next ?>"><a href="/national_parks.php?page=<?= $page +1 ?>">Next</a></button>
		</div>
		<div class="forms">
			<form method="POST" class="form-horizontal">
				<input type="text" name="name" required="required" placeholder="Enter Park Name" >
				<input type="text" name="location" required="required" placeholder="Enter Location" >
				<input type="text" name="date_established" required="required" placeholder="Enter Date Established" >
				<input type="text" name="area_in_acres" required="required" placeholder="Enter Area (acres)" >
				<br><br>
				<button type="submit">Send</button>
			</form>
			<br>
			<form method="GET"> 
				<input type="search" name="search"
				placeholder="Enter keyword" />
				<input type="submit" value="Search" />
			</form>
		</div>
	</div>
</body>
</html>