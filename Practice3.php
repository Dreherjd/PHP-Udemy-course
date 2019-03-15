<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    //step 1
    if(4 > 5){
        echo "Do this";
    } else if(10 == 42){
        echo "this is also incorrect";
    } else {
        echo "I love PHP" . "<br><br>";
    }

    //step 2
    for($counter = 0;$counter < 10;$counter++){
        echo $counter . "<br><br>";
    }

    //step 3
    $variable = 23;
    switch($variable){
        case 10:
            echo "it is 10";
            break;
        case 43:
            echo "it is 43";
            break;
        case 65:
            echo "it is 65";
            break;
        case 543:
            echo "it is 543";
            break;
        case 23:
            echo "it is 23";
            break;
        default:
            echo "no matching values";
            break;
    }


?>    
</body>
</html>