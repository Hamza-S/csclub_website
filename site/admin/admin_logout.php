<?php
	
	session_start();
	
	if ($_SESSION['isAdmin'] == true)
	{	
		$_SESSION['isAdmin'] = false;
		session_destroy();
		header("Location: admin_login.php", true, 301);
		die();
	}
	
	else{
		
		header("Location: static_homepage.php", true, 301);
		session_destroy();
		die();
	}	

?>