<!doctype html>
<html lang="en">
<?php
session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$images = scandir("\Server\OSPanel\domains\php1.local\lesson5\images");
foreach ($images as $id) {
    if ('.' !== $id && '..' !== $id) {
        echo '<img src="/lesson5/images/' . $id . '"width="189" height="255" alt="реклама"></a>';
        echo " ";
    }
}
?>
<form
        method="post"
        enctype="multipart/form-data"
>
    Файл: <input type="file" name="myimg"><br>
    <input type="submit">
    <?php
    $path = __DIR__ . '/download-log.txt';
    $type = ['.jpg', '.png'];
    if (isset($_FILES['myimg']) && isset($_SESSION['user'])) {
        if ('image/jpeg' || 'images/png' == $_FILES['myimg']['type']) {
            if (0 == $_FILES['myimg'] ['error']) {
                if (is_uploaded_file($_FILES['myimg'] ['tmp_name'])) {
                    copy($_FILES['myimg'] ['tmp_name'],
                        __DIR__ . '/images/' . $_FILES['myimg']['name']) &&
                    $f = fopen($path, 'a');
                    fwrite($f, $_SESSION['user']);
                    fwrite($f, '###');
                    fwrite($f, $_FILES['myimg']['name']);
                    fwrite($f, PHP_EOL);
                }

            }

        }
        header("Refresh: 1");
    }
    echo $_SESSION['user'] ?? 'гость';
    ?>

</form>
</body>
</html>