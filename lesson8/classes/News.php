<?php
require __DIR__ . '/Article.php';
class News
{
    public $data;
protected $data2;
    public function __construct()
    {
        require __DIR__ . '/DB.php';
        $DB = new DB();
        $sql = 'SELECT*FROM news ORDER BY id';
        $sth = $DB->dbh->prepare($sql);
        $sth->execute();
       $this->data2 = $sth->fetchAll();
        foreach ($this->data2 as $articleArray){
            $article = new Article();
            $article->header = $articleArray[0];
            $article->text = $articleArray[1];
            $article->author = $articleArray[2];
            $this->data[] = $article;

        }

    }
}


//$news = new News;
//var_dump($news->data);

?>