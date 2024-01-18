<?php
session_start();
require __DIR__ . '/Models/DB.php';
$template = __DIR__ . '/templates/admin.php';
require __DIR__ . '/Models/View.php';
$view = new View();
$view->display($template);
$DB = new DB();
if (isset ($_FILES['myimg'])) {
    $sql = "INSERT INTO download_log (user, picture) VALUES (:user, :picture)";
    $data = ['user' => $_SESSION['user'], 'picture' => $_FILES['myimg']['name']];
    $DB->uploadingLog($sql, $data);
    require __DIR__ . '/Models/Uploading.php';
    $loading = new Uploading();
}
if (isset ($_POST['albumsName']) && isset ($_POST['dateOfRelease'])) {
    $sql = "INSERT INTO music (albumsName, dateOfRelease) VALUES (:albumsName, :dateOfRelease)";
    $data = ['albumsName' => $_POST['albumsName'], 'dateOfRelease' => $_POST['dateOfRelease']];
    $DB->uploadingLog($sql, $data);
}
?>
