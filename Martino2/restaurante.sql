-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2020 a las 19:27:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar`
--

CREATE TABLE `auxiliar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoP` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoM` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `clave` int(11) NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`id`, `nombre`, `apellidoP`, `apellidoM`, `clave`, `telefono`) VALUES
(1, 'Antonio', 'Martinez', 'Guerrero', 2020, '2387805741'),
(2, 'Juan', 'Lopez', 'Marquez', 2040, '2381902561'),
(3, 'Pako ', 'Cannan', 'Rayon', 4631, '2381532378'),
(4, 'Gerardo', 'Soto', 'Altamirano', 2468, '2381093338');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(600, 'mariscos'),
(601, 'pastas'),
(603, 'postre'),
(604, 'frutas'),
(605, 'verduras'),
(606, 'carnes rojas'),
(607, 'pollo'),
(608, 'legumbres'),
(609, 'entradas'),
(610, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoP` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoM` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidoP`, `apellidoM`, `telefono`) VALUES
(1, 'Luis', 'Altamirano', 'Huerta', '23810923'),
(2, 'Ofelia', 'Martinez', 'Huerta', '2391053471'),
(3, 'Carlos ', 'Valdez', 'Espinoza', '2381973345'),
(4, 'Ernesto', 'Fuentes', 'Cruz', '2381963744'),
(5, 'Diana', 'Hernandez', 'Valerio', '2381944434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id`, `nombre`, `precio`, `descripcion`, `id_categoria`) VALUES
(1, 'Pipian', 80, 'pipían de pollo de tomatillo verde, y semilla de calabaza de ajonjolí  ', 607),
(2, 'Mole', 60, 'mole poblano con  principalmente a base de chiles y especias, y que son espesadas con masa de maíz ', 607),
(3, 'Alubias', 41, 'Nuevo', 606),
(5, 'Frijoles charros', 50, 'Consiste en frijoles con una variedad de ingredientes al estilo del norte', 608),
(6, 'Trufas de cava y frambuesa', 120, ' nos tienen robado el corazón...¡y el estómago! frutas bañadas en chocolate con ingredientes muy deliciosos ', 603),
(7, 'Tarta de galletas', 50, 'tarta echa con galletas bañadas en chocolate una explosión de sabor ', 603),
(8, 'Enchiladas suizas', 80, 'enchiladas estilo suizo con cebolla morada y los ingredientes típicos', 609),
(9, 'salpicon de res', 60, 'carne de res finamente cortada en fajitas para la degustacion ', 606),
(10, 'pechugas de pollo', 120, 'pechugas de pollo con salsa ', 607),
(11, 'albondigas', 80, 'carne molida en salsa de chipotle con varios condimentos', 606),
(12, 'tortas de papa', 70, 'una orden de 4 tortas de papa acompañada con ensalada de lechuga', 609),
(13, 'alambre de res', 170, 'principalmente pimientos, carne de res cebolla para quedar satisfecho', 606),
(14, 'tinga de pollo', 80, 'carne de pollo desmenuzada, con salsa de chipotle', 607),
(15, 'curry de pollo', 80, 'cuadritos de pollo en salsa de chipotle ', 607),
(16, 'ensalada', 50, 'ensalada con verduras frescas ', 605),
(17, 'espaguetti', 50, 'pasta con salsa de tomate y condimentos exquisitos ', 601),
(18, 'crema de elote', 30, 'platillo de entrada muy popular para esta temporada', 605),
(19, 'agua mineral', 20, 'agua embotellada para acompañar su comida', 610);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_ingredientes`
--

CREATE TABLE `comida_ingredientes` (
  `id_comida` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `comida_ingredientes`
--

INSERT INTO `comida_ingredientes` (`id_comida`, `id_ingrediente`) VALUES
(1, 18),
(2, 1),
(3, 19),
(5, 20),
(6, 23),
(7, 22),
(8, 21),
(9, 7),
(10, 13),
(11, 2),
(12, 9),
(13, 8),
(14, 10),
(15, 11),
(16, 17),
(17, 4),
(18, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida_pedido`
--

CREATE TABLE `comida_pedido` (
  `id_comida` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `comida_pedido`
--

INSERT INTO `comida_pedido` (`id_comida`, `id_pedido`, `cantidad`) VALUES
(19, 1, 3),
(16, 1, 2),
(8, 3, 1),
(11, 2, 1),
(18, 1, 2),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoP` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoM` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(11) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`id`, `nombre`, `apellidoP`, `apellidoM`, `telefono`, `password`) VALUES
(1, 'Antonio', 'Pilar', 'Fernandez', '2384643541', 'Antonio_2020'),
(2, 'Isabel', 'Lopez', 'Sanchez', '2384657481', 'Sanchez2019'),
(3, 'Edgar', 'Gonazalez', 'Moreno', '2381542347', 'Edgar_elmejor'),
(4, 'Monica', 'Galindo', 'Nuñes', '2381532375', 'Galindo_2000'),
(5, 'Benito', 'Navarro', 'Camelo', '2387805740', 'Benito_Camelo'),
(6, 'Susana', 'Oriana', 'Del toro', '2381532372', 'Susana033');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nombre`) VALUES
(1, 'cebolla,sal,canela,clavos,poll'),
(2, 'carne_molida,tomate;papas,ajo,'),
(4, 'aceite,tomates,sal,cebolla'),
(7, 'cebolla,ajo,jitomate,sal,res,c'),
(8, 'bistec,pimientos,tocino,queso,'),
(9, 'papas,atun,huevo,cebolla,pimie'),
(10, 'pechuga_de_pollo,agua,chipotle'),
(11, 'manteca,salsa,ajo,leche_de_coc'),
(13, 'pollo,jamon,quesillo,pimienta,'),
(14, 'leche,crema,mantequilla,elote,'),
(15, 'papas'),
(17, 'lechuga,jitomate,aderezo,aguac'),
(18, 'tocino,ajo,cebolla,cilantro,to'),
(19, 'cilantro,tocino,tomate,laurel,salchichas'),
(20, 'tocino,salchicha,agua,chiles,cebolla,frijoles'),
(21, 'tomates,chiles,cilantro,cebolla,pechuga,tortilla'),
(22, 'limon,chocolate,canela,galletas'),
(23, 'cacao,nata_liquida,mantequilla,azucar,fambruesa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `numero`) VALUES
(100, 1),
(101, 2),
(103, 3),
(104, 4),
(105, 5),
(106, 6),
(107, 7),
(108, 8),
(109, 9),
(110, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa_reservacion`
--

CREATE TABLE `mesa_reservacion` (
  `id_mesa` int(11) NOT NULL,
  `id_reservacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `mesa_reservacion`
--

INSERT INTO `mesa_reservacion` (`id_mesa`, `id_reservacion`) VALUES
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesero`
--

CREATE TABLE `mesero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoP` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoM` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `clave` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `mesero`
--

INSERT INTO `mesero` (`id`, `nombre`, `apellidoP`, `apellidoM`, `clave`, `id_turno`) VALUES
(1, 'Jose', 'Cabanzo', 'Duro', 4758, 1),
(2, 'Brandon', 'Jesus', 'Tapia', 5859, 2),
(3, 'Mariano', 'Perez', 'Araujo', 7653, 1),
(4, 'Yair', 'Tobon', 'Da silva', 4950, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `IVA` int(11) NOT NULL,
  `propina` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_gerente` int(11) DEFAULT NULL,
  `id_auxiliar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `fecha`, `hora`, `subtotal`, `total`, `IVA`, `propina`, `id_pedido`, `id_cliente`, `id_gerente`, `id_auxiliar`) VALUES
(1, '2020-07-26', '00:00:09', 120, 135, 15, 0, 1, 5, 1, NULL),
(3, '2020-06-26', '00:06:00', 150, 165, 15, 0, 2, 4, NULL, 3),
(4, '2020-07-30', '00:29:10', 180, 220, 20, 20, 3, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `clave` int(11) NOT NULL,
  `estado` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_mesero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `clave`, `estado`, `hora`, `fecha`, `id_cliente`, `id_mesero`) VALUES
(1, 4544, 'Activo', '20:37:05', '2020-07-24', 5, 1),
(2, 3456, 'Activo', '21:01:49', '2020-07-24', 4, 1),
(3, 2020, 'Inactivo', '21:05:52', '2020-07-24', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_mesa`
--

CREATE TABLE `pedido_mesa` (
  `id_mesa` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pedido_mesa`
--

INSERT INTO `pedido_mesa` (`id_mesa`, `id_pedido`) VALUES
(100, 2),
(101, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `telefono` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `num_mesas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id`, `fecha`, `hora`, `telefono`, `id_cliente`, `num_mesas`) VALUES
(1, '2020-07-24', '20:43:09', 381938, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id`, `nombre`) VALUES
(1, 'Matutino'),
(2, 'Despertino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `comida_ingredientes`
--
ALTER TABLE `comida_ingredientes`
  ADD KEY `id_comida` (`id_comida`,`id_ingrediente`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
-- Indices de la tabla `comida_pedido`
--
ALTER TABLE `comida_pedido`
  ADD KEY `id_comida` (`id_comida`,`id_pedido`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pago` (`id_pago`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa_reservacion`
--
ALTER TABLE `mesa_reservacion`
  ADD KEY `id_mesa` (`id_mesa`,`id_reservacion`),
  ADD KEY `id_reservacion` (`id_reservacion`);

--
-- Indices de la tabla `mesero`
--
ALTER TABLE `mesero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_turno` (`id_turno`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`,`id_cliente`,`id_gerente`,`id_auxiliar`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_gerente` (`id_gerente`),
  ADD KEY `id_auxiliar` (`id_auxiliar`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`,`id_mesero`),
  ADD KEY `id_mesero` (`id_mesero`);

--
-- Indices de la tabla `pedido_mesa`
--
ALTER TABLE `pedido_mesa`
  ADD KEY `id_mesa` (`id_mesa`,`id_pedido`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=611;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `mesero`
--
ALTER TABLE `mesero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comida`
--
ALTER TABLE `comida`
  ADD CONSTRAINT `comida_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `comida_ingredientes`
--
ALTER TABLE `comida_ingredientes`
  ADD CONSTRAINT `comida_ingredientes_ibfk_1` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`),
  ADD CONSTRAINT `comida_ingredientes_ibfk_2` FOREIGN KEY (`id_comida`) REFERENCES `comida` (`id`);

--
-- Filtros para la tabla `comida_pedido`
--
ALTER TABLE `comida_pedido`
  ADD CONSTRAINT `comida_pedido_ibfk_1` FOREIGN KEY (`id_comida`) REFERENCES `comida` (`id`),
  ADD CONSTRAINT `comida_pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_pago`) REFERENCES `pago` (`id`);

--
-- Filtros para la tabla `mesa_reservacion`
--
ALTER TABLE `mesa_reservacion`
  ADD CONSTRAINT `mesa_reservacion_ibfk_1` FOREIGN KEY (`id_reservacion`) REFERENCES `reservacion` (`id`),
  ADD CONSTRAINT `mesa_reservacion_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id`);

--
-- Filtros para la tabla `mesero`
--
ALTER TABLE `mesero`
  ADD CONSTRAINT `mesero_ibfk_1` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `pago_ibfk_3` FOREIGN KEY (`id_gerente`) REFERENCES `gerente` (`id`),
  ADD CONSTRAINT `pago_ibfk_4` FOREIGN KEY (`id_auxiliar`) REFERENCES `auxiliar` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_mesero`) REFERENCES `mesero` (`id`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `pedido_mesa`
--
ALTER TABLE `pedido_mesa`
  ADD CONSTRAINT `pedido_mesa_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id`),
  ADD CONSTRAINT `pedido_mesa_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`);

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD CONSTRAINT `reservacion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
