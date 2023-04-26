<?php
$mensaje = "Bienvenido a nuestra alplicación";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h1><?php echo $mensaje ?></h1>
            <h2>
                <?php
                    echo "Desarrollo de Aplicaciones en Internet";
                ?>
            </h2>
            <div class="row">
            <div class="col-sm-6 mt-5">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Login</div>
                    </div>
                    <div class="card-body">
                        <form id="formlogin" action="bienvenido.php" method="post">
                            <div class="form-group">
                                <label for="">Usuario:</label>
                                <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su nombre de usuario:" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Contraseña:</label>
                                <input id="pass" name="pass" type="password" class="form-control" placeholder="Ingrese su contreseña:" maxlength="4" required>
                            </div>

                            <div class="form-group mt-3">
                                <button class="btn btn-secondary col-12">Ingresar</button>
                            </div>

                            <div class="mt-3">
                                <p class="text-center">
                                    <a href="javascript:informar();">¿olvidó su contraseña?</a>
                                </p>
                                <p id="mensaje" class="text-primary text-center"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>