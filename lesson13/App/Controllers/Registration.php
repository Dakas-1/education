<?php

namespace App\Controllers;

use App\Models\Controller;

require_once __DIR__ . '/../Models/Article.php';
require_once __DIR__ . '/../Models/Controller.php';

class Registration extends Controller
{

    protected function action()
    {

        $template = __DIR__ . '/../../templates/registration.php';
        $this->view->display($template);
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            $login = $_POST['login'];
            $password = $_POST['auth_pass'];
            $this->registration($login, $password);
        }
    }

    protected function registration(string $login, string $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        require_once __DIR__ . '/../Models/Db.php';
        $Db = new \Db();
        $sql = "INSERT INTO users (user, hash) VALUES (:user, :hash)";
        $data = ['user' => $login, 'hash' => $hashed_password];
        $Db->execute($sql, $data);
        header("Location: ./login.php");
    }
}
