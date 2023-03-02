<!doctype html>
<html lang="en">
<head>
    <title>Class-1</title>
</head>
<body>
<?php
echo 'Hello world';
$nickName = "Jarjis";
echo "My name is {$nickName}"; #Using Curly braces for better readable its variable
$x = 1;
$y = &$x; #Reference variable always working last assign value.
$x = 99;
echo $y; ?>
<h1><?= 'Hello Bangladesh'?></h1>
</body>
</html>

