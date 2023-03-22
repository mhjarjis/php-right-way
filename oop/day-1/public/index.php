<?php
declare(strict_types=1);
$str = '{"a":1,"b":2,"c":3}';
$obj = json_decode($str);
var_dump($obj->a);

$newObj = new stdClass();
$newObj->a = 1;
$newObj->b = 2;
//var_dump($newObj);

$arr = [2,3,4];
$obj = (object) $arr;
var_dump($obj->{1});


/*require_once '../Transaction.php';
$amount = (new Transaction(100, 'Transaction 2'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();
var_dump($amount);*/