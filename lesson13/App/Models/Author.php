<?php
require_once __DIR__ . '/../Model.php';

class Author extends Model
{
    public const TABLE = ' authors';
    public $name;
}