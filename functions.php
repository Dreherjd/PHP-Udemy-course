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

        function say_something(){
            echo "something" . "<br>";
        }

        function calculate(){
            echo 432 + 5253 . "<br>";
        }

        function get_date(){
            echo "Today is " . date("m-d-y") . "<br>";
            calculate();
        }

    say_something();
    get_date();
    ?>  
</body>
</html>