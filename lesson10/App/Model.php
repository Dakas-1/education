<?php
abstract class Model
{
    public const TABLE = '';
    public $id;

    public static function findAll(string $partOfSql, array $data)
    {
        require_once __DIR__ . '/Models/Db.php';
        $db = new Db();
        $sql = 'SELECT * FROM' . static::TABLE . $partOfSql;
        return $db->query(
            $sql,
            $data,
            static::class
        );
    }

    public static function findById(int $id)
    {
        require_once __DIR__ . '/Models/Db.php';
        $db = new Db();
        $sql = 'SELECT * FROM' . static::TABLE . ' WHERE id=:id';
        $data = [':id' => $id];
        if ($db->query(
                $sql,
                $data,
                static::class
            ) !== null) {
            return $db->query(
                $sql,
                $data,
                static::class
            );
        } else {
            return false;
        }
    }
}

?>