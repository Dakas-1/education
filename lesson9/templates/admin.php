
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
<form
    method="post"
    enctype="multipart/form-data"
>
    Файл: <input type="file" name="myimg"><br>
    <input type="submit">
</form>
<form
        method="post"
        enctype="multipart/form-data"
>
    Файл: <input type="text" name="albumsName" placeholder="Введите название альбома">
    <input type="text" name="dateOfRelease" placeholder="Введите год релиза"><br>
    <input type="submit">
</form>
</body>
</html>
