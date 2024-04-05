<?php

require_once('db.php');

class Proveedor extends conection {

    private $id;
    private $nombre;
    private $telefono;
    private $ciudad;
    
    public function __construct($id = 0, $nombre = "", $telefono ="", $ciudad = "",$dbCnx=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function agregarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("INSERT INTO Proveedor (nombre,telefono,ciudad) VALUES (?,?,?)");
            $stm-> execute([$this->nombre,$this->telefono,$this->ciudad]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function llamartodo(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Proveedor");
            $stm ->execute();
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function eliminarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("DELETE FROM Proveedor WHERE proveedor_Id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
    public function seleccionar(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Proveedor WHERE proveedor_Id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function actualizarInfo(){
        try {
            $stm = $this->dbCnx-> prepare("UPDATE Proveedor SET nombre = ?, telefono = ?, ciudad = ? WHERE proveedor_Id = ?");
            $stm ->execute([$this->nombre,$this->telefono,$this->ciudad,$this->id]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

}

class Categorias extends conection {

    private $id;
    private $nombre;
    private $descripcion;
    private $imagen;
    
    public function __construct($id = 0, $nombre = "", $descripcion ="", $imagen = "",$dbCnx=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function agregarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("INSERT INTO Categorias (nombre,descripcion,imagen) VALUES (?,?,?)");
            $stm-> execute([$this->nombre,$this->descripcion,$this->imagen]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function llamartodo(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Categorias");
            $stm ->execute();
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function eliminarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("DELETE FROM Categorias WHERE categorias_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
    public function seleccionar(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Categorias WHERE categorias_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function actualizarInfo(){
        try {
            $stm = $this->dbCnx-> prepare("UPDATE Categorias SET nombre = ?, descripcion = ?, imagen = ? WHERE categorias_id = ?");
            $stm ->execute([$this->nombre,$this->descripcion,$this->imagen,$this->id]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
}

class Clientes extends conection {

    private $id;
    private $celular;
    private $compañia;

    public function __construct($id = 0, $celular = "", $compañia ="",$dbCnx=""){
        $this->id = $id;
        $this->celular = $celular;
        $this->compañia = $compañia;

        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCompañia($compañia){
        $this->compañia = $compañia;
    }

    public function getCompañia(){
        return $this->compañia;
    }

    public function agregarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("INSERT INTO Clientes (celular,compañia) VALUES (?,?)");
            $stm-> execute([$this->celular,$this->compañia]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function llamartodo(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Clientes");
            $stm ->execute();
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function eliminarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("DELETE FROM Clientes WHERE cliente_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
    public function seleccionar(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Clientes WHERE cliente_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function actualizarInfo(){
        try {
            $stm = $this->dbCnx-> prepare("UPDATE Clientes SET celular = ?, compañia = ? WHERE cliente_id = ?");
            $stm ->execute([$this->celular,$this->compañia,$this->id]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
}

class Empleados extends conection {

    private $id;
    private $nombre;
    private $celular;
    private $direccion;
    private $imagen;
    
    public function __construct($id = 0, $nombre = "", $celular ="", $direccion="", $imagen = "",$dbCnx=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->direccion = $direccion;
        $this->imagen = $imagen;
        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function agregarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("INSERT INTO Empleados (nombre,celular,direccion,imagen) VALUES (?,?,?,?)");
            $stm-> execute([$this->nombre,$this->celular,$this->direccion,$this->imagen]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function llamartodo(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Empleados");
            $stm ->execute();
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function eliminarRegistro(){
        try {
            $stm = $this->dbCnx-> prepare("DELETE FROM Empleados WHERE empleado_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
    public function seleccionar(){
        try {
            $stm = $this->dbCnx-> prepare("SELECT * FROM Empleados WHERE empleado_id = ?");
            $stm ->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function actualizarInfo(){
        try {
            $stm = $this->dbCnx-> prepare("UPDATE Empleados SET nombre = ?, celular = ?, direccion = ?,imagen = ? WHERE empleado_id = ?");
            $stm ->execute([$this->nombre,$this->celular,$this->direccion,$this->compañia,$this->id]);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }
    
}

class Productos extends conection {

    private $id;
    private $idCategoria;
    private $precioUnitario;
    private $stock;
    private $unidadesPedidas;
    private $idProveedor;
    private $nombreProducto;
    private $descontinuado;
    
    public function __construct($id = 0, $idCategoria = "", $precioUnitario ="", $stock="", $unidadesPedidas = "",$idProveedor="",$nombreProducto="",$descontinuado="",$dbCnx=""){
        $this->id = $id;
        $this->idCategoria = $idCategoria;
        $this->precioUnitario = $precioUnitario;
        $this->stock = $stock;
        $this->unidadesPedidas = $unidadesPedidas;
        $this->idProveedor = $idProveedor;
        $this->nombreProducto = $nombreProducto;
        $this->descontinuado = $descontinuado;

        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setidCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }

    public function getidCategoria(){
        return $this->idCategoria;
    }

    public function setprecioUnitario($precioUnitario){
        $this->precioUnitario = $precioUnitario;
    }

    public function getprecioUnitario(){
        return $this->precioUnitario;
    }

    public function setunidadesPedidas($unidadesPedidas){
        $this->unidadesPedidas = $unidadesPedidas;
    }

    public function getunidadesPedidas(){
        return $this->unidadesPedidas;
    }

    public function setstock($stock){
        $this->stock = $stock;
    }

    public function getstock(){
        return $this->stock;
    }
    
    public function setidProveedor($idProveedor){
        $this->idProveedor = $idProveedor;
    }

    public function getidProveedor(){
        return $this->idProveedor;
    }

    public function setnombreProducto($nombreProducto){
        $this->nombreProducto = $nombreProducto;
    }

    public function getnombreProducto(){
        return $this->nombreProducto;
    }

    public function setdescontinuado($descontinuado){
        $this->descontinuado = $descontinuado;
    }

    public function getdescontinuado(){
        return $this->descontinuado;
    }

}

class Factura extends conection {

    private $id;
    private $idEmpleado;
    private $idCliente;
    private $fecha;
    
    public function __construct($id = 0, $idEmpleado = "", $idCliente ="", $fecha="",$dbCnx=""){
        $this->id = $id;
        $this->idEmpleado = $idEmpleado;
        $this->idCliente = $idCliente;
        $this->fecha = $fecha;

        parent::__construct($dbCnx);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setidEmpleado($idEmpleado){
        $this->idEmpleado = $idEmpleado;
    }

    public function getidEmpleado(){
        return $this->idEmpleado;
    }

    public function setidCliente($idCliente){
        $this->idCliente = $idCliente;
    }

    public function getidCliente(){
        return $this->idCliente;
    }

    public function setfecha($fecha){
        $this->fecha = $fecha;
    }

    public function getfecha(){
        return $this->fecha;
    }
    
}

class FacturaDetalle extends conection {

    private $idFactura;
    private $idProducto;
    private $cantidad;
    private $precioVenta;
    
    public function __construct($idFactura = 0, $idProducto = "", $cantidad ="", $precioVenta="",$dbCnx=""){
        $this->idFactura = $idFactura;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
        $this->precioVenta = $precioVenta;

        parent::__construct($dbCnx);
    }

    public function setidFactura($idFactura){
        $this->idFactura = $idFactura;
    }

    public function getId(){
        return $this->id;
    }

    public function setidProducto($idProducto){
        $this->idProducto = $idProducto;
    }

    public function getidProducto(){
        return $this->idProducto;
    }

    public function setcantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function getcantidad(){
        return $this->cantidad;
    }

    public function setprecioVenta($precioVenta){
        $this->precioVenta = $precioVenta;
    }

    public function getprecioVenta(){
        return $this->precioVenta;
    }
    
}

?>