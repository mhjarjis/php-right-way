<?php
declare(strict_types=1);
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

//use PaymentGateway\Paddle\CustomerProfile;
use app\PaymentGateway\Paddle\{Transaction};
use app\PaymentGateway\Paddle\CustomerProfile;
use app\PaymentGateway\Stripe\Transaction as StripeTransaction;

//Grouping
//use PaymentGateway\Paddle;

$paddleTransaction = new Transaction();
$stripTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();
var_dump($paddleTransaction,$stripTransaction, $paddleCustomerProfile);
