<?php
include('../common/connection.php');

// edit user page
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit();
}
$user_id = $_GET['id'];

// delete user if id is provided from the database
if ($user_id) {
    $sql = "DELETE FROM users WHERE id = $user_id";
    if (mysqli_query($conn, $sql)) {
        header("Location: /pages/dashboard.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>