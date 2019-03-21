<?php include 'db.php';
function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error());
    }


    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value=''>$id</option>";
    }
}
?>

<?php

    function updateTable(){
        global $connection;
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

<?php
    function deleteRows(){
        global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];

       //put single quotes around variables that would be string values, integer values do not need quotes.
       $query = "DELETE FROM users ";
       $query .= "WHERE id = $id ";

       $result = mysqli_query($connection, $query);
       if(!$result){
           die("Query failed: " . mysqli_error($connection));
       }
    }
?>
