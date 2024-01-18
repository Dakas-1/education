<?php
foreach ($news->data as $key => $article) {
        echo '<h1><a href="http://php1.local/lesson8/article.php?header=' . $article->header . '">' . $article->header . '<a></a></h1>';
        echo '<p>' . mb_strimwidth($article->text, 0, 88, '...') . '</p>';
       //var_dump($article);
    }
?>