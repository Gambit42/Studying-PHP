<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Type a country we will return the capital</h1>
    <form method="post" action="/arrays/index.php">
        <input name="country"/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
$countries = array(
    "Japan" => "Tokyo",
    "Philippines" => "Manila",
    "South Korea" => "Seoul",
    "China" => "Beijing",
);

$country = $_POST['country'];

//Besides isset we can also use array_key_exists

if(!isset($countries[$country])){
 echo "Country not found.";
 return;
}


echo "The capital of $country is " . $countries[$country] . "<br/>";
?>