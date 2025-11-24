<!DOCTYPE html>
<html>
<head>
    <title>Careers</title>
</head>
<body>
    <h1>Careers List</h1>
    
    <a href="/careers/create">+ Add New Career</a> | <a href="/students">View Students</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($careers as $career): ?>
            <tr>
                <td><?= esc($career['nombre']) ?></td>
                <td><?= esc($career['codigo']) ?></td>
                
                <td>
                    <a href="/careers/edit/<?= $career['id'] ?>">Edit</a> |
                    <a href="/careers/delete/<?= $career['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
