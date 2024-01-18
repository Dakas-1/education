<?php
require_once __DIR__ . '/App/Models/Article.php';
require_once __DIR__ . '/App/Models/View.php';
$template = __DIR__ . '/templates/index.php';
$data = [];
$partOfSql = '';
$view = new View();
$view->articles = Article::findAll($partOfSql, $data);
$view->display($template);
