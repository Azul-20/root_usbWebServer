<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Promedio</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <h3 class="text-white">Calculador de Promedio</h3>
                <a href="index.html" class="btn btn-danger">CERRAR SESIÓN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Operaciones</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="suma_producto.php">Suma - Producto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sr_pc.php">Suma/Diferencia - Producto/Cociente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="promedio.php">Promedio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="numero_mayor.php">Número mayor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br><br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card p-5">
                    <form method="post">
                        <div class="form-group">
                            <label for="num1">Primera nota:</label>
                            <input type="number" class="form-control" name="num1" placeholder="Ingrese del 0 al 20" required>
                        </div><br>
                        <div class="form-group ">
                            <label for="num2">Segunda nota:</label>
                            <input type="number" class="form-control" name="num2" placeholder="Ingrese del 0 al 20" required>
                         </div><br>
                        <div class="form-group">
                            <label for="num3">Tercera nota:</label>
                            <input type="number" class="form-control" name="num3" placeholder="Ingrese del 0 al 20" required>
                        </div><br>
                        <button type="submit" class="btn btn-success mt-3">Calcular</button>
                        </form><br>
                        <div id="resultados">
                            <?php
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];
                                $num3 = $_POST['num3'];
                                $promedio = ($num1 + $num2 + $num3) / 3;
                                
                                if($promedio >= 13 && $promedio <= 20){
                                    echo "<label>Nota 1: " . $num1 . "</label>";
                                    echo "<br><label>Nota 2: " . $num2 . "</label>";
                                    echo "<br><label>Nota 3: " . $num3 . "</label>";

                                    echo "<br><br><p>Usted se encuentra: Aprobado</p>";
                                }if($promedio >= 0 && $promedio < 13){
                                    echo "<label>Nota 1: " . $num1 . "</label>";
                                    echo "<br><label>Nota 2: " . $num2 . "</label>";
                                    echo "<br><label>Nota 3: " . $num3 . "</label>";
    
                                    echo "<br><br><p>Usted se encuentra: Desaprobado</p>";
                                }if($promedio < 0 || $promedio > 20){
                                    echo "Error!! Digite sus notas nuevamente.";
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>