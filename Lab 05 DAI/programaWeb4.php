<?php
 $precio = $_POST['precio'];
 $cantidad = $_POST['cantidad'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondo_gradiente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Tienda 1</title>
</head>
<body>
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-4'>
                <div class='card'>
                    <div class='card-body'>
                        <?php
                            $icompra = $precio * $cantidad;
                            $dscto1 = 0.05 * $icompra;
                            $iparcial = $icompra - $dscto1;
                            $dscto2 = 0.05 * $iparcial;
                            $d_total = $dscto1 + $dscto2;
                            $ipagar = $iparcial - $dscto2;
                    
                            echo "<label>El importe de la compra: S/.".round($icompra,1)."</label><br>    
                            <label>El descuento total: S/.".round($d_total,1)."</label><br>
                            <label>El importe a pagar: S/.".round($ipagar,1)."</label>";
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