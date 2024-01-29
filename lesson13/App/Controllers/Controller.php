<?php

namespace App\Controllers;

use App\Models\View;

require __DIR__ . '/../autoload.php';


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access(string $whoIs): bool
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] === $whoIs) {
            return true;
        } else {
            return false;
        }
    }


    public function __invoke()
    {
        if ($this->access('admin')) {
            if ($this->access('admin') && isset($_GET['ctrl']) && ($_GET['ctrl'] !== 'Registration' && $_GET['ctrl'] !== 'Login' && $_GET['ctrl'] !== 'Admin' )) {
                echo '<a href = "/lesson13/public/index.php?ctrl=Admin">Админ-панель</a><br>';
                echo '<a href = "/lesson13/public/index.php?ctrl=ExitClass">Выход</a><br>';
            }
            echo 'Вы вошли как администратор<hr>';
            $this->action();
        } elseif ($this->access('user') && isset($_GET['ctrl']) && ($_GET['ctrl'] !== 'Admin')) {
            echo 'Вы вошли как пользователь<hr>';
            echo '<a href = "/lesson13/public/index.php?ctrl=ExitClass">Выход</a>';
            $this->action();
        } else {
            if ($_GET['ctrl'] === 'Index' || $_GET['ctrl'] === 'Article') {
                echo 'Вы вошли как гость<hr>';
                echo '<a href = "/lesson13/public/index.php?ctrl=Registration">Регистрация</a><hr>';
                echo '<a href = "/lesson13/public/index.php?ctrl=Login">Вход</a><hr>';
                $this->action();
            } elseif (isset($_GET['ctrl']) && ($_GET['ctrl'] === 'Registration' || $_GET['ctrl'] === 'Login')) {
                $this->action();
            } else {
                echo 'Доступ запрещён<hr>';
                echo '<a href = "/lesson13/public/index.php?ctrl=Index">На главную</a>';
                die;
            }

        }

    }

    abstract protected function action();
}