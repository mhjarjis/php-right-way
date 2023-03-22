<?php
declare(strict_types=1);
require_once '../Transaction.php';

$amount = (new Transaction(12, 'First Transaction'))
    ->addTax(10)
    ->applyDiscount(5)
    ->getAmount();

var_dump($amount);

