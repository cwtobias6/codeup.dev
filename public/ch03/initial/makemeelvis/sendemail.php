<?php

$from = 'cwtobias6@gmail.com';
$subject = $_POST['subject'];
$text = $_POST['elvismail'];

if(!empty($subject)) {
	if(!empty($text)) {

		$dbc = mysqli_connect('localhost','practice','password','elvis_store')
					OR die('error connecting to the database');
		$query = "SELECT * FROM email_list";
		$result = mysqli_query($dbc,$query);

		while($row = mysqli_fetch_array($result)){

		}

		
	}
}


?>