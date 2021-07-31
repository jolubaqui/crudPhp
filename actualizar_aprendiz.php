<?php
    include('funciones.php');
    session_start();
    $vide=$_SESSION['ide1'];
    $vnombres=$_POST['nombres'];
    $vapellidos=$_POST['apellidos'];
    $vdireccion=$_POST['direccion'];
    $vtelefono=$_POST['telefono'];

    $miconexion=conectar_bd('1', 'sena_bd');
    $resultado=consulta($miconexion, "update aprendices set apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='{$vdireccion}',apre_telefono='{$vtelefono}' where apre_id='{$vide}'");

    if ($miconexion->affected_rows>0)
    {
        echo "Actualización exitosa";
    }
?>