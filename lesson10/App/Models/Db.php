<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../../config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']);
    }

    public function query(string $sql, array $data, string $class)
    {
        $sth = $this->dbh->prepare($sql);
        if (isset($data)) {
            $sth->execute($data);
        } else {
            $sth->execute();
        }
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute(string $query, array $params)
    {
        $sth = $this->dbh->prepare($query);
        if ($sth->execute($params) !== null) {
            return true;
        } else {
            return false;
        }
    }
}

?>