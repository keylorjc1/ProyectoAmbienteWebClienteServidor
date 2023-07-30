CREATE DATABASE WAPICR;

USE WAPICR;

-- Tabla de clientes
CREATE TABLE Cliente (
  IDCliente INT PRIMARY KEY,
  Nombre VARCHAR(50),
  Apellido VARCHAR(50),
  Direccion VARCHAR(100),
  CorreoElectronico VARCHAR(50),
  Telefono VARCHAR(20),
  FechaRegistro DATE
);

-- Tabla de empleados
CREATE TABLE Empleado (
  IDEmpleado INT PRIMARY KEY,
  Nombre VARCHAR(50),
  Apellido VARCHAR(50),
  Direccion VARCHAR(100),
  CorreoElectronico VARCHAR(50),
  Telefono VARCHAR(20),
  FechaContratacion DATE,
  Cargo VARCHAR(50),
  Salario DECIMAL(10, 2)
);

-- Tabla de servicios
CREATE TABLE Servicio (
  IDServicio INT PRIMARY KEY,
  NombreServicio VARCHAR(50),
  Descripcion VARCHAR(100),
  Duracion INT,
  Precio DECIMAL(10, 2)
);

-- Tabla de productos
CREATE TABLE Producto (
  IDProducto INT PRIMARY KEY,
  NombreProducto VARCHAR(50),
  Descripcion VARCHAR(100),
  Precio DECIMAL(10, 2),
  CantidadStock INT
);

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE Cita;
SET FOREIGN_KEY_CHECKS = 1;

-- Tabla de citas
CREATE TABLE Cita (
  IDCita INT PRIMARY KEY AUTO_INCREMENT,
  nombre_completo VARCHAR(100),
  telefono VARCHAR(15),
  fecha DATETIME,
  hora TIME,
  descripcion VARCHAR(500)
  -- IDCliente INT,
  -- IDEmpleado INT,
  -- IDServicio INT,
  -- FOREIGN KEY (IDCliente) REFERENCES Cliente(IDCliente),
  -- FOREIGN KEY (IDEmpleado) REFERENCES Empleado(IDEmpleado),
  -- FOREIGN KEY (IDServicio) REFERENCES Servicio(IDServicio)
);

-- Tabla de compras
CREATE TABLE Compra (
  IDCompra INT PRIMARY KEY,
  FechaCompra DATE,
  Total DECIMAL(10, 2)
);

-- Tabla de detalles de compra
CREATE TABLE DetalleCompra (
  IDDetalleCompra INT PRIMARY KEY,
  IDCompra INT,
  IDProducto INT,
  Cantidad INT,
  PrecioUnitario DECIMAL(10, 2),
  FOREIGN KEY (IDCompra) REFERENCES Compra(IDCompra),
  FOREIGN KEY (IDProducto) REFERENCES Producto(IDProducto)
);

-- Tabla de pagos
CREATE TABLE Pago (
  IDPago INT PRIMARY KEY,
  IDCliente INT,
  FechaPago DATE,
  Monto DECIMAL(10, 2),
  FOREIGN KEY (IDCliente) REFERENCES Cliente(IDCliente)
);

-- Tabla de consultas
CREATE TABLE Consulta (
  IDConsulta INT PRIMARY KEY,
  IDCliente INT,
  Asunto VARCHAR(100),
  Mensaje VARCHAR(500),
  FechaConsulta DATE,
  FOREIGN KEY (IDCliente) REFERENCES Cliente(IDCliente)
);