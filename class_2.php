<?php
//Constant
$paid = 'PAID';
Define('STATUS_'.$paid,'Paid');
echo STATUS_PAID;
echo defined(STATUS_PAID); #checking const is exist or not if exist then return boolean true
//Another way to define constant
const IS_ACTIVE = true;
echo IS_ACTIVE;
if(true){
    //const CHECK = 'new value'; // we cannot use const in conditional statement
    #We can use Define
    Define('CHECK','VALUE');
    echo CHECK;
}

//variable variable
$foo = 'Bar';
$$foo = 'Jarjis';

echo "this is test ${$foo}";
echo "this is test {$$foo}";

//Magic Methods
echo __FILE__;
echo PHP_VERSION;