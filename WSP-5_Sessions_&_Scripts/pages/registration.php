<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="../actions/insertUser.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="lastName">Apellidos:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>