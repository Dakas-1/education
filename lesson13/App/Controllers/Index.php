<?php

namespace App\Controllers;

use App\Models\Controller;

require_once __DIR__ . '/../Models/Article.php';
require_once __DIR__ . '/../Models/Controller.php';

class Index extends Controller

{

    protected function action()
    {
        $data = [];
        $partOfSql = '';
        $this->view->article = \Article::findAll($partOfSql, $data);
        $template = __DIR__ . '/../../templates/index.php';
        $this->view->display($template);
    }


}