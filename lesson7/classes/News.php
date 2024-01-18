<?php
require __DIR__ . '/Article.php';
class News
{
    public $data;

    public function __construct($path)
    {
        $file = file_get_contents($path);
        $array = explode('####', $file);

        foreach ($array as $value) {
            $articleArray = explode('###', $value);

            if (count($articleArray) < 2) {
                continue;
            }
            $article = new Article();
            $article->header = $articleArray[0];
            $article->text = $articleArray[1];
            $this->data[] = $article;
            //var_dump($article->text);
        }
    }
}
//$news = new News(__DIR__ .'/../news.txt');
//var_dump($news->data);

?>