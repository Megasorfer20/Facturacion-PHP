CREATE DATABASE Supermarket;

USE Supermarket;

CREATE TABLE Categorias(
    categorias_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    descripcion VARCHAR(100),
    imagen VARCHAR(30)
);

CREATE TABLE Clientes(
    cliente_id INT PRIMARY KEY AUTO_INCREMENT,
    celular INT,
    compañia VARCHAR(50)
);

CREATE TABLE Empleados(
    empleado_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    celular INT, 
    direccion VARCHAR(50),
    imagen VARCHAR(30)
);

CREATE TABLE Proveedor(
    proveedor_Id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    telefono INT,
    ciudad VARCHAR(50)
);

CREATE TABLE Factura(
    factura_id INT PRIMARY KEY AUTO_INCREMENT,
    empleado_id INT,
    cliente_id INT,
    fecha DATE,
    FOREIGN KEY (empleado_id) REFERENCES Empleados(empleado_id),
    FOREIGN KEY (cliente_id) REFERENCES Clientes(cliente_id)
);

CREATE TABLE Productos(
    producto_id INT PRIMARY KEY AUTO_INCREMENT,
    categorias_id INT,
    precioUnitario FLOAT,
    stock INT,
    unidadesPedidas INT,
    proveedor_Id INT,
    nombreProducto VARCHAR(50),
    descontinuado TINYINT(1),
    FOREIGN KEY (categorias_id) REFERENCES Categorias(categorias_id),
    FOREIGN KEY (proveedor_Id) REFERENCES Proveedor(proveedor_Id)
);

CREATE TABLE Factura_Detalle(
    factura_id INT,
    producto_id INT,
    cantidad INT,
    precioVenta FLOAT,
    FOREIGN KEY (factura_id) REFERENCES Factura(factura_id),
    FOREIGN KEY (producto_Id) REFERENCES Productos(producto_Id)
);