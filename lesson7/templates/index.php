<?php
foreach ($news->data as $key => $article) {
        echo '<h1><a href="http://php1.local/lesson7/article.php?id=' . $key . '">' . $article->header . '<a></a></h1>';
        echo '<p>' . mb_strimwidth($article->text, 0, 88, '...') . '</p>';
        //var_dump($news->data);
    }
?>