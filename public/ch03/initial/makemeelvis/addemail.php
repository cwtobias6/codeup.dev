<!DOCTYPE html>
<html>
<head>
	<title>Add Email.php Son</title>
</head>
<body>

<?php


$dbc = mysqli_connect('localhost','practice','password','elvis_store')
		OR die('error conecting to the mysql server');

$first_name = $_POST['firstname'];
$last_name = $_POST ['lastname'];
$email = $_POST['email'];

$query = "INSERT INTO email_list(first_name,last_name,email) 
			VALUES ('$first_name','$last_name','$email')";

mysqli_query($dbc,$query)
	OR die('errror inserting query');

echo "Email Sent yo";

mysqli_close($dbc);



?>


</body>
</html>
