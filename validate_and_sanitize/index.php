<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/validate_and_sanitize/index.php">
    <input name="username"/>
    <input name="age"/>
    <input name="email"/>
    <input type="submit" name="submit"/>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    // $username = $_POST['username'];
    //3 args input_post or input_get, name of the input, then the filter.
    //ill learn more about this when i create php websites
    //Can filter email as well  FILTER_SANITIZE_EMAIL

    //SANITIZE will remove certain characters


    //VALIDATE is checking if the input is valid
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);


    if(empty($age)){
        echo "Not a valid age. <br/>";
    }else{
        echo "You are $age <br/>";
    }


    if(empty($email)){
        echo "Not a valid email. <br/>";
    }else{
        echo "Your email is $email <br/>";
    }
 
    echo "Hello $username";
}

?>