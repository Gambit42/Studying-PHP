<?php
//how u set cookie same as javascript almost?
setCookie('favFood', "pizza", time() + 86400, "/"); // 1 day
setCookie('favDrink', "melon", time() + 86400 * 2, "/"); // 1 day


//to delete a cookie just make the time to -0
// setCookie('favFood', "pizza", time() - 0, "/"); // 1 day


foreach($_COOKIE as $key => $value){
    echo "$key and the value is $value <br/>";
}

if(isset($_COOKIE['favFood'])){
    $favFood = $_COOKIE['favFood'];
    echo "Your favorite food is  $favFood I recommend buying cheese.";
}
?>