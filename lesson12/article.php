<?php
$template = __DIR__ . '/templates/article.php';
require __DIR__ . '/App/Models/Article.php';
require __DIR__ . '/App/Models/View.php';
$data = [];
$partOfSql = '';
$id = $_GET['id'];
$view = new View();
$view->articles = Article::findById($id);
$view->display($template);
