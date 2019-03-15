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
    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        if($name === "Richard"){
            echo "What the fuck Richard?!?";
        }else{
            echo "Hi, welcome to Chili's";
        }
    }

    ?>
    <form action="practice6.php" method="post">
        <input type="text" name="name" placeholder="some text goes here">
        <input type="submit" name="submit">
    </form>
</body>
</html>