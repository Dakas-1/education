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
            $query = $db->query(
                $sql,
                $data,
                static::class
            );
            return $query[0];
        } else {
            return false;
        }
    }

    public function insert()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;

        }
        $sql = '
        INSERT INTO' . static::TABLE . '
         (' . implode(',', $cols) . ')
         VALUES
         (' . implode(',', array_keys($data)) . ')
         ';
        require_once __DIR__ . '/Models/Db.php';
        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

    public function update()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $string[] = $name . ' = ' . "'" . $value . "'";
        }
        $data = [':id' => $this->id];
        $sql = '
        UPDATE' . static::TABLE . '
        SET ' . implode(', ', $string) . ' 
        WHERE id=:id
         ';
        require_once __DIR__ . '/Models/Db.php';
        $db = new Db();
        $db->execute($sql, $data);
    }

    public function save()
    {
        if ($this->id === null) {
            self::insert();
        } else {
            self::update();
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM news
                WHERE id=:id
                ';
        $data = [':id' => $this->id];
        if (null !== $this->id) {
            $db = new Db();
            $db->execute($sql, $data);
        }
    }
}

?>