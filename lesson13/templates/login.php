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
     method="post">
    <label>Введите Ваш логин</label>
    <input type="text" name="login" placeholder="Введите Ваш логин" required>
    <label>Введите Ваш пароль</label>
    <input type="password" name="auth_pass" placeholder="Введите пароль" required>
    <button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button>
</form>
 <label>Нажмите, если не были ранее зарегистрированы</label>
 <a href = "/lesson13/public/index.php/?ctrl=Registration">Регистрация</a><br>
</body>
</html>