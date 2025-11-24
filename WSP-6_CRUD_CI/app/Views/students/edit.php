<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>
<form action="/students/update/<?= $student['id'] ?>" method="post">
    <label>Nombre:</label>
    <input name="nombre" type="text" value="<?= esc($student['nombre']) ?>" require><br><br>
       
    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?= esc($student['apellido']) ?>" required><br><br>

    <label>Edad:</label>
    <input type="number" name="edad" value="<?= esc($student['edad']) ?>" required><br><br>
    
    <label>Carrera:</label>
    <select name="fk_career" required>
        <option value="">Selecciona una carrera:</option>
        <?php foreach ($careers as $career): ?>
            <option value="<?= $career['id'] ?>" <?= ($student['fk_career'] == $career['id']) ? 'selected' : '' ?>>
                <?= esc($career['nombre']) ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Update</button>
    <a href="/students">Cancel</a>
</form>
</body>
</html>
