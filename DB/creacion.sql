CREATE TABLE
    productos (
        `Id` INT NOT NULL AUTO_INCREMENT,
        `Nombre` VARCHAR(100) NOT NULL,
        `Descripción` TEXT NOT NULL,
        `Imagen` VARCHAR(255) NOT NULL,
        `Precio` DOUBLE NOT NULL,
        PRIMARY KEY (`Id`)
    ) ENGINE = InnoDB;

CREATE TABLE
    clientes (
        `idCliente` INT (11) NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR (50) NOT NULL,
        `correo` VARCHAR (50) NOT NULL,
        `direccion` VARCHAR (50) NOT NULL,
        `password` VARCHAR (255) NOT NULL,
        `telefono` VARCHAR (50) NOT NULL,
        PRIMARY KEY (`idCliente`)
    ) ENGINE = InnoDB;

CREATE TABLE
    facturas (
        `idFactura` INT NOT NULL AUTO_INCREMENT,
        `factura_idCliente` INT NOT NULL,
        `factura_idProducto` INT NOT NULL,
        `Fecha` DATE NOT NULL,
        PRIMARY KEY (`idFactura`)
    ) ENGINE = InnoDB;

CREATE TABLE
    descuento (
        `Id_descuento` INT NOT NULL AUTO_INCREMENT,
        `Id_factura` INT NOT NULL,
        `Id_producto` INT NOT NULL,
        `Porcentaje` FLOAT NOT NULL,
        PRIMARY KEY (`Id_descuento`)
    ) ENGINE = InnoDB;

--     CREATE TABLE productos (
--     `Id` INT NOT NULL AUTO_INCREMENT,
--     `Nombre` VARCHAR(100) NOT NULL,
--     `Descripción` TEXT NOT NULL,
--     `Imagen` VARCHAR(255) NOT NULL,
--     `Precio` DOUBLE NOT NULL,
--     PRIMARY KEY (`Id`)
-- ) ENGINE = InnoDB;

-- CREATE TABLE clientes (
--     `idCliente` INT NOT NULL AUTO_INCREMENT,
--     `nombre` VARCHAR(50) NOT NULL,
--     `correo` VARCHAR(50) NOT NULL,
--     `direccion` VARCHAR(50) NOT NULL,
--     `password` VARCHAR(255) NOT NULL,
--     `telefono` VARCHAR(50) NOT NULL,
--     PRIMARY KEY (`idCliente`)
-- ) ENGINE = InnoDB;


-- CREATE TABLE facturas (
--     `idFactura` INT NOT NULL AUTO_INCREMENT,
--     `factura_idCliente` INT NOT NULL,
--     `Fecha` DATE NOT NULL,
--     PRIMARY KEY (`idFactura`),
--     FOREIGN KEY (`factura_idCliente`) REFERENCES clientes(`idCliente`)
-- ) ENGINE = InnoDB;

-- CREATE TABLE descuentos (
--     `Id_descuento` INT NOT NULL AUTO_INCREMENT,
--     `Id_factura` INT NOT NULL,
--     `Id_producto` INT NOT NULL,
--     `Porcentaje` FLOAT NOT NULL,
--     PRIMARY KEY (`Id_descuento`),
--     FOREIGN KEY (`Id_factura`) REFERENCES facturas(`idFactura`),
--     FOREIGN KEY (`Id_producto`) REFERENCES productos(`Id`)
-- ) ENGINE = InnoDB;
