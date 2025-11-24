<!DOCTYPE html>
<html>
<head>
    <title>Edit Career</title>
</head>
<body>
<h1>Edit Career</h1>
<form action="/careers/update/<?= $career['id'] ?>" method="post">
    <label>Name:</label>
    <input type="text" name="nombre" value="<?= esc($career['nombre']) ?>" required><br><br>

    <label>codigo:</label>
    <input type="text" name="codigo" value="<?= esc($career['codigo']) ?>" required><br><br>

    <button type="submit">Update</button>
    <a href="/careers">Cancel</a>
</form>
</body>
</html>
