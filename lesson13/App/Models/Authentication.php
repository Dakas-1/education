<?php

class Authentication
{
    public function checkPassword()
    {
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            require_once __DIR__ . '/Users.php';
            $partOfSql = ' WHERE user=:user';
            $data = ['user' => $_POST['login']];
            $users = Users::findAll($partOfSql, $data);
            if ($_POST['login'] === $users[0]->user && password_verify($_POST['auth_pass'], $users[0]->hash)) {
                return true;
            } else {
                return false;
            }
        }}
    public function entranceTo()
    {
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            if ($this->checkPassword() !== false) {
                $_SESSION['user'] = $_POST['login'];
                header("Location: ./?ctrl=Index");
            }
        }
    }
}