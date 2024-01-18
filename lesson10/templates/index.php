<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($news)) {
    foreach ($news as $key => $article) {
        echo '<h1><a href="http://php1.local/lesson10/article.php?id=' . $article->id . '">' . $article->title . '<a></a></h1>';
        echo '<p>' . mb_strimwidth($article->content, 0, 88, '...') . '</p>';
    }
}
?>
</body>
</html>
