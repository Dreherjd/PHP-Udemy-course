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
        $list = ["James", "Kevin", "Max", "Luke"];
        echo max($list);
        echo "<br>";
        echo min($list);
        echo "<br>";
        print_r($list);
        echo "<br>";

        echo sort($list);



    ?>
</body>
</html>