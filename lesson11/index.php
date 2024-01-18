<?php
//session_start();
require __DIR__ . '/App/Models/View.php';
//if (isset($_SESSION['user'])) {
  //  if ($_SESSION['user'] === 'admin') {
        echo '<a href="http://php1.local/lesson11/admin.php">Админ-панель</a><br>';
        echo 'вы вошли как администратор';
   // }
//} else {
  //  echo 'вы вошли как гость';
//}
//if (isset($_SESSION['user']) && $_SESSION['user'] === 'user') {
   // echo 'вы вошли как пользователь';
//}

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