<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <?php
                    if($usuario != 'RaelRivero' && $email == 'rael.rivero01@gmail.com'){
                        echo "<h3 class='text-white'>Usuario no válido!</h3>";
                        echo "<a href='index.html' class='btn btn-danger'>VOLVER</a>";
                    }if($usuario == 'RaelRivero' && $email != 'rael.rivero01@gmail.com'){
                        echo "<h3 class='text-white'>Correo no válido!</h3>";
                        echo "<a href='index.html' class='btn btn-danger'>VOLVER</a>";
                    }if($usuario == 'RaelRivero' && $email == 'rael.rivero01@gmail.com'){
                        echo "<h3 class='text-white'>Bienvenido! " . $usuario . "</h3>
                        <h6 class='text-white'>USUARIO: " . $email . "</h6>
                        <a href='index.html' class='btn btn-danger'>CERRAR SESIÓN</a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasDarkNavbar' aria-controls='offcanvasDarkNavbar' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='offcanvas offcanvas-end text-bg-dark' tabindex='-1' id='offcanvasDarkNavbar' aria-labelledby='offcanvasDarkNavbarLabel'>
                            <div class='offcanvas-header'>
                                <h5 class='offcanvas-title' id='offcanvasDarkNavbarLabel'>" . $usuario . " Operaciones</h5>
                                <button type='button' class='btn-close btn-close-white' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                            </div>
                            <div class='offcanvas-body'>
                                <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='suma_producto.php' method='post'>Suma - Producto</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='sr_pc.php'>Suma/Diferencia - Producto/Cociente</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='promedio.php'>Promedio</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='numero_mayor.php'>Número mayor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>";
                    }if($usuario != 'RaelRivero' && $email != 'rael.rivero01@gmail.com'){
                        echo "<h3 class='text-white'>Usted no se encuentra registrado!</h3>";
                        echo "<a href='index.html' class='btn btn-danger'>VOLVER</a>";
                    }
                ?>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>