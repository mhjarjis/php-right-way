<?php
//INTEGERS

$x = 0b110;// this is for binary
$x = 077; //this is for octal
//echo PHP_INT_MAX;

#Type casting
$x =  (int) '4xyz'; //if does not exist any number then it return 0
echo $x;
#checking is integer or not
echo is_int($x);