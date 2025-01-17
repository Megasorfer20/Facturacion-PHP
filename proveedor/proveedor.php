<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

require_once('../configs.php');

$data = new Proveedor();

$all = $data->llamartodo();

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUPERMARKET Proveedores </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  
    <link rel="stylesheet" href="../css/estilos.css">

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
        <a href="../estudiantes.php" style="display: flex;gap:1px;">
          <h3 style="margin: 0px;font-weight: 800;">Productos</h3>
        </a>
        <a href="proveedor.php" style="display: flex;gap:1px;">
          <h3 style="margin: 0px;font-weight: 800;">Proveedor</h3>
        </a>
      </div>
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
        <h2>Info Proveedores</h2>
        <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
      </div>
      <div class="menuTabla contenedor2">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">TELEFONO</th>
              <th scope="col">CIUDAD</th>
              
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <!-- ///////Llenado DInamico desde la Base de Datos -->

            <?php
              foreach($all as $key => $value){

            ?>
            <tr>
              <td><?= $value ['proveedor_Id']?></td>
              <td><?= $value ['nombre']?></td>
              <td><?= $value ['telefono']?></td>
              <td><?= $value ['ciudad']?></td>
              <td>
                <a class="btn btn-danger" href="eliminarProveedor.php?id=<?= $value ['proveedor_Id']?>&del=eliminar">Borrar</a>
                
                <a class="btn btn-warning" href="ediarProveedor.php?id=<?= $value ['proveedor_Id']?>">Editar</a>
              </td>
            </tr>
                <?php  }?>

          </tbody>
        
        </table>

      </div>

      </div>
    </div>

    <!-- /////////Modal de registro de nuevo estuiante //////////-->
    <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proveedor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" action="registrarProveedor.php" method="post">
              <div class="mb-1 col-12">
                <label for="nombre" class="form-label">Nombre</label>
                <input 
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="telefono" class="form-label">Telefono</label>
                <input 
                  type="number"
                  id="telefono"
                  name="telefono"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input 
                  type="text"
                  id="ciudad"
                  name="ciudad"
                  class="form-control"  
                 
                />
              </div>

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="registrar" name="registrar"/>
              </div>
            </form>  
         </div>       
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>


</body>

</html>