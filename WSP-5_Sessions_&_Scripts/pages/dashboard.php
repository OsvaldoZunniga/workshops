<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

include('../common/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <h1>Welcome to the Dashboard</h1>
  <p>Hello, <?php echo htmlspecialchars($_SESSION['firstname']); ?>!</p>
  <a href="../actions/logout.php">Logout</a>

  <hr>

  <?php
  $sql = "SELECT id, name, lastName, username, role, status, last_login_datetime FROM users";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      echo "<h2>Users</h2>";
      echo "<table border='1'>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Last Login</th>
              </tr>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>" . htmlspecialchars($row['name']) . "</td>
                  <td>" . htmlspecialchars($row['lastName']) . "</td>
                  <td>" . htmlspecialchars($row['username']) . "</td>
                  <td>" . htmlspecialchars($row['role']) . "</td>
                  <td>" . htmlspecialchars($row['status']) . "</td>
                  <td>" . htmlspecialchars($row['last_login_datetime']) . "</td>
                </tr>";
      }
      echo "</table>";
  } else {
      echo "<p>No users found.</p>";
  }

  mysqli_close($conn);
  ?>
</body>
</html>
