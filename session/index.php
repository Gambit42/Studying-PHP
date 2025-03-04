<?php
session_start(); // ✅ Start session at the top
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: home.php");
    }
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
    <h1>This is the login page</h1>
    <form method="post" action="/session/index.php">
    <input name="username"/>
    <input name="password"/>
    <input type="submit" name="submit"/>
    </form>
 
    <br/>   
</body>
</html>


