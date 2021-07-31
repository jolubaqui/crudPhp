<?php
include('funciones.php');
    session_start();
    $vid=$_POST['codigo'];
    $vnombre=$_POST['nombre'];
    $vtipo=$_POST['tipo'];

    $miconexion=conectar_bd('1', 'sena_bd');
    $resultado=consulta($miconexion, "insert into programa (progra_id,progra_nombre,progra_tipo)
        values ({$vid},'{$vnombre}',{$vtipo})");

    if ($resultado)
    {
        echo "Guardado exitoso";
    }
?>