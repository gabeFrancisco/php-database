<?php
session_start();

?>

<header>
	<div class="main-header">
		<img src="../assets//images//db.png" alt="DB Logo" />
		<div class="menu">
			<ul>
				<li>
					<a class="menu-link" href="?dir=pages&file=home">Home</a>
				</li>
				<li>
					<a class="menu-link" href="?dir=pages&file=contact">Contact</a>
				</li>
				<?php if (isset($_SESSION['user'])): ?>
				<li>
					<a class="menu-link" href="?dir=pages&file=createDb">Create database</a>
				</li>
				<li>
					<a class="menu-link" href="?dir=pages&file=createTable">Create table</a>
				</li>
				<li>
					<a class="menu-link" href="?dir=pages&file=insertItem">Insert item</a>
				</li>
				<li>
					<a class="menu-link" href="?dir=pages&file=readTable">Read Table</a>
				</li>
				<?php
endif ?>
			</ul>
		</div>
	</div>
	<div class="auth">
		<?php if ($_SESSION['user']): ?>
		<p>Welcome
			<?php echo $_SESSION['user']['username']?>!
		</p>
		<a class="btn btn-red m-3" href="logout.php">Logout</a>
		<?php
else: ?>
		<p>Welcome Visitor!</p>
		<a class="btn btn-blue m-3" href="login.php">Login</a>
		<?php
endif ?>
	</div>
</header>