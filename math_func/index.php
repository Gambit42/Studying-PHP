<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/math_func//index.php" method="post">

    <input name="x"/>
    <input name="y"/>
    <input name="z"/>
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

$value1 = $_POST['x'];
$value2 = $_POST['y'];
$value3 = $_POST['z'];

//absolute value
$absoluteValue = abs($value1);

//Round off
$roundedValue = round($value1);

//Round down
$roundedDownValue = floor($value1);

//Round up
$ceilValue = ceil($value1);

//Raised to the power ^

$powerValue = pow($value1, $value2);

//square root
$squareRootValue = sqrt($value1);


//Max check the greatest number
$maxValue = max($value1, $value2, $value3);

//Min check the greatest number
$minValue = min($value1, $value2, $value3);

//Pi func
$piValue = pi();


//Pi func
$randomValue = rand(1, 6); // rand(1, 2) for minimum and maximum

echo "The absolute value is {$absoluteValue} <br/>";
echo "The rounded value is {$roundedValue} <br/>";
echo "The rounded down is {$roundedDownValue} <br/>";
echo "The rounded up is {$ceilValue} <br/>";
echo "{$value1} raised to the power of {$value2} is {$powerValue} <br/>";
echo "Between the numbers {$value1}, {$value2}, and {$value3}, the greatest number is {$maxValue} <br/>";
echo "Between the numbers {$value1}, {$value2}, and {$value3}, the least number is {$minValue} <br/>";
echo "The pi value is {$piValue} <br/>";
echo "Random value {$randomValue} <br/>";
?>