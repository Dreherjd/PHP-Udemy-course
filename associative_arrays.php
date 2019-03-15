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
        //normal arrays
        $number = array(2,5,15,65,342);
        //prints out key, value and the word array
        print_r($number);
        echo "<br>";

        
        //associative arrays
        $names = array("first_name" => "Tim", "last_name" => "Johnson");
        // print_r($names);
        echo $names['first_name'] . " " . $names['last_name'];


    ?>  
</body>
</html>