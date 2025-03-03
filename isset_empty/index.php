<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/isset_empty/index.php">
        <input name="username"/>
        <input name="password" type="password"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>


<?php
//isset() = Returns TRUE if a variable is declared and not null
//empty() = Returns TRUE if a variable is not declared, false, null, ""

 $isSubmit = isset($_POST['submit']);
 $username = $_POST['username'];
 $password = $_POST['password'];


 function displayMessage(string $username, string $password){
  
  if(empty($username) && empty($password)){
    echo "No username and password";
    return;
  }

  if(empty($username)){
    echo "no username";
    return;
  }
  
  
  if(empty($password)){
    echo "no password";
    return;
  }

  echo "hello $username  your password is $password";
  
 }

 if($isSubmit){
  echo "user submitted the form <br/>";
  displayMessage($username, $password);

 }



 

?>