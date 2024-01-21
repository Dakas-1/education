<?php
/** @var View $this */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<article>
    <h2><?php echo $this->article->title; ?></h2>
    <p><?php echo $this->article->content; ?></p>
    <p><?php echo $this->article->author->name; ?></p>

</article>
</body>
</html>
