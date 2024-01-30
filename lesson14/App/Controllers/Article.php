<?php

namespace App\Controllers;

session_start();

use App\Exceptions\NotFoundException;

require __DIR__ . '/../autoload.php';

class Article extends Controller
{


    protected function action()
    {
//        $id = $_GET['id'];
//        $res = $this->view->article = \App\Models\Article::findById($id);
//        if (!$res){
//            throw new NotFoundException();
//        }
//        $template = __DIR__ . '/../../templates/article.php';
//        $this->view->display($template);
        //$id = $_GET['id'];
        //$this->view->article = \App\Models\Article::findById($id);
        //$template = __DIR__ . '/../../templates/article.php';
        //$this->view->display($template);
        $data = [
            'title' => 'Заголовок',
            'content' => 'Текст новости',
            'author_id' => '1'
        ];
        $articles = new \App\Models\Article();
        $this->view->article = $articles->fill($data);
        var_dump($this->view->article);
    }
}