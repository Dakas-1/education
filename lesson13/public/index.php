<?php
require __DIR__ . '/../App/Controllers/Article.php';
require __DIR__ . '/../App/Controllers/Index.php';
require_once __DIR__ . '/../App/Models/View.php';
require __DIR__ . '/../App/Controllers/Admin.php';
require __DIR__ . '/../App/Controllers/Registration.php';
require __DIR__ . '/../App/Controllers/Login.php';
require __DIR__ . '/../App/Controllers/ExitClass.php';
$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\App\Controllers\\' . $ctrl;
$ctrl = new $class;
$ctrl();