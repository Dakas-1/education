<?php

class DB
{
    public $dbh;
//1.1 В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
public function __construct(){
    $config = include __DIR__ . '/../config.php';
    $dsn = 'mysql:host=' . $config['host'] .';dbname=' . $config['dbname'];
   $this->dbh = new PDO($dsn,$config['username'],$config['password']);
}
//1.2 Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
public function execute(string $sql){
    $sth =$this->dbh->prepare($sql);
   if ($sth->execute() !== null){
       return true;
   }else{
       return false;
   }
}
//1.3 Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата
// запроса либо false, если выполнение не удалось
public function query(string $sql, array $data){
    $sth =$this->dbh->prepare($sql);
    $sth->execute($data);
    return $sth->fetchAll();
}
}
//$sql='SELECT*FROM news WHERE header=:header';
//$DB = new DB();
//$DB->query($sql,[':firstName'=>'Иван']);
