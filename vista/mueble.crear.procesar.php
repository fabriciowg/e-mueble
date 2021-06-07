<?php
include_once '../control/ManejadorMueble.php';
include_once '../gui/navbar.php';


$DatosFormulario = $_POST;
$ManejadorMueble = new ManejadorMueble();

if (empty($DatosFormulario)) {
    header("location: muebles.php");
} else {
    $error = "";
    $consulta = false;
    try {
        $consulta = $ManejadorMueble->alta($DatosFormulario);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
            <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
            <link rel="stylesheet" href="../lib/datatable/dataTables.bootstrap4.min.css" />
            <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../lib/datatable/jquery.dataTables.min.js"></script>  
            <script type="text/javascript" src="../lib/datatable/dataTables.bootstrap4.min.js"></script>    

            <title>Crear Mueble</title>
        </head>
        <body>
            <div class="container">
                <p></p>
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Mueble</h3>
                    </div>
                    <div class="card-body">
                        <?php if ($consulta) { ?>
                            <div class="alert alert-success" role="alert">
                                Operaci&oacute;n realizada con &eacute;xito.
                            </div>
                        <?php } ?>   
                        <?php if (!$consulta) { ?>
                            <div class="alert alert-danger" role="alert">
                                Ha ocurrido un error. <?= $error; ?>
                            </div>
                        <?php } ?>
                        <hr />
                        <a href="muebles.php">
                            <button type="button" class="btn btn-primary">
                                Salir
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </body>
</html>
