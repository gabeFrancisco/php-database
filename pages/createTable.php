<?php
if (!isset($_SESSION['user'])) {
	header('location: index.php?dir=pages&file=home');
}

require_once "db/connection.php";

// if (!isset($_POST['dbTable'])) {
	$tableName = 'register';
	$conn = newConnection('universe_god');
	$sql = "CREATE TABLE IF NOT EXISTS {$tableName} (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fullname VARCHAR(100) NOT NULL,
		birthDate DATE,
		email VARCHAR(100) NOT NULL,
		site VARCHAR(100) NOT NULL,
		children INT,
		salary FLOAT
	)";

// 	$result = $conn->query($sql);

// 	if ($result) {
// 		$_SESSION['success'] = "Table {$tableName} created successfuly!";
// 		$_SESSION['error'] = null;
// 		$conn->close();

// 		// header('location: index.php?dir=pages&file=createTable');
// 	}

// }
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
	<h1>Create a table!</h1>
	<h3>Here you can create a new table for the database!</h3>
	<form action="" method="post">
		<label for="dbTable">Table name:</label>
		<input class="m-2" type="text" name="dbTable" id="dbTable" disabled value="register">
		<button class="btn btn-green m-2" type="submit">Create table!</button>
	</form>
</div>