<?php
$images = [1 => '01.jpg', 2 => '02.jpg', 3 => '03.jpg', 4 => '04.jpg'];

if (array_key_exists('id', $_GET)) {
    echo '<img src="http://php1.local/lesson3images/images/' . $images[$_GET['id']] . '"</img>'; // <img src="images/03.img"></img>
} else {
    echo 'нихуя не найдено';
}
?>