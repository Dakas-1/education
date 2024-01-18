<?php
require __DIR__ . '/classes/News.php';
$news = new News(__DIR__ . '/news.txt');

    if (array_key_exists('id', $_GET)) {
        echo $news->data[$_GET['id']]->text;
    }
?>