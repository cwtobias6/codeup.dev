<?php

require_once "../parks_config.php";
require_once "../db_connect.php";
require_once "functions.php";
require_once "../Input.php";

//button classes
$next = "btn btn-default";
$previous = "btn btn-default";

//form input variables
$formName = (Input::has('name')) ? Input::get('name'):'';
$formLocation = (Input::has('location')) ? Input::get('location'):'';
$formDate = (Input::has('date_established')) ? Input::get('date_established'):'';
$formArea = (Input::has('area_in_acres')) ? Input::get('area_in_acres'):'';
$formDescription = (Input::has('description')) ? Input::get('description'):'';

//binds input data to national_parks database
if(!empty($formName) && !empty($formLocation) && !empty($formDate) && !empty($formArea) && !empty($formDescription)) {
	
	$stmt = $dbc->prepare('INSERT INTO national_parks(name,location,date_established,area_in_acres,description) VALUES (:name,:location,:date_established,:area_in_acres,:description)');
	
	$stmt->bindValue(':name',$formName,PDO::PARAM_STR);
    $stmt->bindValue(':location', $formLocation,PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $formDate,PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres', $formArea,PDO::PARAM_STR);
    $stmt->bindValue(':description', $formDescription,PDO::PARAM_STR);
    
    $stmt->execute();
} 


//limits the number of parks per page to 4
$parkLength = $dbc->query('SELECT COUNT(*) FROM national_parks')->fetchColumn();
$lastPage = ceil($parkLength / 4);


//brings user to page 1
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

//prepare statement that prevents sql injection  
$math = (($page - 1) * 4);
$statement = $dbc->prepare('SELECT * FROM national_parks LIMIT 4 OFFSET :math ');
$statement->bindValue(':math',$math,PDO::PARAM_INT);
$statement->execute();
$parks = $statement->fetchAll(PDO::FETCH_ASSOC);

// //ability to delete park by id number
// $deleteSql = 'DELETE FROM national_parks WHERE id = :id';
// $deleteStmt = $dbc->prepare($deleteSql);
// $deleteStmt->bindValue(':id',Input::get('id')PDO::PARAM_INT);
// $deleteStmt->execute();

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
			margin-top: 10px;
			width:80%;
			padding:10px;
			text-align: center;
			margin-right: auto;
			margin-left: auto;

		}
		tr:hover {
  			background-color: #c3e6e5;
  		}
		td {
			padding: 10px;
		}
		td:hover {
			font-weight: bold;
		}

		th {
			text-align: center;
			padding: 10px;
			text-shadow: 1px 1px 1px #555555;
			font-size: 20px;
		}
		a:hover {
			color:red;
		}
		.btns {
			margin-top: 20px;
			margin-bottom: 20px;
			margin-left: auto;
			margin-right: auto;
		}
		h1 {
			margin-right: auto;
			margin-left: auto;
			text-align: center;
			text-shadow: 1px 1px 0px #000000;
		}
		body {
			text-align: center;
		}
		.description {
			margin-top: 20px;
		}
		.search {
			padding-bottom: 300px;
			padding-top: 50px;
		}
		h2 {
			text-shadow: 1px 1px 0px #000000;
		}

	</style>

</head>
<body>

	<h1>NATIONAL PARK DATA</h1>
	<div class="continer">
		<table class="table-bordered">
				<thead>
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
							<td class="description"><?=$park['description']?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>

		<div class="btns">
			<button class="<?= $previous ?>"><a href="/national_parks.php?page=<?= $page -1 ?> btn-lg">Previous</a></button>
	    	<button class="<?= $next ?>"><a href="/national_parks.php?page=<?= $page +1 ?> btn-lg">Next</a></button>
		</div>
		<div class="search">
			<h2>Add A New Park</h2>
			<div class="forms">
				<form method="POST">
					<input type="text" name="name" required="required" placeholder="Enter Park Name">
					<input type="text" name="location" required="required" placeholder="Enter Location">
					<input type="text" name="date_established" required="required" placeholder="Enter Year Established">
					<input type="text" name="area_in_acres" required="required" placeholder="Enter Area (acres)">
					<br>
					<textarea name="description" required="required" placeholder="Enter Description" class="description"></textarea>
					<br>
					<button type="submit" class="btn-lg">Send</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>