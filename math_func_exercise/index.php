<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="post" action="/math_func_exercise/index.php">
        <input name="radius"/>
        <button type="submit">
            submit
        </button>
    </form>
</body>
</html>


<?php
//accept radius and declare variables
$radius = $_POST['radius'];
$pi = pi();


//calculate circumference
$circumference = 2 * $pi * $radius;


//place the 2 at the end for the decimal place then format so that trailign zero doesnt disappear
$roundedCircumeference = number_format(round($circumference, 2), 2); 


//calculate area
$area = $pi * pow($radius, 2);
$roundedArea = number_format(round($area, 2), 2); 

//calculate volume if sphere
$volume = 4 / 3 * $pi * pow($radius, 3);
$roundedVolume = number_format(round($volume  , 2), 2); 


echo "The circumeference of a circle with a radius of {$radius} is {$circumference}, rounded to {$roundedCircumeference } <br/>";
echo "The area of a circle with a radius of {$radius} is {$area}, rounded to {$roundedArea } <br/>";
echo "The volume of a sphere with a radius of {$radius} is {$volume}, rounded to {$roundedVolume } <br/>";
?>
