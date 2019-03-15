<?php include 'db.php';?>
<?php include 'functions.php';?>
<?php
    if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];

       //put single quotes around variables that would be string values, integer values do not need quotes.
       $query = "UPDATE users SET ";
       $query .= "username = '$username', ";
       $query .= "password = '$password' ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if(!$result){
           die("Query failed: " . mysqli_error($connection));
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
    <div class="col-sm-6">
    <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                       showAllData();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
</div>
    
</body>
</html>