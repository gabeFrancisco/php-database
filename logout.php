<?php
session_start();
session_destroy();
unset($_COOKIE['user']);
setcookie('user', '');
header('location: index.php?dir=pages&file=home');
?>