<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
$f = file (__DIR__ . '/гости.txt');
foreach ($f as $name) {
    echo $name ;
    echo '<br>' ;
}
?>

<form
    action="/lesson4/write.php" method="get">
    Имя: <input type="text" name="x1">
    Фамилия: <input type="text" name="x2">
    <input type="submit" value="Отправить">
</form>
</body>
</html>