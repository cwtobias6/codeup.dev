<?php

require_once "../parks_config.php";
require_once "../db_connect.php";
require_once "functions.php";
require_once "../Input.php";

$next = "btn btn-default";
$previous = "btn btn-default";

$formName = (Input::has('name')) ? Input::get('name'):'';
$formLocation = (Input::has('location')) ? Input::get('location'):'';
$formDate = (Input::has('date_established')) ? Input::get('date_established'):'';
$formArea = (Input::has('area_in_acres')) ? Input::get('area_in_acres'):'';
$formDescription = (Input::has('description')) ? Input::get('description'):'';


if(!empty($formName) && !empty($formLocation) && !empty($formDate) && !empty($formArea) && !empty($formDescription)) {
	
	$stmt = $dbc->prepare('INSERT INTO national_parks(name,location,date_established,area_in_acres,description) VALUES (:name,:location,:date_established,:area_in_acres,:description)');
	
	$stmt->bindValue(':name',$formName,PDO::PARAM_STR);
    $stmt->bindValue(':location', $formLocation,PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $formDate,PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres', $formArea,PDO::PARAM_STR);
    $stmt->bindValue(':description', $formDescription,PDO::PARAM_STR);
    
    $stmt->execute();

    echo "hello";
} 


$parkLength = $dbc->query('SELECT COUNT(*) FROM national_parks')->fetchColumn();
$lastPage = ceil($parkLength / 4);

if(Input::has('page')) {
	$page = Input::get('page');
} else {
	$page = 1;
}

//prevents user from going past page 1
if($page <= 1) {
	$page = 1;
	$previous = "invisible";
}

//prevents user from going past the last page
if ($page >= $lastPage) {
	$page = $lastPage;
	$next = "invisible";
}


//change to prepare statement
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
			width:900px;
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
						<th>Year Established</th>
						<th>Area In Acres</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<? foreach($parks as $park): ?>
						<tr>
							<td><?=$park['name']?></td>
							<td><?=$park['location']?></td>
							<td><?=$park['date_established']?></td>
							<td><?=number_format($park['area_in_acres'])?></td>
							<td><?=$park['description']?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		<div class="btns">
			<button class="<?= $previous ?>"><a href="/national_parks.php?page=<?= $page -1 ?>">Previous</a></button>
	    	<button class="<?= $next ?>"><a href="/national_parks.php?page=<?= $page +1 ?>">Next</a></button>
		</div>
		<div class="forms">
			<form method="POST">
				<input type="text" name="name" required="required" placeholder="Enter Park Name">
				<input type="text" name="location" required="required" placeholder="Enter Location">
				<input type="text" name="date_established" required="required" placeholder="Enter Year Established">
				<input type="text" name="area_in_acres" required="required" placeholder="Enter Area (acres)">
				<input type="textarea" name="description" required="required" placeholder="Enter Description">
				<button type="submit">Send</button>
			</form>
			<br>
		</div>
	</div>
</body>
</html>