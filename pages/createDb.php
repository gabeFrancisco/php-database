<?php

if(!isset($_SESSION['user'])){
	header('location: index.php?dir=pages&file=home');
}

require_once "db/connection.php";
$db_name = $_POST['dbName'];

if (isset($_POST['dbName'])) {
	if (strlen($db_name) >= 4) {
		$conn = newConnection(null);

		$db_full_name = "{$db_name}_{$_SESSION['user']['username']}";
		$sql = "CREATE DATABASE IF NOT EXISTS {$db_full_name}";

		$result = $conn->query($sql);

		if ($result) {

			$_SESSION['success'] = "Database {$db_full_name} created successfuly!";
			$_SESSION['error'] = null;
		}
		else{
			$_SERVER['error'] = $conn->error;
		}

		$conn->close();
		header('location: index.php?dir=pages&file=createDb');
	}
	else {
		$_SESSION['error'] = 'Database name needs at least 4 characters!';
		header('location: ?dir=pages&file=createDb');
	}
}

?>

<div class="content">
	<?php if ($_SESSION['error']): ?>
	<div class="card card-red">
		<?php echo $_SESSION['error']?>
	</div>
	<?php
elseif ($_SESSION['success']): ?>
	<div class="card card-green">

		<?php echo $_SESSION['success']?>

	</div>
	<?php
endif ?>
	<h1>Create a database!</h1>
	<h3>Are you sure you want to create a new database?</h3>
	<form action="" method="post">
		<label for="dbName">Database Name:</label>
		<input class="m-2" type="text" name="dbName" id="dbName">
		<button class="btn btn-green m-2" type="submit">Create database!</button>
		<p>Name it with at least four characters!</p>
	</form>
</div>