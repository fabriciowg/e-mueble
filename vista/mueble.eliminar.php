<?php
include_once '../modelo/Mueble.Class.php';
include_once '../gui/navbar.php';
$id = $_GET["id"];
$Mueble = new Mueble($id, null);
header('Content-Type: text/html; charset=UTF-8');
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
        <title>Eliminar Mueble</title>
    </head>
    <body>
        <div class="container">
            <form action="mueble.eliminar.procesar.php" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3>Eliminar Mueble</h3>
                    </div>
                    <div class="card-body">
                        <p class="alert alert-warning ">
                            <span class="oi oi-warning"></span> ATENCI&Oacute;N. Esta operaci&oacute;n no puede deshacerse.
                        </p>
                        <p>¿Est&aacute; seguro que desea eliminar el Mueble <b><?= $Mueble->getNombre(); ?></b>?</p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" class="form-control" id="id" value="<?= $Mueble->getId(); ?>" >
                        <button type="submit" class="btn btn-outline-success">
                            <span class="oi oi-check"></span> S&iacute;, deseo eliminar 
                        </button>
                        <a href="muebles.php">
                            <button type="button" class="btn btn-outline-danger">
                                <span class="oi oi-x"></span> NO (Salir de esta pantalla)
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>