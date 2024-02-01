<?php

namespace App\Models;

use App\Model;

require __DIR__ . '/../autoload.php';

class Article extends Model

{
    use CustomPropertiesTrait;

    public const TABLE = ' news';
    public $title;
    public $content;
    public $author_id;

}
