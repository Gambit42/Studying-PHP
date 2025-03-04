<?php

$password = '123';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


echo "$hashed_password";



if(password_verify('123', $hashed_password)){
    echo "password match";
} else {
    echo "Incorrect password";
}
?>