
<?php
$template = __DIR__ . '/templates/article.php';
require __DIR__ . '/App/Models/Article.php';
require __DIR__ . '/App/Models/View.php';
$data = [':id' => $_GET['id']];
$partOfSql = ' WHERE id=:id';
$result = Article::findById($_GET['id']);
View::assign('news', $result);
View::display($template);
?>