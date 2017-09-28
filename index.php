<?php
$x = $_GET['x'];

$p1 = 1;
$p2 = 1;

if (!isset($x))
{
    echo "Не было введено число!";
    exit();
}

while ($p1 < $x)
{
    if ($p1 == $x)
    {
        echo "Задуманное число входит в числовой ряд!";
        break;
    }
    else
    {
        $p3 = $p1;
        $p1 = $p1 + $p2;
        $p2 = $p3;
        echo $p1 . ',';
    }
}

