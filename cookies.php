<?php
//all cookie information has to be stored in his super global
$name = "Cookie2";
$value = 200;           //60 times 60 times 24 times 7 equals a week in seconds
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);



?>
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
    
    if(isset($_COOKIE['Cookie2'])){
        $someOne = $_COOKIE['Cookie2'];
        
        echo $someOne;
    }else{
        $someOne = '';
    }
    
    
    
    ?>
</body>
</html>