CREATE DATABASE tienda;
USE tienda;

CREATE TABLE almacenes (
    id_almacen INT AUTO_INCREMENT PRIMARY KEY,
    nombre_almacen VARCHAR(100),
    descripcion_almacen VARCHAR(255),
    fecha_inicio DATETIME
);

CREATE TABLE producto (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    codigo_barra VARCHAR(50),
    nombre_producto VARCHAR(100),
    stock_producto VARCHAR(20),
    estado INT,
    fecha_ingreso DATETIME,
    fecha_modificacion DATETIME,
    id_almacen INT,
    FOREIGN KEY (id_almacen) REFERENCES almacenes(id_almacen)
);

INSERT INTO almacenes VALUES (NULL, 'Alm principal', 'Principal', '2025-05-24 13:00:14');

INSERT INTO producto VALUES (NULL, '1234567890', 'Esfero rojo', '20', 1, '2025-05-24 13:00:15', '2025-05-24 13:05:00', 1), (NULL, '0987654321', 'Esfero negro', '50', 1, '2025-05-24 13:10:00', '2025-05-24 13:15:00', 1), (NULL, '1122334455', 'Cuaderno', '15', 1, '2025-05-24 13:20:00', '2025-05-24 13:25:00', 1), (NULL, '5566778899', 'Resma papel', '30', 1, '2025-05-24 13:30:00', '2025-05-24 13:35:00', 1), (NULL, '9988776655', 'Carpeta oficio', '100', 1, '2025-05-24 13:40:00', '2025-05-24 13:45:00', 1);