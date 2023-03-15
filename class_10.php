<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional Statement</title>
</head>
<body>
<?php $score = 85; ?>
<?php if ($score >= 90): ?>
    <h1>A+</h1>
<?php elseif ($score >= 80): ?>
    <h1>B+</h1>
<?php elseif ($score >= 70): ?>
    <h1>C+</h1>
<?php else: ?>
    <h1>F</h1>
<?php endif; ?>
</body>
</html>