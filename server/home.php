<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post" action="<?php 
  //meaning use the php file found on self and filter it so that not vulnerable to cross site .
  htmlspecialchars($_SERVER['PHP_SELF']);
  ?>">
    <input type="text" name="name"/>
    <input type="submit"/>
  </form>  
</body>
</html>



<?php



$server = $_SERVER;
foreach($server as $key => $value){
    echo "$key and $value <br/>";
}
?>