<?php
$x = (int)$_GET['x'];

$p1 = 1;
$p2 = 1;

if (!isset($_GET['x']))
{
    echo "Не было введено число!";
    exit();
}

switch ($p1)
{
    case($p1 > $x):
        echo "Задуманное число НЕ входит в числовой ряд!";
        break;
    case($p1 == $x):
        echo "Задуманное число входит в числовой ряд!";
        break;
    default:
        $p3 = $p1;
        $p1 = $p1 + $p2;
        $p2 = $p3;
        continue 1;
}




