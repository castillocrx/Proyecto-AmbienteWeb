INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa Clásica',
        'Carne de res a la parrilla, queso cheddar fundido, pan suave y esponjoso ligeramente tostado, cebolla, tomate, lechuga y una salsa especial de la casa. Acompañamiento papas.',
        'https://assets.unileversolutions.com/recipes-v2/218401.jpg',
        '8500'
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa de Pollo',
        'Pechuga de pollo marinada en una mezcla de especias y hierbas a la parrilla, pan integral tostado, lechuga, tomate fresco y una mayonesa con sabor a chipotle. Acompañamiento papas.',
        'https://img.freepik.com/fotos-premium/hamburguesa-pollo-sabroso-fresco-papas-fritas-sobre-fondo-oscuro_222237-360.jpg',
        '7800'
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa Vegana',
        'Mezcla de garbanzos, remolacha y avena, con una combinación de especias a la parrilla, pan integral con lechuga, tomate, pepinillos y una salsa de aguacate cremosa. Acompañamiento papas.',
        'https://i.pinimg.com/originals/56/a5/4e/56a54ee5ae99054fb2b9443c014ddc1b.jpg',
        '6500'
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa BBQ',
        'Carne de res a la parrilla y se agrega una salsa BBQ dulce y ahumada encima, panecillo de brioche tostado con aros de cebolla frita, tocino crujiente y una rebanada de queso cheddar derretido. 
Acompañamiento papas.',
        'https://dedoslasamericas.com/wp-content/uploads/2021/04/Flame-grilled-BBQ-bacon-burger.jpg',
        '8000'
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa Mexicana',
        'Carne de res sazonada con una mezcla de especias mexicanas a la parrilla, pan de maíz tostado con guacamole fresco, jalapeños en escabeche, queso fresco y una salsa picante.
Acompañamiento papas.',
        'https://cocinamexicana.club/wp-content/uploads/2021/08/hamburguesa-de-carne-de-res-001.jpg',
        '6700'
    );

INSERT INTO
    `productos` (
        `id`,
        `nombre`,
        `descripcion`,
        `imagen`,
        `precio`
    )
VALUES (
        NULL,
        'Hamburguesa de Salmón',
        'Filetes de salmón fresco, con pan rallado, huevo y condimentos a la parrilla, pan de hamburguesa tostado con aguacate, pepino, cebolla roja y mayonesa de eneldo.
Acompañamiento papas.',
        'https://placeralplato.com/files/2019/06/Hamburguesa-de-salmn-con-mayonesa-de-albahaca-y-lima.jpg',
        '9000'
    );

INSERT INTO
    `factura` (
        `id_factura`,
        `id_usuario`,
        `id_producto`,
        `fecha`
    )
VALUES (NULL, NULL, NULL, '07/10/2023');

INSERT INTO
    `factura` (
        `id_factura`,
        `id_usuario`,
        `id_producto`,
        `fecha`
    )
VALUES (NULL, NULL, NULL, '15/11/2023');

INSERT INTO
    `factura` (
        `id_factura`,
        `id_usuario`,
        `id_producto`,
        `fecha`
    )
VALUES (NULL, NULL, NULL, '01/10/2023');

INSERT INTO
    `factura` (
        `id_factura`,
        `id_usuario`,
        `id_producto`,
        `fecha`
    )
VALUES (NULL, NULL, NULL, '30/09/2023');

INSERT INTO
    `descuento` (
        `id_descuento`,
        `id_factura`,
        `id_producto`,
        `porcentaje`
    )
VALUES (NULL, NULL, NULL, '25%');

INSERT INTO
    `descuento` (
        `id_descuento`,
        `id_factura`,
        `id_producto`,
        `porcentaje`
    )
VALUES (NULL, NULL, NULL, '20%');

INSERT INTO
    `descuento` (
        `id_descuento`,
        `id_factura`,
        `id_producto`,
        `porcentaje`
    )
VALUES (NULL, NULL, NULL, '15%');