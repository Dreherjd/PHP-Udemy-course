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
        function add_numbers($number1, $number2){
            $sum = $number1 + $number2;
            return $sum;
        }

        $result = add_numbers(50, 50);
        echo $result . "<br>";
        $result = add_numbers(50, $result);
        echo $result . "<br>";
        $result = add_numbers(50, $result);
        echo $result . "<br>";


    ?>  
</body>
</html>