<?php

namespace App\Models;

use App\Config;
use App\Exceptions\DbException;

require __DIR__ . '/../autoload.php';

class Db
{
    protected $dbh;

    public function __construct()
    {
        try{
        $config = Config::getConfig();
        $this->dbh = new \PDO(
            'mysql:host='
            . $config->data['db']['host'] .
            ';dbname='
            . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']);
        } catch (\PDOException){
            throw new DbException('Ошибка подключения к БД');
        }
    }

    public function query(string $sql, array $data, string $class)
    {
        $sth = $this->dbh->prepare($sql);
        if (count($data) > 0) {
            $res = $sth->execute($data);
            if (!$res) {
                throw new DbException('Ошибка в запросе');
            }
        } else {
            $res = $sth->execute();
            if (!$res) {
                throw new DbException('Ошибка в запросе');
            }
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
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
