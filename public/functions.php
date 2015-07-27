<?php

function inputHas($key) {
	if(isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}

}

function inputGet($key) {
	if(isset($_REQUEST[$key])) {
		return $_REQUEST[$key];
	} else {
		return NULL;
	}
}

function escape($input) {
	return htmlspecialchars(strip_tags($input));
}

function endSession()
{
    $_SESSION = [];


    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
}
?>