<?php
$sql = 'SELECT*FROM news WHERE header=:header';
require __DIR__ . '/classes/DB.php';
$DB = new DB();
$news=$DB->query($sql, [':header' => $_GET['header']]);
foreach ($news[0] as $key => $value){
    $$key = $value;
}
echo $text;
?>