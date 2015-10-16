<?php

require_once "parks_config.php";
require_once "db_connect.php";

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec('DROP TABLE IF EXISTS national_parks');

$dbc->exec(

	'CREATE TABLE national_parks(
		    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		    name VARCHAR(50) NOT NULL,
		    location VARCHAR(50) NOT NULL,
		    date_established CHAR(4) NOT NULL,
		    area_in_acres double(10,2) NOT NULL,
		    description TEXT NOT NULL,
		    PRIMARY KEY (id)
	)'

);

?>