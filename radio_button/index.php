<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/radio_button/index.php" method="post">

    <input type="radio" name="credit" value="Visa"/>
    <label>Visa</label>
    <br/>      
    <input type="radio" name="credit" value="Master Card"/>
    <label>Master Card</label>
    <br/>      
    <input type="radio" name="credit" value="BPI"/>
    <label>BPI</label>
    <br/>
    <input type="submit" value="submit"/>
    </form>
</body>
</html>

<?php



if(isset($_POST['credit'])){
    $credit_card = $_POST['credit'];
    echo "$credit_card";
}


?>