<?php

// $usuario = $_GET['usuario'];
// $password = $_GET['pass'];
$usuario = $_POST['usuario'];
$password = $_POST['pass'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
        if($usuario == 'Rael' && $password == '1234'){
            echo "<h1>Bienvenido</h1>";
            echo "<p>Hola!" . $usuario . "</p>";
            echo "<a href='calculadora.html' class='btn btn-primary'>calculadora</a>";
        }else{
        ?>
            <h1>Usuario no válido!</h1>
            <a href="index.php" class="btn btn-danger">Regresar al login</a>
        <?php
        }
        ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>