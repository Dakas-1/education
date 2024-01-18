<?php

require_once __DIR__ . '/../Model.php';

class Article extends Model
{
    public const TABLE = ' news';
    public $title;
    public $content;


}

?>