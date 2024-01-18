<?php

require __DIR__ . '/MusicAlbum.php';
class AllMusicAlbums

{
    public $data;

    public function __construct()
    {
        require __DIR__ . '/DB.php';
        $DB = new DB();
        $sql = 'SELECT*FROM music ORDER BY id';
        $sth = $DB->dbh->prepare($sql);
        $sth->execute();
        $allData = $sth->fetchAll();
        foreach ($allData as $albumsArray) {
            $album = new musicAlbum();
            $album->id = $albumsArray[0];
            $album->albumsName = $albumsArray[1];
            $album->dateOfRelease = $albumsArray[2];
            $this->data[] = $album;

        }
    }
}