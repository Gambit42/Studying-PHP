<?php

session_start();

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the homepage</h1>
    <form action="/session/home.php" method="post">
    <input type="submit" name="logout" value="Logout"/>
    </form>
</body>
</html>



<?php

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo "{$_SESSION['username']} <br/>";
    echo "{$_SESSION['password']} <br/>";
}



?>