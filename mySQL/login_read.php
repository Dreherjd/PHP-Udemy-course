<?php
    $connection = mysqli_connect('localhost', 'root', '', 'loginApp');
    if($connection){
        echo "we are connected";
    }else{
        die('database connection failed');
    }

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error());
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
    <div class="col-sm-6">
        <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <pre style="background-color:#ececec;">
                <?php
                print_r($row);
                ?>
                </pre>
                <?php
            }
        ?>
    </div>
</div>
    
</body>
</html>