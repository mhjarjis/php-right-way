<?php

declare(strict_types=1);
require __DIR__.'/../vendor/autoload.php';
/*spl_autoload_register(
    function ($class)
    {
        $path = __DIR__.'/../'.lcfirst(str_replace('\\','/',$class)).'.php';
        if(file_exists($path)){
            require $path;
        }
    }
);*/
$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();


use App\PaymentGateway\Paddle\Transaction;
var_dump(new Transaction());

