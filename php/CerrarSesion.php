<?php
session_start();
$_SESSION=array();

if (ini_get("sesssion.use_cookie"))
{
	$params=session_get_cookie_params();
	setcookie(session_name(),'',time() - 42000,
	$params["patch"],$params["domain"],
	$params["secure"], $params["httponly"]
	);
}

session_destroy();
header ('Location: ../index.html');

?>