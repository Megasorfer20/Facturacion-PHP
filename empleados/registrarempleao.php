<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


if(isset($_POST['registrar'])){
    require_once('../configs.php');

    $insertar = new Proveedor();

    $insertar->setNombre($_POST['nombre']);
    $insertar->setTelefono($_POST['telefono']);
    $insertar->setCiudad($_POST['ciudad']);

    $insertar->agregarRegistro();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente'); 
    document.location='empleao.php'
    </script>";

}

?>