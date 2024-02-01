<?php

use App\Exceptions\DbException;
use App\Exceptions\NotFoundException;
use App\Models\Logger;
require __DIR__ . '/../App/autoload.php';
$pathToLoggFile = __DIR__ . '/../logger.txt';
$logg = new Logger($pathToLoggFile);
$ctrl = $_GET['ctrl'] ?? 'Index';
$context = [];
if (isset ($_GET['id'])){
    $context[] = $_GET['id'];
}
try {
    $class = '\App\Controllers\\' . $ctrl;
    $ctrl = new $class;
    $ctrl();
}catch (DbException $error){
    $logg->error($error->getMessage(), $context);
    echo 'Ошибка в базе данных' . $error->getMessage();
    die();
}catch (NotFoundException $error){
    $logg->error($error->getMessage(), $context);
    echo $error->getCode() . $error->getMessage();
    die;
}