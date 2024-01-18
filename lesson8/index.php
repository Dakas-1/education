<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';
$template = __DIR__ .'/templates/index.php';
$news = new News();
$view = new View();
$view->assign( 'news', $news);
$view->display($template);
//var_dump($view->data);
?>