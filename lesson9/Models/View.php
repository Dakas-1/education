<?php

class View
{
    public $data;

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        if ($this->data !== null) {
            foreach ($this->data as $key => $value) {
                $$key = $value;
            }
        }
        include $template;
    }
}
?>