<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //var_dump($_POST);


        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "workshop_2";

        $connection = new mysqli($server, $username, $password, $dbname);
        
        
        if ($connection->connect_error){
            die("Conection Failed: " . $connection->connect_error);
        }
        
        $name = $_POST['username'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        $query = "INSERT INTO users (username, last_name, email, phone)
                    VALUES ('$name', '$lastname', '$email', '$phone_number')";
        

        if ($connection->query($query) === TRUE) {
            echo "Registered!";
        } else{
            echo "Failed " . $connection->error;
        }

        $connection->close();




    ?>
</body>
</html>