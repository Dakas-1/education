<?php
//1.1 В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)
class GuestBook
{
    protected $guestArray;
    protected $pathToText;
    public function __construct()
    {
        $f = file_get_contents($this->pathToText);
        $this->guestArray = explode(PHP_EOL, $f);
        $this->pathToText = __DIR__ . '/guestbook.txt';
    }

//1.2 Метод getData() возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->guestArray;
    }

//1.3 Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
        $this->guestArray[] = $text;
    }

//1.4 Метод save() сохраняет массив в файл
    public function save()
    {
        $f = fopen($this->pathToText, 'a');
        fwrite($f, $this->guestArray);
        fwrite($f, PHP_EOL);
    }
}

$guestBook = new guestBook();
var_dump($guestBook);
?>