<?php
// edit user page
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit();
}
include('../common/connection.php');
$user_id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    header("Location: /index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>
</head>

<body>
    <h1>Register</h1>
    <form action="/actions/updateUser.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required value="<?php echo $user['username']?>"><br><br>

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required value="<?php echo $user['name']?>"><br><br>

        <label for="lastName">Apellidos:</label>
        <input type="text" id="lastName" name="lastName" required value="<?php echo $user['lastname'] ?>"><br><br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
