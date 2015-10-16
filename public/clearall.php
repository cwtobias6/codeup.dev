<?php
require_once "functions.php";
require_once "../Auth.php";
require_once "../Input.php";
session_start();
Auth::logout();
header('Location: /albumsindex.php');
exit();
 

?>