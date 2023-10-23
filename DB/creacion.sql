CREATE TABLE productos (
    `Id` INT NOT NULL AUTO_INCREMENT,
    `Nombre` VARCHAR(100) NOT NULL,
    `Descripción` TEXT NOT NULL,
    `Imagen` VARCHAR(255) NOT NULL,
    `Precio` DOUBLE NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB;