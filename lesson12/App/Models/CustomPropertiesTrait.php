<?php

trait CustomPropertiesTrait
{
    public function __get(string $name){
       if ($name === 'author' && $this instanceof Article) {
            $author = Author::findById($this->author_id);
            return $author;
        } else {
            return $this->data[$name] ?? null;
        }
    }

    public function __isset(string $name)
    {
        return isset($isset->data[$name]);
    }

    public function __set(string $name, mixed $value)
    {
        $this->data[$name] = $value;
    }
}
