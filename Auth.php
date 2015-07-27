<?php
require_once 'log.php';
require_once 'functions.php';

class Auth
{

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	
	public static function attempt($username, $password)
	{
		if((escape($username) === "guest") && (escape(password_verify($password, Auth::$password)) === "password")) {
			$_SESSION["loggedinuser"] = $username;
			$log = new Log();
			$log->info("User $username logged in.");
			
		} else {
			$log = new Log();
			$log->info("User $username failed to log in!");
		}


	}

	public static function check() 
	{
		if($_SESSION["loggedinuser"]) {
			return true;
		} else {
			return false;
		}

	}

	public static function user()
	{
		if(!empty($_SESSION["loggedinuser"])){
			return $_SESSION["loggedinuser"];
		}

	}

	public static function logout()
	{
		endsession();
	}










}



?>