<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP STRIP TAGS</title>
</head>
<body>
    <?php
    $str="<p>Deskripsi text yang boleh ditampilkan</p><h2>Text yang tidak boleh ditampilkan</h2>";
        $text=strip_tags($str,'<p>');
        echo($text);
    ?>
</body>
</html>