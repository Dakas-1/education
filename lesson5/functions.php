<?php
//$login = 'user1';
//$password = 'qwerty';
//$i = get_users_list();
//$x = existsUser($login);
//$y = check_password($password);
//$z = getCurrentUser($login, $password);
//$_FILES['myimg'];
//$_FILES['type'];
//$_FILES['name'];
//var_dump($x);
//var_dump($y);
//var_dump($z);
//var_du

function getUsersList()
{
    $path = __DIR__ . '/login.txt';
    $f = file_get_contents($path);
    $usersArray = explode(PHP_EOL, $f);
    return $usersArray;
}

function existsUser($login)
{
    $users_array = getUsersList();
    foreach ($users_array as $user) {
        $login_password = explode('###', $user);
        $saved_login = $login_password[0];
        if ($login === $saved_login) {
            return true;
        }

    }
    return false;
}

function checkPassword($login, $password)
{
    $users_array = getUsersList();
    foreach ($users_array as $user) {
        $login_password = explode('###', $user);

        if (2 !== count($login_password)) {
            continue;
        }
        $saved_login = $login_password[0];
        $saved_password = $login_password[1];
        if ($login === $saved_login && (password_verify($password, $saved_password))) {
            return true;
        }
    }

    return false;
}

function getCurrentUser()
{
    if (isset ($_POST['login'])) {
        if ($_POST['login'] === $_SESSION['user']) {
            return $_SESSION['user'];
        }
    }
    return null;
}

?>

