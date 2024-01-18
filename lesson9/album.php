<?php
$template = __DIR__ . '/templates/album.php';
require __DIR__ . '/Models/AllMusicAlbums.php';
require __DIR__ . '/Models/View.php';
$AllMusicAlbums = new AllMusicAlbums();
$view = new View();
$view->assign('music', $AllMusicAlbums);
$view->display($template);
?>
