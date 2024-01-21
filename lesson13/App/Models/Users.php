<?php
require_once __DIR__ . '/Author.php';
require_once __DIR__ . '/../Model.php';
class Users extends Model
{
    public const TABLE = ' users';
    public $user;
    public $hash;
}