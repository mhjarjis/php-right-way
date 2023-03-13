<?php
#STRING

$firstName = "Mehedi Hasan";
$lastName = "Jarjis";
$name = $firstName. ' '.$lastName;
$name[1] = 'E';
echo $name.'<br>';
echo "Name: {$name}".'<br>';
echo "Name: ${name}".'<br>';
//Find String Length
echo strlen($name).'<br>';
//Count Word
echo str_word_count($name).'<br>';
//Reverse String
echo strrev($name).'<br>';
//Search for a text within a String
echo strpos($name,'Jarjis').'<br>'; #it returns index number if match otherwise return false

//Heredoc
$x = 1;
$y = 2;
$z = 3;
$text = <<<TEXT
Line 1 $x
line 2 $y
line 3 $z
TEXT;

echo nl2br($text);
echo '<br>';
//Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 4
TEXT;

echo $text;


echo '<br>';
echo chop($name,'Jarjis');
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
