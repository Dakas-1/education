<?php
session_start();
require __DIR__ . '/Models/View.php';
$template = __DIR__ . '/templates/login.php';
$view = new View();
$view->display($template);
require __DIR__ . '/Models/Authentication.php';
$authentication = new Authentication();
$authentication->checkPassword();
$authentication->entranceTo();

?>