<?php
declare(strict_types=1);
function amountFormat(float $amount):string
{
    $isNegative = $amount < 0;

    return ($isNegative?'-':'').'$'.number_format(abs($amount),2);
}