<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php


$age = 21;

function checkAge(int $age): void {
    if ($age < 18) {
        echo 'Access denied';
        return; // Exit early
    }

    echo 'You may enter this site';
}

checkAge(20); // Outputs: You may enter this site
checkAge(16); // Outputs: Access denied


?>