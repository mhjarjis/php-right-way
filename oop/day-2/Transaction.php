<?php
declare(strict_types=1);
class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $taxAmount):Transaction
    {
        $this->amount+=$this->amount*$taxAmount/100;
        return $this;
    }

    public function applyDiscount(float $discountAmount):Transaction
    {
        $this->amount-=$this->amount*$discountAmount/100;
        return $this;
    }

    public function getAmount():float
    {
        return $this->amount;
    }
}