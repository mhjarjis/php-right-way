<?php
#BOOLEANS
$isComplete = true;
//Integers 0, -0 = false
//floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

echo is_bool($isComplete); #Checking is boolean or not and return boolean

if($isComplete){
    echo 'success';
}else{
    echo 'fail';
}