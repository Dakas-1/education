<?php

namespace App\Models;

require __DIR__ . '/../autoload.php';

/**
 * @property array $articles;
 * @property array $author;
 * @property array $authors;
 */
class View implements \Countable, \ArrayAccess
{
    use CustomPropertiesTrait;

    protected $data = [];


    public function render(string $template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }

    public function count(): int
    {
        return count($this->data);
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->data[$offset]);
    }

}