<?php
require __DIR__ . '/App/Model.php';
require __DIR__ . '/App/Models/Article.php';
require __DIR__ . '/App/Models/View.php';
$template = __DIR__ . '/templates/index.php';
$data = [];
$partOfSql = ' LIMIT 3';
$news = Article::findAll($partOfSql, $data);
View::assign('news', $news);
View::display($template);
?>