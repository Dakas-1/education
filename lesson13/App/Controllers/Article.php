<?php

namespace App\Controllers;

session_start();

require __DIR__ . '/../autoload.php';

class Article extends Controller
{


    protected function action()
    {
        $id = $_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $template = __DIR__ . '/../../templates/article.php';
        $this->view->display($template);
    }
}