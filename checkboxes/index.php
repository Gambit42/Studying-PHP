<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/checkboxes/index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza"/>
    Pizza
    <br/>
    <input type="checkbox" name="foods[]" value="Pineapple"/>
    Pineapple
    <br/>
    <input type="checkbox" name="foods[]" value="Isaw"/>
    Isaw
    <br/>
    <input type="checkbox" name="foods[]" value="Yema"/>
    Yema
    <br/>
    <input type="submit" value="submit" name="submit"/>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $foods = $_POST['foods'];

    foreach($foods as $food){
        echo "$food, ";
    }
}


?>