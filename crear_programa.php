<!doctype html>
<html>
    <head>
        <title>Creacion de Programas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
        <br>
        <div id="div2">
        <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
        <img src="IMAGENES/banner3.png"> <?php } ?>
        <div id="div3" >
        <?php
            if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
            { 
            ?>
            <form id="formulario" role="form" method="post" action="guardado_programa.php">
                <div class="col-md-12">
                <strong class="lgris">Ingrese los datos del programa</strong>
                <br>
                
                <div class="form-row">
                <label class="lgris">Programa:</label>
                    
                </div>
                <label class="lgris">Código Programa:</label>
                <input class="form-control" type="number" name="codigo" min="9999" max="9999999999999" value="" placeholder="Código Programa" required/>    
                </div>

                <label class="lgris">Nombre Programa:</label>
                <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre" value="" placeholder="Nombre" required/>
                
                <label class="lgris">Tipo:</label>
                <input class="form-control" type="number" name="tipo" min="1" max="999" value="" placeholder="Tipo" required/>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar" >
                <hr>
                <a class="btn btn-primary" href="menu.php">Volver al menú</a>
                </div>
            </form>
        <?php
        }
        else
        {
        echo "No tiene permisos para realizar esta acción";
        } 
        ?>
        <br>
        </div>
    </div> 
    </div> 
    </body>
</html>