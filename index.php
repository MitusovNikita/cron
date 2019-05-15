<?
//достаем
$var = file_get_contents('content.txt');

//прибавляет 1
$var = intval($var);
$var = $var + 1;
print_r($var);

//записываем в файл
file_put_contents('content.txt',$var);
