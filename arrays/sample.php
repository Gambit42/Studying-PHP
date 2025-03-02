<?php


$foods = array('Apple', 'Orange', "Pineapple", "Coconut");

//to reverse just use array_reverse
$reversedFoods = array_reverse($foods);

//to count length
$foodCount = count($foods);

$capitals = array(
    "Japan" => "Tokyo",
    "Philippines" => "Manila",
    "South Korea" => "Seoul",
);


// to add lets just 
$capitals['China'] = "Beijing";

//to create an array of keys just use for associate array
$countries = array_keys($capitals);

//to create an array of values just use for associate array
$capitalValues = array_values($capitals);

//to flip key value pair just use 
$flipped = array_flip($capitals);

echo $capitals['Japan'] . "<br/>";
echo "$foods[0] <br/>";
echo "$foodCount <br/>";

// for($i = 0; $i < sizeof($foods); $i++){
//     echo "$foods[$i] <br/>";
// }


foreach($reversedFoods as $food){
    echo "$food <br/>   ";
}

forEach($capitals as $key => $value ){
    echo "$key and $value <br/>";
}

?>