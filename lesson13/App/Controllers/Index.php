<?php

namespace App\Controllers;

session_start();

require __DIR__ . '/../autoload.php';

use App\Models\Article;

class Index extends Controller

{

    protected function action()
    {
        $data = [];
        $partOfSql = '';
        $this->view->article = Article::findAll($partOfSql, $data);
        $template = __DIR__ . '/../../templates/index.php';
        $this->view->display($template);
    }


}