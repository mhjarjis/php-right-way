<?php
/*OPERATORS*/

//Arithmetic Operators(+ - * / % **)
/*$x= 10; //+"10" if we put before +- the string value cast to integer
$y = 4;
var_dump($x+$y);
echo '<br>';
var_dump($x-$y);
echo '<br>';
var_dump($x*$y);
echo '<br>';
var_dump($x/$y);
echo '<br>';
var_dump($x%$y);
echo '<br>';
var_dump($x**$y);
echo '<br>';
var_dump(fmod($x,$y));
var_dump(fdiv($x,$y));*/
//Assignment Operators (= += -= *= %= **=)
#Assignemt operators called combined operator
/*$x = 4;
echo $x+=5;
echo '<br>';
echo $x-=5;
echo '<br>';
echo $x*=5;
echo '<br>';
echo $x%=5;
echo '<br>';
echo $x**=5;*/

#echo $y+=4; // if don't set variable it's shows undefined error but also showing the value
//String Operators (. .=)
/*$a = 'Hello';
echo $a.= ' World';*/
//Comparison Operators (== === != < > <= >= <=> ?? ?:)
$a = 30;
$b = 30;
/*var_dump($a==$b);
var_dump($a===$b);*/
var_dump($a <> $b);
var_dump($a <=> $b); // if a==b(0) a>b (1) a<b(-1)
$msg = "Hello World";
$x = strpos($msg, 'H');

if ($x === false) {
    echo 'H is not found!';
} else {
    echo 'H found at index ' . $x;
}

$xy = null; //if true is value print
$yx = $xy ?? 'Hello';
var_dump($yx);
//Error control operators (@)
$xx = @file('file.text'); //Not recommended
//Increment and decrement operators (++ --)
$x = 5;
echo $x++; //Post Increment
echo $x;
//Logical Operators (&& || ! and or xor)
$c = true;
$d = false;
var_dump($c && $d);
var_dump(!$c || $d); //only check first value

//Bitwise Operators (& | ~ ^ << >>)
//Array Operators (+ == === != <> !==)

$a = ['a'=>1, 'b'=>2,'c'=>3];
$b = ['a'=>4, 'e'=>5,'f'=>6,'g'=>7,'h'=>8];


$b = ['a'=>1,'b'=>'2','c'=>3];

$c = $a==$b; //it working union if same index first ar print
print_r($c);