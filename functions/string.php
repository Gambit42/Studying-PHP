<?php


//I think this is the same as javascript no need to learn yet but good to know it exist.

$username = "Lira";
$phone = "123-612-61";

$lowerCaseUsername = strtolower($username);
$upperCaseUsername = strtoupper($username);
$phoneNoDash = str_replace('-', "", $phone);
//strcmp() string compare. Compare two string if same or no
//sstrev() string reverse
//str_shuffle() shuffle string
//strlen() get length
//strpos() get position
//substr create a new string
//imploe and explode is like split and join in javascript

echo "$username <br/> lower case $lowerCaseUsername <br/> upper case $upperCaseUsername <br/>";
echo "Phone no dash $phoneNoDash";

?>