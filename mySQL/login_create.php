<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'loginApp');
    if($connection){
        echo "we are connected";
    }else{
        die('database connection failed');
    }

    $query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
<div class="container">
    <div class="col-4">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</div>
    
</body>
</html>