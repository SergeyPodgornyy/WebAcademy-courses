<?php

// Если существует кэшированная версия:
if (file_exists('./cache/2.cache')) {
    // Читаем и выводим файл
    error_log('Cache exists');
    readfile('./cache/2.cache');
    exit();
}

// Начинаем буферизацию вывода
ob_start();

// Выводим остальной HTML
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Кэшированная страница</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    </head>
    <body>
        Эта страница кэшируется средствами PHP
        <a href="http://www.php.net/outcontrol">Функции управления выводом</a>
    </body>
</html>

<?php
// Получаем содержимое буфера
$buffer = ob_get_contents();
// error_log(print_r($buffer, true));

// Останов буферирования и вывод буфера
ob_end_flush();

// Сохранение кэш-файла с контентом
$fp = fopen('./cache/2.cache', 'wb');
if ($fp === false) {
    error_log('Error reading ./cache/2.cache');
    exit();
}
fwrite($fp, $buffer);
fclose($fp);
?>
