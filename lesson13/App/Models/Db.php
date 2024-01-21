<?php
require __DIR__ . '/../Config.php';

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = \App\Config::getConfig();
        $this->dbh = new \PDO(
            'mysql:host='
            . $config->data['db']['host'] .
            ';dbname='
            . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']);
    }

    public function query(string $sql, array $data, string $class)
    {
        $sth = $this->dbh->prepare($sql);
        if (count($data) > 0) {
            $sth->execute($data);
        } else {
            $sth->execute();
        }
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute(string $query, array $params)
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);

    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}

?>