<?php

$oldErrorReportingValue = error_reporting(0);

session_start();

if( (!isset($_POST["username"])) || (!isset($_POST["pw"])) || (strlen(trim($_POST["username"]))==0) || (strlen(trim($_POST["pw"]))==0) ) {
	echo "ERROR: Invalid inputs!";
	exit;
}

$un = strtolower(trim($_POST["username"]));
$pw = trim($_POST["pw"]);


if($un=='admin' && $pw=='nppadmin') {
	$_SESSION['loggedin'] = true;
	
	echo "SUCCESS";
} else {
	$_SESSION['loggedin'] = false;
	
	echo "ERROR: Incorrect username or password!";	
}

error_reporting($oldErrorReportingValue);

?>