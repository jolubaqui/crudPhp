<?php
    include('funciones.php');
    session_start();
    $vid=$_POST['id'];
    $vnombre=$_POST['progra_nombre'];
    $vtipo=$_POST['progra_tipo'];

    $miconexion=conectar_bd('1', 'sena_bd');
    $resultado=consulta($miconexion, "update programa set progra_nombre='{$vnombre}', progra_tipo='{$vtipo}' WHERE progra_id='{$vid}'");

    if ($resultado)
    {
        echo "Actualizado correctamente";
    }
?>