<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (isset($news)) {
    foreach ($news as $key => $article) {
        echo '<h3><a href="http://php1.local/lesson11/admin.php?id=' . $article->id . '">' . $article->title . '</a></h3>';
    }
}
?>
<br>
<form method="post">
    <p><label for="field1">Редактор статьи:</label></p>
    <p><textarea name="title" id="field1"><?php
            if (isset($_GET['id']) && isset($news)) {
                $result = Article::findById($_GET['id']);
                echo $result[0]->title;
            }
            ?></textarea></p>

    <p><label for="field2">Содержание статьи:</label></p>
    <p><textarea name="content" id="field2"><?php
            if (isset($_GET['id']) && isset($news)) {
                $result = Article::findById($_GET['id']);
                echo $result[0]->content;
            }
            ?></textarea></p>

    <p><input type="submit" name="push" value="Отправить"></p>
    <?php
    if (isset($_GET['id']) && isset($news)) {
        echo '<p><input type="submit" name="delete" value="Удалить"></p>';
    }
    ?>
</form>
</body>
</html>
