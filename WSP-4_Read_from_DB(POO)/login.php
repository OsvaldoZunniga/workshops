<?php
    require 'connection.php';
    require 'objUser.php';


    $name = $_POST['username'];
    $last_name = $_POST['lastname'];
    $province = $_POST['province'];
    //echo 'Post';
    //var_dump($name, $last_name, $province . '<br>');
    

    //$query = "INSERT INTO users(username, last_name, province) 
    //          VALUES ('$name', '$last_name', '$province')";

    
    //send to objUser.php
    $user = new User($name, $last_name, $province);
    
    
    $connection = getConnection_BD();
    $user->saveToDB($connection);
    

    if ($user == true){
        echo "<script>alert('User Registered!');</script>";
    } else{
        echo "<script>alert('Something Wrong!');</script>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p> 
    <?php
        echo 'Welcome ' . $name . ' ' . $last_name; 
    ?>

    </p>
</body>
</html>