<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>User List</h1>
    <a href="/users/create">+ Add New User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= esc($user['name']) ?> (<?= esc($user['email']) ?>)
                <a href="/users/edit/<?= $user['id'] ?>">Edit</a> |
                <a href="/users/delete/<?= $user['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
