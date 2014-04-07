<?php

$oldErrorReportingValue = error_reporting(0);

if( (!isset($_POST["fname"])) || (!isset($_POST["json"])) || (strlen(trim($_POST["fname"]))==0) || (strlen(trim($_POST["json"]))==0) ) 
{
	echo "ERROR: Invalid inputs!";
	exit;
}

$json = $_POST['json'];
$fname = '../'.$_POST['fname'];


if (json_decode($json) != null) 
{
	$file = fopen($fname,'w+');
	fwrite($file, $json);
	fclose($file);
	echo "SUCCESS";
} else 
{
	echo "ERROR: Could not save the file.";
}

error_reporting($oldErrorReportingValue);

?>