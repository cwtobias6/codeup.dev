<?php


function pageController()
{
    
	$things = ["Music", "Track", "Literature", "Poetry", "Coding"];
    $data = [];

    $data['mystuff'] = $things;

    return $data;    
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>List of My Favorite Things</title>
	<style type="text/css">
	h1 {
		width: 600px;
	}
	body {
		font-family: times, Verdana, sans-serif;
  		color: #111111;
  		text-align: center;

	}
	table {
		width: 600px;
		border-style: outset;
	}
	td{
		padding: 7px 10px 10px 10px;
		text-transform: uppercase;
		letter-spacing: 0.1em;
		font-size: 90%;
		border-bottom: 2px solid #111111;
		border-top: 1px solid #999;
		text-align: left;
		text-shadow: 2px 2px 7px #111111;
	}
	th {
		text-align: center;
	}
	tr:hover {
		background-color: gray;
	}
	div {
		width:700px;
		margin-left: auto;
		margin-right: auto;
	}
	a {
		cursor: crosshair;
	}

	</style>
</head>
<body>
	<div>
	<h1>THESE ARE A FEW OF MY FAVORITE THINGS...</h1>
		<table>
			<?php foreach($mystuff as $item): ?>
			<tr>
					<td><?= $item; ?></td>
			</tr>
			<?endforeach;?>
	</table>
	<div>
</body>
</html>