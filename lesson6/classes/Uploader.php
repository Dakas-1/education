<?php

class Uploader
{
    protected $userFile;

//3.1 В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($userFile)
    {
        $this->userFile = $userFile;
    }

//3.2 Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded()
    {
        if (isset($_FILES[$this->userFile])) {

            if (0 == $_FILES[$this->userFile] ['error']) {
                if (is_uploaded_file($_FILES[$this->userFile] ['tmp_name'])) {
                    return true;
                }
            }
        }
        return false;
    }

//3.3 Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($_FILES[$this->userFile] ['tmp_name'],
                __DIR__ . '/userfile/' . $_FILES[$this->userFile]['name']);
        }
    }
}

$userFile = 'userfile';
$obj = new Uploader($userFile)

?>