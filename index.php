<?php
echo "Введите имя: ";
$name = trim(fgets(STDIN));

echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));

echo "Введите отчество: ";
$patronymic = trim(fgets(STDIN));

$fullname = mb_strtoupper(mb_substr($surname, 0, 1)) . mb_substr($surname, 1, mb_strlen($surname))
    . " " . mb_strtoupper(mb_substr($name, 0, 1)) . mb_substr($name, 1, mb_strlen($name))
    . " " . mb_strtoupper(mb_substr($patronymic, 0, 1)) . mb_substr($patronymic, 1, mb_strlen($patronymic));

$surnameAndInitials = mb_strtoupper(mb_substr($surname, 0, 1)) . mb_substr($surname, 1, mb_strlen($surname))
    . ' '
    . mb_strtoupper(mb_substr($name, 0, 1))
    . '.'
    . mb_strtoupper(mb_substr($patronymic, 0, 1))
    . '.';

$fio = mb_strtoupper(mb_substr($surname, 0, 1))
    . mb_strtoupper(mb_substr($name, 0, 1))
    . mb_strtoupper(mb_substr($patronymic, 0, 1));

echo PHP_EOL;

echo "Полное имя $fullname" . PHP_EOL
    . "Фамилия и инициалы $surnameAndInitials" . PHP_EOL
    . "Аббревиатура: $fio";

echo PHP_EOL;