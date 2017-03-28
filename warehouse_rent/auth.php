<?php
	//Start session
	session_start();
	
	if(!isset($_SESSION['ID'])) {
		//echo "ok";
		header("location: signin.php");
		exit(0);
	}

	/*if(!isset($_SESSION['ID'])) {
		//echo "ok";
		header("location: signin.php");
		exit(0);
	}*/

	//Check whether the session variable SESS_MEMBER_ID is present or not
	/*if(!isset($_SESSION['ID']) || (trim($_SESSION['ID']) == '')) {
		//echo "ok";
		header("location: signin.php");
		exit(0);
	}*/

	/*if(isset($_SESSION['ID'])) {
		//echo "ok";
		header("location: home.php");
		exit(0);
	}*/

?>