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
		<label for="tableName">Table name:</label>
		<input class="m-2" type="text" name="tableName" id="tableName">
		<button class="btn btn-green m-2" type="submit">Create table!</button>
	</form>
</div>