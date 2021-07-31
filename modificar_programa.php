<!doctype html>
<html>
    <head>
        <title>Modificación de Aprendices</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, 
        shrink-to-fit=no"> 
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
                    <strong class="lgris">Ingrese criterio de busqueda</strong>
                    <br> <br>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                            <input class="form-control" type="number" name="numid"
                            min="0" max="9999999999999" autofocus value=""
                            placeholder="COD PROGRAMA" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                            <input class="btn btn-primary" type="submit"
                            value="Consultar" >
                            <hr>
                            <a class="btn btn-primary" href="menu.php">Volver al menú</a>
                            </div>
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
            session_start();
            $vid=$_POST['numid'];
            $miconexion=conectar_bd('1', 'sena_bd');
            $resultado=consulta($miconexion,"select * from programa where progra_id='{$vid}'");
            if($resultado->num_rows>0)
            { 
            $fila = $resultado->fetch_object(); 
            $_SESSION['ide1']=$fila->progra_id;
            ?>
            <!-- Corregir formulario al de programa -->
                <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                        <div class="col-md-12">
                        <strong class="lgris">Identificación del programa</strong><br>
                        <label class="lgris">Id:</label>
                        <input class="form-control" type="number" name="id" min="1" max="9999999999999" value="<?php echo $fila->progra_id ?>"/>
                        
                        <label class="lgris">Nombres:</label>
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="progra_nombre" required value="<?php echo $fila->progra_nombre ?>"/>
                        
                        <label class="lgris">Tipo de programa:</label>
                        <input class="form-control" type="number" name="progra_tipo" min="1" max="9999999999999" value="<?php echo $fila->progra_tipo ?>" required/>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Actualizar" >
                        <br>
                    
                    </div>
                </form>
                <?php } 
                else{
                echo "No existen registros";
                }
                $miconexion->close();
                }?>
            </div>
        </div> 
        </div> 
    </body>
</html>