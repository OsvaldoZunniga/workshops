<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form & DB</title>
</head>
<body>
    <section>
        <form action="save.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" require>
            <br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" require>
            <br>
            <label for="email">Email:</label>
            <input type="text" id="email" require>
            <br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" require>
            <br>
            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>