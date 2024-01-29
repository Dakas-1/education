<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<a href = "/lesson13/public/index.php/?ctrl=Index">На главную</a>;
<?php
if (isset($this)) {
    foreach ($this->article as $key => $article) {
        echo '<h3><a href="http://php1.local/lesson13/public/index.php/?ctrl=Admin&id=' . $article->id . '">' . $article->title . '</a></h3>';

    }
}
?>
<br>
<form method="post">
    <p><label for="field1">Редактор статьи:</label></p>
    <p><textarea name="title" id="field1"><?php
            if (isset($_GET['id']) && isset($this)) {
                $article = \App\Models\Article::findById($_GET['id']);
                echo $article->title;
            }
            ?></textarea></p>

    <p><label for="field2">Содержание статьи:</label></p>
    <p><textarea name="content" id="field2"><?php
            if (isset($_GET['id']) && isset($this)) {
                echo $article->content;
            }
            ?></textarea></p>

    <p><input type="submit" name="push" value="Отправить"></p>
    <?php
    if (isset($_GET['id']) && isset($this)) {
        echo '<p><input type="submit" name="delete" value="Удалить"></p>';
    }
    ?>
</form>
</body>
</html>