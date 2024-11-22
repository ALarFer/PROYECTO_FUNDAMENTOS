<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login</title>
    <style>
        body {
            background-image: url('login-plataforma.png');
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
            width: 500px;                                                                                                                          /* o 50% para el 0.5 del ancho de la pantalla*/ 
            height: 400px;                                                                                                                         /* o 50vh para el 0.5 del largo de la pantalla*/ 
            text-align: center; 
        } .cuadro img{
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="cuadro">
        <img src= "sistemas.png" alt="FISEI"/>
        <h2>Ingresar con:</h2>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario">
        <input type="password" id="clave" name="clave" placeholder="Contraseña">
        <a href="index2.php"><input type="button" id="ingresar" name="ingresar" value="Login"></a>
    </div>
    
</body>
</html>

