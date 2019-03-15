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
        function calculate(){
            $sum = 10 + 10;
            echo $sum;
        }
        calculate();

        echo "<br><br>";
        //step 2
        function add_stuff($number1, $number2){
            $sum = $number1 + $number2;
            echo $sum;
        }
        add_stuff(15, 15);

    ?>
</body>
</html>