<?php session_start();
/*create a link saying clikcer here and set the link to pass some parameters and use GET to see it*/
print_r($_GET);

//set a cookie that expires in a week
$name = "cookie_name";
$value = 123;
$expires = time() + (60*60*24*7);
setcookie($name, $value, $expires);
//start a session and set it to a value
$_SESSION['message'] = "this is a session message";


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
    <a href="practice9.php?id=12&source=reports">Click me</a>
    
</body>
</html>