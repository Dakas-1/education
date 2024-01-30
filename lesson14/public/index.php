<?php

use App\Exceptions\DbException;
use App\Exceptions\NotFoundException;

require __DIR__ . '/../App/autoload.php';
$ctrl = $_GET['ctrl'] ?? 'Index';
try {
    $class = '\App\Controllers\\' . $ctrl;
    $ctrl = new $class;
    $ctrl();
}catch (DbException $error){
    echo 'Ошибка в базе данных' . $error->getMessage();
    die();
}catch (NotFoundException $error){
    echo $error->getCode() . $error->getMessage();
    die;
}