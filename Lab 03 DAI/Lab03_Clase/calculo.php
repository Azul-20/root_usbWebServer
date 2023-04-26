<?php

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST['opera'];

switch ($operacion){
    case "SUMAR":
        $resultado = $numero1 + $numero2;
        break;
    case "RESTAR":
        $resultado = $numero1 - $numero2;
        break;
    case "MULTIPLICAR":
        $resultado = $numero1 * $numero2;
        break;
    case "DIVIDIR":
        $resultado = $numero1 / $numero2;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h3><?php echo "El resultado es: " . $resultado ?></h3>
    <button>
        <a href="calculadora.html">Volver</a>
    </button>
</body>
</html>