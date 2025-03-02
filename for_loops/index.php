
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/for_loops/index.php" method="post">
        <label>
            Number to count to:
</label>
    <input name="numToLoop"/>
        <label>
            Number to from:
</label>
    <input name="numToLoopBackwards"/>
    <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php

$message = "Sta!";
$numToLoop = $_POST['numToLoop'];
$numToLoopBackwards = $_POST['numToLoopBackwards'];

echo "Number to count to: $numToLoop <br/>";
echo "Number to count from: $numToLoopBackwards <br/>";
// first is index always start with 0
for($i = 1; $i <= $numToLoop; $i++){
    echo "$message index is $i <br/>";
}


for($i = $numToLoopBackwards; $i > 0; $i--){
    echo "$i <br/>";
}

//1. Declare variable
//2. Check if condition is true.
//3. If condition true, continue the loop

?>