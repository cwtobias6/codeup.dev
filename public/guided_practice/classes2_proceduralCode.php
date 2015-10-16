<?php


//procedural code



if(Auth::check() && Input::has('pastry')) {
	$pastryDesired = $_POST['pastry'];
	$pastry = new Pastry('doughnut');
	$pastry->serve();
}


$doughnut = new Doughnut('cake');
$doughnut->glaze('chocolate');
$doughnut->serve();
















?>