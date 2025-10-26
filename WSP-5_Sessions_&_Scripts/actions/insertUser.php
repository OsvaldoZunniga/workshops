<?php
include('../common/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];

    $sql = "INSERT INTO users (name, lastName, username, passwrd, role, status, last_login_datetime)
            VALUES ('$name', '$lastName', '$username', '$password', 'user', 'active', NULL)";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php?username=$username");
        exit();
    } else {
        header("Location: ../index.php?error=registration_failed");
        exit();
    }

    mysqli_close($conn);
}
?>
