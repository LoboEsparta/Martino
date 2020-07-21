-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2020 a las 06:26:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido_P` varchar(25) NOT NULL,
  `Apellido_M` varchar(25) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Contraseña` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auxiliar`
--

INSERT INTO `auxiliar` (`Ide`, `Nombre`, `Apellido_P`, `Apellido_M`, `Telefono`, `Contraseña`) VALUES
(1, 'Jazmin', 'Torres', 'Hernandez', 238123456, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Ide`, `Nombre`) VALUES
(141, 'Postres'),
(142, 'carnes'),
(143, 'pescados'),
(145, 'mariscos'),
(146, 'pastas'),
(148, 'mariscos'),
(150, 'verduras'),
(151, 'ensaladas'),
(154, 'caldos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellido_P` varchar(25) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id`, `Nombre`, `Apellido_P`, `Telefono`, `Hora`) VALUES
(0, 'Antonio', 'Zaragoza', 238154655, NULL),
(4848, 'Carlos', 'Hernandez', 231565464, '12:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `Ide` int(11) NOT NULL,
  `Informacion` varchar(25) NOT NULL,
  `Ide_Categoria` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`Ide`, `Informacion`, `Ide_Categoria`, `Precio`) VALUES
(1, 'Tacos', 0, 25),
(2, 'Pasta a la Hawaina', 7, 75),
(4, 'Arroz a la Mexicana', 6, 45),
(8, 'Lomo en Adobo', 8, 80),
(9, 'Rollo de Sushi', 441, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Ide` int(11) NOT NULL,
  `Nombre_Cliente` varchar(25) NOT NULL,
  `Fecha` date NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Ide`, `Nombre_Cliente`, `Fecha`, `Total`) VALUES
(155501, 'Jose Antonio', '0000-00-00', 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido_P` varchar(25) NOT NULL,
  `Apellido_M` varchar(25) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Contraseña` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`Ide`, `Nombre`, `Apellido_P`, `Apellido_M`, `Telefono`, `Contraseña`) VALUES
(1111, 'Carlos', 'Gonzalez', 'Torres', 238116533, 1111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`Ide`, `Nombre`) VALUES
(400, 'cebolla'),
(401, 'salsa'),
(500, 'cebolla'),
(501, 'salsa'),
(503, 'ajo'),
(504, 'jitomate'),
(505, 'ajo'),
(506, 'jitomate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `Id` int(11) NOT NULL,
  `Numero_Mesa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`Id`, `Numero_Mesa`) VALUES
(444, 1),
(555, 2),
(666, 3),
(777, 4),
(5555, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesero`
--

CREATE TABLE `mesero` (
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido_P` varchar(25) NOT NULL,
  `Apellido_M` varchar(25) NOT NULL,
  `Clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesero`
--

INSERT INTO `mesero` (`Ide`, `Nombre`, `Apellido_P`, `Apellido_M`, `Clave`) VALUES
(1, 'Marcos', 'Hernandez', 'Martinez', 456),
(2, 'Fabian ', 'Martinez', 'Campos', 147);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `Ide` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Id_Pedido` int(11) DEFAULT NULL,
  `Iva` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Subtotal` int(11) DEFAULT NULL,
  `Propina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`Ide`, `Fecha`, `Id_Pedido`, `Iva`, `Total`, `Subtotal`, `Propina`) VALUES
(1233, '0000-00-00', 1, 15, 1000, 850, 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Ide` int(11) NOT NULL,
  `Estado` char(25) DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Clave_Pedido` int(11) DEFAULT NULL,
  `Id_Mesero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Ide`, `Estado`, `Hora`, `Fecha`, `Clave_Pedido`, `Id_Mesero`) VALUES
(45, NULL, '11:50:00', '0000-00-00', 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `Ide` int(11) NOT NULL,
  `Id_Clientes` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_Pedidos` int(11) NOT NULL,
  `Numero_Personas` int(11) NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`Ide`, `Id_Clientes`, `Fecha`, `Id_Pedidos`, `Numero_Personas`, `Hora`) VALUES
(8, 4, '0000-00-00', 7, 5, '11:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `Ide` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`Ide`, `Nombre`) VALUES
(101, 'Matutino'),
(102, 'Vespertino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `mesero`
--
ALTER TABLE `mesero`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`Ide`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`Ide`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliar`
--
ALTER TABLE `auxiliar`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155502;

--
-- AUTO_INCREMENT de la tabla `gerente`
--
ALTER TABLE `gerente`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT de la tabla `mesero`
--
ALTER TABLE `mesero`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4142;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
