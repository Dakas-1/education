<?php
//session_start();
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
<form class="form_auth_style"
      action="/lesson5/identification.php" method="post">
    <label>Введите Ваш логин</label>
    <input type="text" name="login" placeholder="Введите Ваш логин">
    <label>Введите Ваш пароль</label>
    <input type="password" name="auth_pass" placeholder="Введите пароль">
    <button class="form_auth_button" type="submit" name="form_auth_submit">Регистрация</button>
</form>
</body>
</html>
