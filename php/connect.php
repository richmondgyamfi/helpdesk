<?php 
	$dbcon = mysqli_connect('localhost','root','','portchat');

	if (mysqli_connect_errno()) {
		echo "Databse connection failed " .mysqli_connect_errno();
		die();
	}else{
		// echo "connected";
	}

	// require_once BASEURL.'helpers/helpers.php';
	
 ?>