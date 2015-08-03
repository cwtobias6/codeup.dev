<?php

define("DB_HOST", '127.0.0.1');
define("DB_NAME", 'parks_db');
define("DB_USER", 'parks_user');
define("DB_PASSWORD", 'password');

require_once "db_connect.php";

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$dbc->exec('TRUNCATE national_parks');


$parks = [

['name' => 'Acadia', 'location' =>'Maine' , 'date_established' => '1919', 'area_in_acres' => '47389'],
['name' => 'Arches', 'location' =>'Utah' , 'date_established' => '1929', 'area_in_acres' => '9000'],
['name' => 'Big Bend', 'location' =>'Texas' , 'date_established' => '1928', 'area_in_acres' => '801163'],
['name' => 'Channel Islands', 'location' =>'California' , 'date_established' => '1980', 'area_in_acres' => '249561'],
['name' => 'Crater Lake', 'location' =>'Oregon' , 'date_established' => '1902', 'area_in_acres' => '183224'],
['name' => 'Glacier', 'location' =>'Montana' , 'date_established' => '1910', 'area_in_acres' => '1013572'],
['name' => 'Mount Rainier', 'location' =>'Washington' , 'date_established' => '1899', 'area_in_acres' => '235625'],
['name' => 'Redwood', 'location' =>'California' , 'date_established' => '1968', 'area_in_acres' => '112512'],
['name' => 'Rocky Mountain', 'location' =>'Colorado' , 'date_established' => '1915', 'area_in_acres' => '265828'],
['name' => 'Yosemite', 'location' =>'California' , 'date_established' => '1890', 'area_in_acres' => '761266']

];

foreach ($parks as $park) {
	$parkInfo = "INSERT INTO national_parks(name,location,date_established,area_in_acres)
					VALUES('{$park['name']}','{$park['location']}','{$park['date_established']}','{$park['area_in_acres']}')";

$dbc-> exec($parkInfo);

echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}



?>