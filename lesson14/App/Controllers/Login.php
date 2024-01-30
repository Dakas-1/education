<?php

namespace App\Controllers;

session_start();

require __DIR__ . '/../autoload.php';

use App\Models\Authentication;


class Login extends Controller
{
    protected function action()
    {
        $template = __DIR__ . '/../../templates/login.php';
        $this->view->display($template);
        require __DIR__ . '/../Models/Authentication.php';
        $authentication = new Authentication();
        if (isset($_POST['login']) && isset($_POST['auth_pass'])) {
            $login = $_POST['login'];
            $password = $_POST['auth_pass'];
            $authentication->checkPassword($login, $password);
            $authentication->entranceTo($login, $password);
        }
    }

}