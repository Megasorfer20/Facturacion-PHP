<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


if(isset($_POST['registrar'])){
    require_once('../configs.php');

    $insertar = new Categorias();

    $insertar->setNombre($_POST['nombre']);
    $insertar->setDescripcion($_POST['descripcion']);
    $insertar->setImagen($_POST['imagen']);

    $insertar->agregarRegistro();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente'); 
    document.location='Categorias.php'
    </script>";

}

?>