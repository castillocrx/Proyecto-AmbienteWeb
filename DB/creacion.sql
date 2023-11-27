CREATE TABLE productos (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(100) NOT NULL,
    `descripción` TEXT NOT NULL,
    `imagen` VARCHAR(255) NOT NULL,
    `precio` DOUBLE NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB;

CREATE TABLE clientes (
    `idCliente` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `correo` VARCHAR(50) NOT NULL,
    `direccion` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `telefono` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`idCliente`)
) ENGINE = InnoDB;

CREATE TABLE facturas (
    `idFactura` INT NOT NULL AUTO_INCREMENT,
    `factura_idCliente` INT NOT NULL,
    `factura_idProducto` INT NOT NULL,
    `fecha` DATE NOT NULL,
    `precioTotal` INT NOT NULL,
    PRIMARY KEY (`idFactura`),
    FOREIGN KEY (`factura_idCliente`) REFERENCES clientes(`idCliente`),
    FOREIGN KEY (`factura_idProducto`) REFERENCES productos(`id`)
) ENGINE = InnoDB;
