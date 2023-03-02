<?php
declare(strict_types=1);
/*Data Types & Type Casting */
# 4 Scalar Types
    #bool - true, false
    $completed = true;
    #int - 1,2,3, -4,-10
    $score = 90;
    #float - 0.3, -0.33, 1.99
    $price = 2.88;
    #string - "Hello", "JarJis"
    $greeting = "Hello Jarjis";

    echo $completed.'<br>';
    echo $score.'<br>';
    echo $price.'<br>';
    echo $greeting.'<br>';

  //  echo gettype($completed); // Checking variable type short form
    var_dump($score);

# 4 Compound Types
    #array
    $companies = [1,2,'Hello',true,9.34];
    print_r($companies);
    #object
    #callable
    #iterable

# 2 Special Types
    #resource
    #null

function sum (int $x, int $y){
    var_dump($x).'<br>';
    var_dump($y).'<br>';
    return $x+$y;
}

$sum =  sum(3,5);
echo $sum.'<br>';
var_dump($sum);