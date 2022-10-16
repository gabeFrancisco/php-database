<?php
if($_SERVER['REQUEST_URI'] === '/'){
	header('location: index.php?dir=pages&file=home');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/styles.css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500&display=swap"
		rel="stylesheet">
	<title>Database Example</title>
	<link rel="icon" href="./assets/images/db.png"/>
</head>

<body>
	<?php include('components/header.php')?>
	<?php include("{$_GET['dir']}/{$_GET["file"]}.php")?>
</body>

</html>