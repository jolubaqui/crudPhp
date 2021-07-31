<?php
include('funciones.php');
    session_start();
    $vnum=$_POST['numero'];
    $vficha=$_POST['ficha'];
    

    $miconexion=conectar_bd('1', 'sena_bd');
    $resultado=consulta($miconexion, "insert into fichas (ficha_numero,ficha_progra)
        values ({$vnum},'{$vficha}') ");

    if ($resultado)
    {
        echo "Guardado exitoso";
    }
?>