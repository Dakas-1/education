<?php
session_start();
require __DIR__ . '/Models/View.php';
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] === 'admin') {
        echo '<a href="http://php1.local/lesson9/admin.php">Админ-панель</a><br>';
        echo 'вы вошли как администратор';
    }
} else {
    echo 'вы вошли как гость';
}
if (isset($_SESSION['user']) && $_SESSION['user'] === 'user') {
    echo 'вы вошли как пользователь';
}
$view = new View();
$template = __DIR__ . '/templates/index.php';
$images = scandir(__DIR__ . "\images");
$view->assign('images',$images);
$view->display($template);
?>