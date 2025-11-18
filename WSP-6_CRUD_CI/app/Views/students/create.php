<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Students/store" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <label for="last_name">Apellido:</label>
        <input type="text" name="last_name" id="last_name">

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age">
        <button>Submit</button>
    </form>
</body>
</html>