<?php

namespace App\Controllers;

require __DIR__ . '/../autoload.php';

class Exitclass

{
   public function __construct()
    {
        session_start();

        $_SESSION = [];

        session_destroy();

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }

        header("Location: http://php1.local/lesson13/public/index.php/?ctrl=Login");
        exit();
    }
}