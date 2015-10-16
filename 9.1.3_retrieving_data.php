<?php



require_once "parks_config.php";
require_once "db_connect.php";


function getUsers($dbc)
{
    // Bring the $dbc variable into scope somehow

    return $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
}

print_r(getUsers($dbc));