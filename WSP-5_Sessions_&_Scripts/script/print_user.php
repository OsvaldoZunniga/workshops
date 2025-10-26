<?php
// get current folder and go one level up to include connection.php
// get the current directory
$currentDir = dirname(__FILE__);
// go one level up
$parentDir = dirname($currentDir);
// include the connection.php file
include($parentDir . '/common/connection.php');

if ($argc < 2) {
    echo "Usage: php print_user.php <user_id>\n";
    exit(1);
}

$user_id = $argv[1];
echo "User ID is: " . $user_id . "\n";

//connect to the database and get user info
$sql = "SELECT id, name, lastName, username, role FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "User Info:\n";
    echo "ID: " . $row['id'] . "\n";
    echo "Name: " . $row['name'] . "\n";
    echo "Last Name: " . $row['lastName'] . "\n";
    echo "Username: " . $row['username'] . "\n";
    echo "Role: " . $row['role'] . "\n";
} else {
    echo "No user found with ID: " . $user_id . "\n";
}
mysqli_close($conn);

?>
