<?php
    $nombre = $_POST['nombre'];
    $hijos = $_POST['hijos'];
    $itotal = $_POST['itotal'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondo_gradiente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Empresa 1</title>
</head>
<body>
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-4'>
                <div class='card'>
                    <div class='card-body'>
                        <?php
                            $bonificacion = $hijos * 50;
                            $comision = 0.075 * $itotal;    
                            $sbruto = 600 + $comision + $bonificacion;
                            $dscto = 0.11 * $sbruto;
                            $sneto = $sbruto - $dscto;

                            echo "<label>Comisión: S/.".round($comision,1)."</label><br>    
                            <label>Bonificación: S/.".$bonificacion."</label><br>
                            <label>Sueldo bruto: S/.".round($sbruto,1)."</label><br>
                            <label>Descuento: S/.".round($dscto,1)."</label><br><br>
                            <label>Finalmente, el sueldo neto de ".$nombre." es:</label>
                            <br>S/.".round($sneto,1);
                        ?>
                        <br><br>
                        <a href="index.html"><input class="btn btn-danger" type="button" value="Volver"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>