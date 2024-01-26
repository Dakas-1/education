<?php

namespace App\Controllers;
use App\Models\Controller;

require_once __DIR__ . '/../Models/Article.php';
require_once __DIR__ . '/../Models/Author.php';
require_once __DIR__ . '/../Controllers/Controller.php';

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
        if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_POST['author']) && isset ($_GET['id']) === false) {
            $article = new \Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $author = new \Author();
            $author->name = $_POST['author'];
            $article->save();
            $author->save();
            header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
        } elseif (isset($_GET['id'])) {
                $article = \Article::findById($_GET['id']);
                if ($article) {
                    $author = \Author::findById($article->author_id);
                }
            if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_POST['delete']) === false) {
                $article->title = $_POST['title'];
                $article->content = $_POST['content'];
                $author->name = $_POST['author'];
                $article->save();
                $author->save();
                header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
            }elseif (isset($_POST['delete'])){
                $article->delete();
                $author->delete();
                header('Location: http://php1.local/lesson13/public/index.php/?ctrl=Admin');
            }
        } else {
            echo 'данные не были добавлены';
        }
    }
}