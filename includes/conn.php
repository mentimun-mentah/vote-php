<?php
	$conn = new mysqli('mysql', 'homestead', 'secret', 'homestead');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
