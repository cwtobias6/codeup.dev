<?php

require_once "../parks_config.php";
require_once "../db_connect.php";
require_once "functions.php";
require_once "../Input.php";
	
$page = inputGet('page');




if($page <= 1) {
	$page = 1;
}
//fetchColumn();

function getParks($dbc) 
{
	$math = ((inputGET("page") - 1) * 4);
	return $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $math)->fetchAll(PDO::FETCH_ASSOC);

}

var_dump(getParks($dbc));


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>National Parks | Christian Tobias</title>



</head>
<body>

	<table>
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
				<? foreach(getParks($dbc) as $parks => $park): ?>
					<tr>
						<td><?=$park['name']?></td>
						<td><?=$park['location']?></td>
						<td><?=$park['date_established']?></td>
						<td><?=$park['area_in_acres']?></td>
					</tr>
				<? endforeach; ?>
			</tbody>
		</table>

		<a href="/national_parks.php?page=<?= $page -1 ?>">Previous</a>
    	<a href="/national_parks.php?page=<?= $page +1 ?>">Next</a>

</body>
</html>