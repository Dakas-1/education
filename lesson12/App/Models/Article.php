<?php
require_once __DIR__ . '/Author.php';
require_once __DIR__ . '/../Model.php';
require_once __DIR__ . '/CustomPropertiesTrait.php';

class Article extends Model

{
    use CustomPropertiesTrait;

    public const TABLE = ' news';
    public $title;
    public $content;
    public $author_id;

}
