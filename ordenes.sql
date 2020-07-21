-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2020 a las 03:19:21
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
-- Base de datos: `ordenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `NumMesa` text NOT NULL,
  `Nombre` text NOT NULL,
  `PlaEntrada` text NOT NULL,
  `PlaPrincipal` text NOT NULL,
  `Postre` text NOT NULL,
  `Bebida` text NOT NULL,
  `Aditamientos` text NOT NULL,
  `stat` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`NumMesa`, `Nombre`, `PlaEntrada`, `PlaPrincipal`, `Postre`, `Bebida`, `Aditamientos`, `stat`) VALUES
('1', 'milton', 'Ensalada', 'Pollo', 'Pastel', 'Café Frio', 'Ninguno', '0'),
('2', 'Vicente', 'Ensalada', 'Bisteck', 'Dona', 'Malteada', 'Ninguno', '0'),
('4', 'Angel', 'Alitas', 'Nachos', 'Niguno', 'Cerveza', 'Salsa extra', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
