CREATE TABLE productos (
    `Id` INT NOT NULL AUTO_INCREMENT,
    `Nombre` VARCHAR(100) NOT NULL,
    `Descripción` TEXT NOT NULL,
    `Imagen` VARCHAR(255) NOT NULL,
    `Precio` DOUBLE NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB;


CREATE TABLE usuario (
    `Id_usuario` INT NOT NULL AUTO_INCREMENT,
    `Correo` VARCHAR(150) NOT NULL,
    `Contraseña` VARCHAR(150) NOT NULL,
    `Nombre` VARCHAR(100) NOT NULL,
    `Apellido` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`Id_usuario`)
) ENGINE = InnoDB;

CREATE TABLE factura (
    `Id_factura` INT NOT NULL AUTO_INCREMENT,
    `Id_usuario` INT NOT NULL ,
    `Id_producto` INT NOT NULL ,
    `Fecha` DATE NOT NULL,
    PRIMARY KEY (`Id_factura`)
) ENGINE = InnoDB;

CREATE TABLE descuento (
    `Id_descuento` INT NOT NULL AUTO_INCREMENT,
    `Id_factura` INT NOT NULL ,
    `Id_producto` INT NOT NULL ,
    `Porcentaje` FLOAT NOT NULL,
    PRIMARY KEY (`Id_descuento`)
) ENGINE = InnoDB;
