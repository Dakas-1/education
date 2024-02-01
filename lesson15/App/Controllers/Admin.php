<?php

namespace App\Controllers;

session_start();

require __DIR__ . '/../autoload.php';

use App\Models\Article;

class Admin extends Controller
{
    protected function action()
    {
        $data = [];
        $partOfSql = '';
        $this->view->article = Article::findAll($partOfSql, $data);
        $template = __DIR__ . '/../../templates/admin.php';
        $this->view->display($template);
        $this->Crud();
    }

    public function Crud()
    {
        if (isset($_POST['title']) && isset($_POST['content']) && !isset($_GET['id']) &&
            $_POST['title'] !== '' && $_POST['content'] !== '') {
            $article = new Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
            header('Location: http://php1.local/lesson14/public/index.php/?ctrl=Admin');
        } elseif (isset($_GET['id'])) {
            $article = Article::findById($_GET['id']);
            if (isset($_POST['title']) && isset($_POST['content']) && !isset($_POST['delete']) &&
                $_POST['title'] !== '' && $_POST['content'] !== '') {
                $article->title = $_POST['title'];
                $article->content = $_POST['content'];
                $article->save();
                header('Location: http://php1.local/lesson14/public/index.php/?ctrl=Admin');
            } elseif (isset($_POST['delete'])) {

                $article->delete();
                header('Location: http://php1.local/lesson14/public/index.php/?ctrl=Admin');
            }
        }
    }
}

