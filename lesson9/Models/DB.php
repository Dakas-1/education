<?php

class DB
{
    public function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new PDO($dsn, $config['username'], $config['password']);
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll();
    }

    public function uploadingLog(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
    }
}