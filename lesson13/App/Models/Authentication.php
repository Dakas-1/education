<?php

class Authentication
{
    public function checkPassword(string $login, string $password)
    {
        require_once __DIR__ . '/Users.php';
        $partOfSql = ' WHERE user=:user';
        $data = ['user' => $login];
        $users = Users::findAll($partOfSql, $data);
        if ($login === $users[0]->user && password_verify($password, $users[0]->hash)) {
            return true;
        } else {
            return false;
        }
    }

    public function entranceTo(string $login, string $password)
    {
            if ($this->checkPassword($login, $password) !== false) {
                $_SESSION['user'] = $login;
                header("Location: ./?ctrl=Index");

        }
    }
}