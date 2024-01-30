<?php

namespace App;

class Config
{
    private static $config;
    public $data;


    private function __construct()
    {
        $path = __DIR__ . '/Models/config.txt';
        $file = file_get_contents($path);
        $string = explode(PHP_EOL, $file);
        $this->data['db']['host'] = $string[0];
        $this->data['db']['dbname'] = $string[1];
        $this->data['db']['user'] = $string[2];
        $this->data['db']['password'] = $string[3];
    }

    public static function getConfig()
    {
        if (!isset(self::$config)) {
            self::$config = new self();
        }
        return self::$config;
    }
}

?>