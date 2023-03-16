<?php
require 'helpers.php';

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));

//Array Combine
$x = ['a', 'b', 'c'];
$y = [1, 2, 3];
prettyPrintArray(array_combine($x, $y));

//Array Filter
$array1 = [1, 2, 3, 4, false, [], 5, 6, 7, 8, 9, 10, 0];
/*$even = array_filter($array1, fn($number) => $number % 2 === 0);
$even = array_values($even);*/ //Re index array key
$value = array_filter($array1);
prettyPrintArray($value);

//Array key

$array = ['a' => 10, 'b' => 4, 'c' => 10];
$keys = array_keys($array, 10);  //find key by value

prettyPrintArray($keys);

//array_reduce(array $array, callable $callback, mixed initialValue = null):mixed
$items = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'item 1'],
    ['price' => 149, 'qty' => 1, 'desc' => 'item 1'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'item 1'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'item 1'],
];

/*$total = array_reduce($items,function($sum, $item){
   return $sum + $item['price'] * $item['qty'];
});*/
$total = array_reduce($items, fn($sum, $item) => $sum + $item['price'] * $item['qty'], 0);


echo $total;

//sorting
$array = ['a' => 1, 'b' => 5, 'c' => 2];
asort($array); //sort by value
prettyPrintArray($array);
ksort($array); //sor by key
prettyPrintArray($array);

//Destructure
$v = [1, 2, [3, 4]];
[$a, $b, [$c, $d]] = $v;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d;

echo '<br>';


function findMin(...$numbers)
{
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($min > $number) {
            $min = $number;
        }
    }
    return $min;
}

echo findMin(1, -2, 3, 5, 10);

function twoDigitSum($num) {
    return $num % 10 + floor($num / 10);
}

echo twoDigitSum(34);