<?php
//variable, anonymous, arrow function
declare(strict_types=1);
function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sum';
if (is_callable($x)) {
    echo $x(3, 4, 433, 33, 27);
} else {
    echo 'Not callable';
}

echo '<br>';
$y = 4;

/*
 * callable either normal or anonymous function
 * closure mus be anonymous function*/
$sum = function (closure $callback, int|float ...$numbers) use ($y): int|float { //use (closer)
   /* $y = 15;
    echo $y;
    return array_sum($numbers);*/
    return $callback(array_sum($numbers));
};
function foo($element){
    return $element*2;
}

echo $sum(function ($element){
    return $element/4;
},44, 6);

$array = [2,4,5];

$arry2 = array_map(function ($elements){
    return $elements*2;
},$array);

echo '<pre>';
print_r($array);
echo '<pre>';
print_r($arry2);

$digits = [1,2,3,4,5];
/*$result = array_map(function ($element){
    return $element*$element;
},$digits);*/
$x =6;
$result = array_map(fn($number)=>$number*$number+$x,$digits); //In Arrow function we can not use multi line

echo '<pre>';
print_r($result);