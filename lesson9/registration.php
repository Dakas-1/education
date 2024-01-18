<?php
$template = __DIR__ . '/templates/registration.php';
require __DIR__ . '/Models/View.php';
$view = new View();
$view->display($template);
if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
    $login = $_POST['login'];
    $password = $_POST['auth_pass'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    require __DIR__ . '/Models/DB.php';
    $DB = new DB();
    $sql = "INSERT INTO users (user, hash) VALUES (:user, :hash)";
    $data = ['user' => $login, 'hash' => $hashed_password];
    $DB->uploadingLog($sql, $data);
    header("Location: ./login.php");
}
?>
