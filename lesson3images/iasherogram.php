<?php
$images = [1 => '01.jpg', 2 => '02.jpg', 3 => '03.jpg', 4 => '04.jpg'];
?>


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
foreach ($images as $id => $val) {
echo '<a href="http://php1.local/lesson3images/images.php?id=' . $id . '"><img src="images/' . $val .'"
width="189" height="255" alt="реклама"></a>' . PHP_EOL;
}
?>
