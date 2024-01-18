<?php
//session_start();
require __DIR__ . '/App/Models/Article.php';
require __DIR__ . '/App/Models/View.php';
$template = __DIR__ . '/templates/admin.php';
$data = [];
$partOfSql = '';
$news = Article::findAll($partOfSql, $data);
View::assign('news', $news);
View::display($template);
if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_GET['id']) === false) {
    $article = new Article();
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
    header('Location: http://php1.local/lesson11/admin.php');
} elseif (isset($_GET['id'])) {
    $result = Article::findById($_GET['id']);
    $article = null;
    if (isset($result[0])) {
        $article = $result[0];
    }
    if (isset ($_POST['title']) && isset ($_POST['content']) && isset ($_POST['delete']) === false) {
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->save();
        header('Location: http://php1.local/lesson11/admin.php');
    }elseif (isset($_POST['delete'])){
        $article->delete();
        header('Location: http://php1.local/lesson11/admin.php');
    }
} else {
    echo 'данные не были добавлены';
}