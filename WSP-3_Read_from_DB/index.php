<?php
    require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form new User</title>
</head>
<body>
    <form action="login.php" method="post">

        <label for="name">Username:</label>
        <input type="text" name="username" id="name">
        <br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">
        <br>

        <?php
            $connection = getConnection_BD();
            $query = 'select province_name from provinces';
            $provinces = $connection->query($query);
        ?>
            <label for="provincias">Provincia:</label>
            <select name="province" id="provincias">
                <?php while($row = $provinces->fetch_assoc()){ ?>
                    <option><?= $row["province_name"]; ?></option>
                <?php } ?>
            </select>
        <button>Submit</button>

    </form>
</body>
</html>