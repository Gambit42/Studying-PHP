<?php
    $grade = 'A';

    if($grade === 'A'){
        echo "You passed.";
    }
    elseif($grade === 'D'){
        echo "You passed low grade.";
    }
    elseif($grade === 'F'){
        echo "You failed..";
    }
    else{
        echo "Not a grade.";
    }


    switch($grade){
        case "A":
            echo "You passed.";
            break;
        case "D":
            echo "You passed low grade.";  
            break;
        case "F":
            echo "You failed low grade.";  
            break;
         default:
            echo "Not a grade.";  
            break;
    }

?>