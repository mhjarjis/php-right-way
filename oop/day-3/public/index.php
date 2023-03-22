<?php
require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';
$transaction = new Transaction(12,'New Trnsaction');
echo $transaction->customer->paymentProfile->id;