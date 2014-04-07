<?php

	session_start();
	
	$_SESSION['loggedin'] = true;
	
	header('Location:admin.php');

?>