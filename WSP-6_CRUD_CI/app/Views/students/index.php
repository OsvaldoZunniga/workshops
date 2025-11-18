<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <?php
    foreach($students as $student){
        echo "<p>Nombre: ".$student['name']." ".$student['last_name']." - Edad: ".$student['age']."</p>";
    }
    ?>

    <a href="students.php">CRUD</a>
</body>
</html>