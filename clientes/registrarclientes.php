<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


if(isset($_POST['registrar'])){
    require_once('../configs.php');

    $insertar = new Clientes();

    $insertar->setCelular($_POST['celular']);
    $insertar->setCompañia($_POST['compañia']);

    $insertar->agregarRegistro();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente'); 
    document.location='clientes.php'
    </script>";

}

?>