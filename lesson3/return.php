<?php
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$operation = $_GET['operation'];
$expression = $x1 .  $operation .  $x2 . ' = ';


switch ($operation) {
    case '+';
        $result = $x1 + $x2;
        echo $expression . $result ;
        break;
    case '-';
        $result = $x1 - $x2;
        echo $expression . $result ;
        break;
    case '/';
        $result = $x1 / $x2;
        echo $expression . $result ;
        break;
    case '*';
        $result = $x1 * $x2;
        echo $expression . $result ;
        break;
}
?>

