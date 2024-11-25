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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Welcome to your login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Importación del archivo de estilos -->
    <style>
        body {
            background-image: url('login-plataforma.png'); /* Fondo de index3.php */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
        }
        .cuadro {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 500px;
            height: 400px;
            text-align: center;
        }
        .cuadro img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php require 'partials/header.php'; ?>

<?php if(!empty($user)): ?>
    <br> Bienvenido. <?= $user['email']; ?>
    <br> Te has logeado correctamente
    <a href="logout.php">Logout</a>
<?php else: ?>
    <div class="cuadro">
        <img src="sistemas.png" alt="FISEI"/>
        <h3></h3>
        <h2>Por favor Ingresa o Registrate</h2>
        <a href="login.php">Login</a> or <a href="signup.php">SignUp</a>
    </div>
<?php endif; ?>

</body>
</html>

