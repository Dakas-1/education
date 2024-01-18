
<?php
$div_gender = $_POST['name'];

if (str_contains($div_gender, 'та') || str_contains($div_gender, 'на') || str_contains($div_gender, 'ия'))  {
    echo 'female';
}
if (str_contains($div_gender, 'ий')  || str_contains($div_gender, 'др') || str_contains($div_gender, 'ей')) {
    echo 'male';
}else {
    echo 'Введено имя ящера, а не руса';
}
var_dump(str_contains($div_gender, 'та') || (str_contains($div_gender, 'на') || (str_contains($div_gender, 'ия') || (str_contains($div_gender, 'ий') || (str_contains($div_gender, 'др') || (str_contains($div_gender, 'ей')))))));
assert( true === str_contains($div_gender,'та') );
assert( true === str_contains($div_gender,'на') );
assert( true === str_contains($div_gender,'ия') );
assert( true === str_contains($div_gender,'ий') );
assert( true === str_contains($div_gender,'др') );
assert( true === str_contains($div_gender,'ей') );
?><hr>
