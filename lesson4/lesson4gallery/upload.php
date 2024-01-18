
<?php
$type = ['.jpg', '.png'];
if (isset($_FILES['myimg'])) {
    if ( 'image/jpeg' || 'images/png' == $_FILES['myimg']['type']){
    if (0 == $_FILES['myimg'] ['error']) {
        if (is_uploaded_file($_FILES['myimg'] ['tmp_name'])) {
            copy($_FILES['myimg'] ['tmp_name'],
                __DIR__ . '/images/' . $_FILES['myimg']['name']
                );
            }
        }
    }

}
?>
<a href="/lesson4/lesson4gallery/form.php">На главную страницу</a>