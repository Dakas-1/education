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
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$path = __DIR__ . '/гости.txt';
$f = fopen($path, 'a');
fwrite($f, PHP_EOL);
fwrite($f, $x1);
fwrite($f, " ");
fwrite($f, $x2);
fclose($f);
?>
<a href="/lesson4/book.php">На главную страницу</a>
</body>
</html>