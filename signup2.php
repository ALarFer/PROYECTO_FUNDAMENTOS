
<?php
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email',$_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Usuario creado correctamente';
  }else {
    $message = 'Lo sentimos a ocurrido un error creando su password';
  }
}

 ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrarse</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <?php require 'partials/header.php';?>

        <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
      <?php endif; ?>

        <h1>Registrate</h1>
        <span> o <a href="login.php">Ingresar</a> </span>

        <form action="signup.php" method="POST">
          <input type="text" name="email" placeholder="Ingrese su E-mail">
          <input type="password" name="password" placeholder="Ingrese su Contraseña">
          <input type="password" name="confirm_password" placeholder="Confirme su Contraseña">
          <input type="submit" value="Enviar">
        </form>


    </body>
</html>
