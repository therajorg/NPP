<?php

session_start();

if (isset($_SESSION['HTTP_USER_AGENT']))
{
    if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT']))
    {
		
		session_unset();
		session_start();
		
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		
		$_SESSION['loggedin'] = false;
		
		
        /* Prompt for password */
        //exit;
    }
}
else
{
    $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
	
	if(!isset($_SESSION['loggedin'])) {
		$_SESSION['loggedin'] = false;
	}
}

?>