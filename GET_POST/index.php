
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="/GET_POST/index.php" method="get">
    <!-- <input placeholder="email" type="text" name="email"/>
    <input placeholder="password" type="text" name="password"/> -->
    <input name="quantity"/>
    <button type="submit">
        submit
    </button>   
    </form>
</body>
</html>


<?php

//GET method = 
//Use for search page
//Can be cached
//NOT SECURE
// Has data limit



//POST method = 
//Request not cached
//SECURE
//Better when submitting credentials

// echo "{$_POST["email"]} <br/>";
// echo "{$_POST["password"]} <br/>";

$item = 'pizza';
$pizzaPrice = 5.99;
$quantity = $_GET['quantity'];
$total = $pizzaPrice * $quantity;

echo "The price is: $total";

?>


