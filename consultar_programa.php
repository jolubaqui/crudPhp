<!doctype html>
<html>
    <head>
        <title>Consulta de Programas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
            <br>
            <div id="div2"> 
                <div id="div4" >
                    <form name="formulario" role="form" method="post">
                        <div class="col-md-12">
                            <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                            <br> <br>
                            <div class="form-row">
                            <div class="form-group col-md-3">
                                <input class="form-control" type="number" name="progra_id" min="1" max="9999999999999" value="" placeholder="ID PROGRAMAS" />
                            </div>
                            <div class="form-group col-md-3"> 
                                <input class="form-control" style="text-transform: uppercase;" type="text" name="progra_nombre" value="" placeholder="Nombre Programa" />
                            </div>
                            <div class="form-group col-md-3">
                                <input class="form-control" type="number" name="progra_tipo" min="1" max="9999999999999" value="" placeholder="Tipo Programa" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                                <input class="btn btn-primary" type="submit" value="Consultar" >
                            </div>
                            
                                <a class="btn btn-primary" href="menu.php">Volver al menú</a>
                            
                        </div>
                        <br>
                    </div>
                        
                    </form>
                    <br>
                </div>
                <div id="divconsulta2">
                    <?php
                        if ($_SERVER['REQUEST_METHOD']==='POST')
                        {
                        include('funciones.php');
                        $vid = $_POST['progra_id'];
                        $vnombre = $_POST['progra_nombre'];
                        $vtipo = $_POST['progra_tipo'];
                        $miconexion=conectar_bd('1', 'sena_bd');
                        $resultado=consulta($miconexion,"select * from programa where 
                        trim(progra_id) like '%{$vid}%' and (trim(progra_nombre) like 
                        '%{$vnombre}%' 
                        and trim(progra_tipo) like '%{$vtipo}%')");
                        if($resultado->num_rows>0)
                        { 
                        while ($fila = $resultado->fetch_object()) 
                        {
                        echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";
                        }
                        }
                        else{
                        echo "No existen registros";
                        }
                        $miconexion->close();
                        }
                    ?>
                </div>
            </div> 
        </div> 
    </body>
</html>