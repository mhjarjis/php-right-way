<?php

//Function

function foo(): int|float|array
{
    return [37, 383];
}

function bar(): mixed
{
    return 'String';
}

var_dump(bar());

function sum(...$numbers): int|float
{
    /* $sum = 0;
     foreach ($numbers as $number){
         $sum+=$number;
     }
     return $sum;*/
    return array_sum($numbers);
}

echo sum(4, 6, 6, 4, 6, 6);

function add(int|float $x, int|float $y): int|float
{
    if ($x % $y === 0) {
        return $x / $y;
    }
    return $x;
}

//name argument
$x = 6;
$y = 2;
echo add(x: $x, y: $y);


