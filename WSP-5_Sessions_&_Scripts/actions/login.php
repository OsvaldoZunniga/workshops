<?php
include('../common/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (md5($password) === $row['passwrd']) {

            if ($row['status'] !== 'active') {
                header("Location: ../index.php?error=inactive");
                exit();
            }

            $updateSql = "UPDATE users SET last_login_datetime = NOW() WHERE id = {$row['id']}";
            mysqli_query($conn, $updateSql);

            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['firstname'] = $row['name'];

            header("Location: ../pages/dashboard.php");
            exit();
        } else {
            header("Location: ../index.php?error=wrong_password");
            exit();
        }
    } else {
        header("Location: ../index.php?error=user_not_found");
        exit();
    }

    mysqli_close($conn);
}
?>
