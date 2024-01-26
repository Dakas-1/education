<?php

namespace App\Controllers;
session_start();
use App\Models\Controller;
require_once __DIR__ . '/../Models/Article.php';
require_once __DIR__ . '/../Controllers/Controller.php';

class Article extends Controller
{


    protected function action()
    {
        $id = $_GET['id'];
        $this->view->article = \Article::findById($id);
        $template = __DIR__ . '/../../templates/article.php';
        $this->view->display($template);
    }
}