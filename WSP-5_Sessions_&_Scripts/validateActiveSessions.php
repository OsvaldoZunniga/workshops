<?php
include('common/connection.php');

if ($argc < 2 || ($hours = intval($argv[1])) <= 0) {
    exit("Uso: php validateActiveSessions.php <horas>\n");
}

$result = mysqli_query($conn, "SELECT id, username, last_login_datetime FROM users WHERE status='active'");
$updatedCount = 0;

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['last_login_datetime'] === NULL) continue;

    if ((time() - strtotime($row['last_login_datetime'])) / 3600 > $hours) {
        if (mysqli_query($conn, "UPDATE users SET status='inactive' WHERE id={$row['id']}")) {
            echo "Usuario '{$row['username']}' desactivado\n";
            $updatedCount++;
        }
    }
}

echo "Total de usuarios desactivados: $updatedCount\n";
mysqli_close($conn);

?>
