<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once('../configs.php');

$deltt = new Categorias();

if(isset($_GET['id'])&& isset($_GET['del'])){
    if($_GET['del'] == "eliminar"){
        $deltt->setId($_GET['id']);
        $deltt->eliminarRegistro();
        echo "<script>alert('Categoria borrado Satisfactoriamente');
        document.location='Categorias.php'</script>";

    }
}

?>