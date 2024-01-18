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
<h3 class="url">
    <a href="http://php1.local/lesson9/album.php">Альбомы</a>
</h3>
<?php
foreach ($images as $id) {
    if ('.' !== $id && '..' !== $id) {
        echo '<img src="/lesson9/images/' . $id . '"width="189" height="255" alt="альбом"></a>';
        echo " ";
    }
}
?>
<br>


</body>
</html>