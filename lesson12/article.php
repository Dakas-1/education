<?php
$template = __DIR__ . '/templates/article.php';
require __DIR__ . '/App/Models/Article.php';
require __DIR__ . '/App/Models/View.php';
$id = $_GET['id'];
$view = new View();
$view->article = Article::findById($id);
$view->display($template);
