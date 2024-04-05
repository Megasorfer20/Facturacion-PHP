<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once('../configs.php');

$data = new Proveedor();
$id = $_GET['id'];
$data->setId($id);
$selection = $data->seleccionar();
$val = $selection[0];

if(isset($_POST['actualizar'])){

  $data->setNombre($_POST['nombre']);
  $data->setTelefono($_POST['telefono']);
  $data->setCiudad($_POST['ciudad']);

  $data->actualizarInfo();
  echo "<script>alert('Dato Editado Satisfactoriamente');
  document.location='proveedor.php'</script>";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Proveedor</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="../css/estilos.css">

</head>

<body>
<div class="contenedor">

<div class="parte-izquierda">

  <div class="perfil">
    <h3 style="margin-bottom: 2rem;" class="dec-tt">SUPERMARKET</h3>
  </div>
  <div class="menus">
  <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Categorias</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Clientes</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Empleados</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Factura</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Detalles Factura</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Productos</h3>
    </a>
    <a href="estudiantes.php" style="display: flex;gap:1px;">
      <h3 style="margin: 0px;font-weight: 800;">Proveedor</h3>
    </a>
  </div>
</div>

    <div class="parte-media">
        <h2 class="m-2">Estudiante a Editar</h2>
      <div class="menuTabla contenedor2">
      <form class="col d-flex flex-wrap" action=""  method="post">
              <div class="mb-1 col-12">
                <label for="nombre" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-control"  
                  value="<?= $val['nombre']?>"
                />
              </div>

              <div class="mb-1 col-12">
                <label for="telefono" class="form-label">Telefono</label>
                <input 
                  type="number"
                  id="telefono"
                  name="telefono"
                  class="form-control"  
                  value="<?= $val['telefono']?>"
                 
                />
              </div>

              <div class="mb-1 col-12">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input 
                  type="text"
                  id="ciudad"
                  name="ciudad"
                  class="form-control"  
                  value="<?= $val['ciudad']?>"
                  
                />
              </div>

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar"/>
                <a class="btn btn-secondary" href="proveedor.php">Cancelar</a>
              </div>
            </form>  
        <div id="charts1" class="charts"> </div>
      </div>
    </div>



  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>




</body>

</html>