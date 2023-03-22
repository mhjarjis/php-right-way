<?php
declare(strict_types=1);

class Transaction
{
    //Property Promotion-Nullsafe Operator
    public ?Customer $customer = null;
    public function __construct(
        private float  $amount,
        private string $description
    ){
//        echo $amount;
//        echo $this->amount;
    }
}