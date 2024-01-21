<?php

namespace App\Controllers;
session_start();
use App\Models\Controller;

class Login extends Controller
{
    protected function action()
    {
        $template = __DIR__ . '/../../templates/login.php';
        $this->view->display($template);
        require __DIR__ . '/../Models/Authentication.php';
        $authentication = new \Authentication();
        $authentication->checkPassword();
        $authentication->entranceTo();
    }

}