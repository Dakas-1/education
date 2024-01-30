<?php
namespace App\Models;

use App\Model;

require __DIR__ . '/../autoload.php';

class Author extends Model
{
    public const TABLE = ' authors';
    public $name;
}