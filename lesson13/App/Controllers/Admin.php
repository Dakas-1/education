<?php

namespace App\Controllers;
use App\Models\Controller;

require_once __DIR__ . '/../Models/Article.php';
require_once __DIR__ . '/../Models/Controller.php';

class Admin extends Controller
{
    protected function action()
    {
        $data = [];
        $partOfSql = '';
        $this->view->article = \Article::findAll($partOfSql, $data);
        $template = __DIR__ . '/../../templates/admin.php';
        $this->view->display($template);
        $this->Crud();
    }
    public function Crud()
    {
        if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_GET['id']) === false) {
            $article = new \Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
            header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
        } elseif (isset($_GET['id'])) {
            $result = \Article::findById($_GET['id']);
            $article = null;
            if (isset($result)) {
                $article = $result;
            }
            if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_POST['delete']) === false) {
                $article->title = $_POST['title'];
                $article->content = $_POST['content'];
                $article->save();
                header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
            }elseif (isset($_POST['delete'])){
                $article->delete();
                header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
            }
        } else {
            echo 'данные не были добавлены';
        }
    }
}