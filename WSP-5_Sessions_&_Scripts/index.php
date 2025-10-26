<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: pages/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>

  <?php
  if (isset($_GET['error'])) {
      if ($_GET['error'] === 'inactive') {
          echo "<p style='color:red;'>Tu cuenta está inactiva. Contacta al administrador.</p>";
      } elseif ($_GET['error'] === 'wrong_password') {
          echo "<p style='color:red;'>Contraseña incorrecta.</p>";
      } elseif ($_GET['error'] === 'user_not_found') {
          echo "<p style='color:red;'>Usuario no encontrado.</p>";
      }
  }
  ?>

  <form action="actions/login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <button type="submit">Login</button>

  <p>Don't have an account? <a href="pages/registration.php">Register here</a></p>

  </form>
</body>
</html>
