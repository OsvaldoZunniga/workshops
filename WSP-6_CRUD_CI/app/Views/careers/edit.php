<!DOCTYPE html>
<html>
<head>
    <title>Edit Career</title>
</head>
<body>
<h1>Edit Career</h1>
<form action="/careers/update/<?= $career['id'] ?>" method="post">
    <label>Name:</label>
    <input type="text" name="name" value="<?= esc($career['name']) ?>" required><br><br>
    
    <label>Description:</label>
    <input type="text" name="description" value="<?= esc($career['description']) ?>" required><br><br>

    <label>Duration (years):</label>
    <input type="number" name="duration_years" value="<?= esc($career['duration_years']) ?>" required><br><br>

    <button type="submit">Update</button>
    <a href="/careers">Cancel</a>
</form>
</body>
</html>
