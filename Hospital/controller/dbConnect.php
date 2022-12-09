<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "hospital";

	$connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
	
?>