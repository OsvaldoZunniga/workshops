<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>
<form action="/students/update/<?= $student['id'] ?>" method="post">
    <label>Student Code:</label>
    <input type="text" value="<?= esc($student['student_code']) ?>" readonly style="background-color: #f0f0f0;"><br><br>
    
    <label>First Name:</label>
    <input type="text" name="first_name" value="<?= esc($student['first_name']) ?>" required><br><br>
    
    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?= esc($student['last_name']) ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= esc($student['email']) ?>" required><br><br>
    
    <label>Career:</label>
    <select name="career_id" required>
        <option value="">Select Career</option>
        <?php foreach ($careers as $career): ?>
            <option value="<?= $career['id'] ?>" <?= ($student['career_id'] == $career['id']) ? 'selected' : '' ?>>
                <?= esc($career['name']) ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Update</button>
    <a href="/students">Cancel</a>
</form>
</body>
</html>
