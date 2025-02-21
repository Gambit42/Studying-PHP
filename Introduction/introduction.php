<?php
echo "I like pizza";
$name = 'Sample';
$age = 18;
$productCount = 2;
$rating = 4.5;
$isOnline = false;
$total = 0;
$pizzaPrice = 5;
$quantity = 2;

$total = $quantity * $pizzaPrice;

echo "<br/>";
echo "name is $name <br/>";
echo "age is $age <br/>";
echo "product count is $productCount <br/>";
echo "rating is \$ $rating <br/>";
echo "Online status: " . ($isOnline ? 'True' : 'False') . "<br/>";


echo "Total bill $total";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>
</body>
</html>