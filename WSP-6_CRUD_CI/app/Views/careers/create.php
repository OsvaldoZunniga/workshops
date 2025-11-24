<!DOCTYPE html>
<html>
<head>
    <title>Create Career</title>
</head>
<body>
<h1>Add New Career</h1>
<form action="/careers/store" method="post">
    <label>Name:</label>
    <input type="text" name="nombre" required><br><br>
    
    <label>Code:</label>
    <input type="text" name="codigo" required><br><br>

    
    <button type="submit">Save</button>
    <a href="/careers">Cancel</a>
</form>
</body>
</html>

