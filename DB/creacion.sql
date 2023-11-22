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
        `telefono` VARCHAR (50) NOT NULL,
        PRIMARY KEY (`idCliente`)
    ) ENGINE = InnoDB;

CREATE TABLE
    factura (
        `Id_factura` INT NOT NULL AUTO_INCREMENT,
        `Id_usuario` INT NOT NULL,
        `Id_producto` INT NOT NULL,
        `Fecha` DATE NOT NULL,
        PRIMARY KEY (`Id_factura`)
    ) ENGINE = InnoDB;

CREATE TABLE
    descuento (
        `Id_descuento` INT NOT NULL AUTO_INCREMENT,
        `Id_factura` INT NOT NULL,
        `Id_producto` INT NOT NULL,
        `Porcentaje` FLOAT NOT NULL,
        PRIMARY KEY (`Id_descuento`)
    ) ENGINE = InnoDB;