<?php

namespace App\Models;

require __DIR__ . '/../autoload.php';

use App\Model;
class Users extends Model
{
    public const TABLE = ' users';
    public $user;
    public $hash;
}