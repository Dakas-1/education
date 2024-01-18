<?php

class Authentication
{
    public function checkPassword()
    {
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            require_once __DIR__ . '/DB.php';
            $DB = new DB();
            $sql = 'SELECT*FROM users WHERE user=:user';
            $data = ['user' => $_POST['login']];
            $thisUser = $DB->query($sql, $data);
            foreach ($thisUser[0] as $key => $value) {
                $$key = $value;
            }
            if ($_POST['login'] === $user && password_verify($_POST['auth_pass'], $hash)) {
                return true;
            } else {
                return false;
            }
        }
    }
    public function entranceTo()
    {
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            if ($this->checkPassword() !== false) {
                $_SESSION['user'] = $_POST['login'];
                header("Location: ./index.php");
            }
        }
    }
}