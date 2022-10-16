<?php
session_start();

if ($_SESSION['user']) {
	header('location: index.php?dir=pages&file=home');
}

$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST['username']) {
	$users = [
		[
			'username' => 'gabeFrank',
			'password' => '98673148'
		],
		[
			'username' => 'saraLimberger',
			'password' => '98673147'
		],
		[
			'username' => 'god',
			'password' => '777777'
		]
	];

	foreach ($users as $user) {
		$validUser = $username === $user['username'];
		$validPassword = $password === $user['password'];

		if ($validUser && $validPassword) {
			$_SESSION['errors'] = null;
			$_SESSION['user'] = $user;

			$expirationDate = time() + 60 * 60 * 24 * 30;
			setcookie('user', $user['username'], $expirationDate, '/');

			header('location: index.php?dir=pages&file=home');
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database Login</title>
	<link rel="stylesheet" href="./assets/styles.css">
</head>

<body>
	<div class="login-page">
		<div class="login-container">
			<h1>Login</h1>
			<form action="" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username">
				</div>
				<div class="form-group">
					<label for="username">Password</label>
					<input type="password" name="password" id="password">
				</div>
				<div class="button-area">
					<a class="btn m-4" href="index.php?dir=pages&file=home">Home</a>
					<button class="btn btn-blue m-4" type="submit">Submit!</button>
				</div>

			</form>
		</div>
	</div>
</body>

</html>