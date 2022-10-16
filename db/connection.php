<?php

function newConnection($db = "db_course") : mysqli{
	$server = 'localhost';
	$user = 'root';
	$pwd = '1234';

	$conn = new mysqli($server, $user, $pwd, $db);

	if($conn->connect_error){
		die('Error: ' . $conn->connect_error);
	}

	return $conn;
}

?>