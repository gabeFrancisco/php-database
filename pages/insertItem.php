<?php

require_once 'db/connection.php';

$conn = newConnection("universe_god");
$sql = "INSERT INTO register VALUES(
	NULL,
	'Gabriel Francisco',
	'1999-03-29',
	'gabrielsfrancisco508@gmail.com',
	'www.genesis.dev',
	2,
	5700.00
)";

$result = $conn->query($sql);
$conn->close();
if($result){
	echo 'Success!';
}
else{
	echo 'Error';
}

?>

<div class="content">
	<?php if (isset($_SESSION['error'])): ?>
	<div class="card card-red">
		<?php echo $_SESSION['error']?>
	</div>
	<?php
elseif (isset($_SESSION['success'])): ?>
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