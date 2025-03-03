<?php


//Basically function is like the same as solidity or javascript functions
function isEven(int $number){

    $result = $number % 2;
    if($result === 0){
        echo "Number is even <br/>";
        return;
    }


    echo "Number is odd <br/>";

}

isEven(2);
isEven(3);
isEven(7);
isEven(10);
?>