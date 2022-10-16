<?php

require_once "db/connection.php";

if ($_POST['dbName']) {
	$db_name = $_POST['dbName'];

	$conn = newConnection(null);
	$sql = "create database {$db_name}_{$_SESSION['user']['username']} ";

	$conn->query($sql);
	$conn->close();
	header('location: index.php?dir=pages&file=home');
}

?>

<div class="content">
	<h1>Create a database!</h1>
	<h3>Are you sure you want to create a new database?</h3>
	<form action="" method="post">
		<label for="dbName">Database Name:</label>
		<input class="m-2" type="text" name="dbName" id="dbName">
		<button class="btn btn-green m-2" type="submit">Create!</button>
		<p>Name it with at least four characters!</p>
	</form>
</div>