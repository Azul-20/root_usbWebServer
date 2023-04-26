<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($edad < 18){
        echo "
            <br><br>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-6'>
                        <div class='card'>
                            <div class='card-header bg-success'>
                                <div class='card-title text-white text-center'>
                                    <h3>Bienvenido</h3>
                                </div>
                            </div>
                            <div class='card-body'>
                                <label> !Hola " . $nombre . "</label>
                                <label> Tu dirección es: " . $direccion . "</label>
                                <label> Tienes " . $edad . " y tu correo es: " . $email . "</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>"
        }else{
            echo "<script>alert('¡Alerta! Usted es menor de edad.');</script>";
        }
    ?>

</body>
</html>