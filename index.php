<?php

function Numbers($a)
{
    $res = '';

    for ($i = 0; $i < $a; $i++) {
        $res .= $i . " ";
    }
    return $res;
}

function SumNumbers($a, $b = 0)
{
    if ($a > 0) {
        $b += $a % 10;
        $a = $a / 10;

        return SumNumbers($a, $b);
    }
    return $b;
}


function Sqr($num)
{
    $res = 0;
    do {
        $res++;
        $num /= 2;
    } while ((int)$num >= 2);

    return $res;
}

echo Sqr(10);



echo 'sum numbers ' . SumNumbers(10) . "<br>";

echo 'Numbers: ' . Numbers(10) . "<br>";

echo 'Sqrt: '. Sqr(100);


