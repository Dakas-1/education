<?php

class View
{
    public static $data;

    public static function assign(string $name, array $value)
    {
        View::$data[$name] = $value;
    }

    public static function display(string $template)
    {
        if (View::$data !== null) {
            foreach (View::$data as $key => $value) {
                $$key = $value;
            }
        }
        include $template;
    }
}
?>