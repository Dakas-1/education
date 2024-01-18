<?php
//$template = __DIR__ .'/../templates/index.php';
//require __DIR__ . '/News.php';
//$news = new News();
class View
{
    public $data;
//1.2 Есть метод assign($name, $value), чья задача - сохранить данные, передаваемые в шаблон по заданному имени
// (используйте защищенное свойство - массив для хранения этих данных)
    public function assign($name, $value){
        $this->data[$name] = $value;
    }


//1.3 Есть метод display($template), который отображает указанный шаблон с заранее сохраненными данными
    public function display( $template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;//из названия ключа автоматически создает переменную
        }
        include $template;
    }
//1.4* Метод render($template), который аналогичен методу display(), но не выводит шаблон с данными в браузер, а возвращает его
   //public function render($template)
    //{
      //  ob_start();
       // $this->display($template);
        //$out = ob_get_contents();
        //ob_end_clean();

        //return $out;
    //}
}
//$view = new View();
//$view->assign('news', $news->data);
//var_dump($view->data);