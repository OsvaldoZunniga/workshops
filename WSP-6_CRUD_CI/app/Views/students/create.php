<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
<h1>Add New Student</h1>
<form action="/students/store" method="post">
    <label>Name:</label>
    <input type="text" name="nombre" required><br><br>
    
    <label>Apellido:</label>
    <input type="text" name="apellido" required><br><br>

    <label>Edad:</label>
    <input name="edad" required><br><br>
    
    <label>Career:</label>
    <select name="fk_career" required>
        <option value="">Select Career</option>
        <?php foreach ($careers as $career): ?>
            <option value="<?= $career['id'] ?>"><?= esc($career['nombre']) ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Save</button>
    <a href="/students">Cancel</a>
</form>
</body>
</html>
