<?php
session_start();
?>
<?php
$login = $_POST['login'];
$password = $_POST['auth_pass'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$path = __DIR__ . '/login.txt';
$f = fopen($path, 'a');
fwrite($f, $login);
fwrite($f, '###');
fwrite($f, $hashed_password);
fwrite($f, PHP_EOL);
?>
<?php
require('login.php');
?>
