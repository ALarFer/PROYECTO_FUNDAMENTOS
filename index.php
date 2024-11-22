<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to your login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

      <?php require 'partials/header.php'; ?>

      <?php if(!empty($user)): ?>
    <br> Binvenido. <?= $user['email']; ?>
    <br>Te has logeado correctamente
    <a href="logout.php">
      Logout
    </a>
  <?php else: ?>
    <h1>Por favor Ingresa o Registrate</h1>

    <a href="login.php">Login</a> or
    <a href="signup.php">SignUp</a>
  <?php endif; ?>
    </body>
</html>
