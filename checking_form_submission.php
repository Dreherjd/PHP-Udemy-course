<?php
if(isset($_POST['submit'])){

    $names = ["Kevin", "Justin", "Peter", "Josh", "Shithead", "Margo", "Thomas"];
    $min = 5;
    $max = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!in_array($username, $names)){
        echo "Sorry, you are not allowed.";
    }else{
        echo "You're in!";
    }

    if(strlen($username) < $min){
        echo "Username has to be 5 or more characters";
    } else if(strlen($username) > $max){
        echo "Username must be 10 characters or less";
    }

}
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
    <form action="checking_form_submission.php" method="post">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>