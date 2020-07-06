-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 19:45:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pedidos`
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
  `Aditamientos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`NumMesa`, `Nombre`, `PlaEntrada`, `PlaPrincipal`, `Postre`, `Bebida`, `Aditamientos`) VALUES
('0', '', 'kwueyvckc', 'qwkuyecdcq', 'qucyvkus', 'qwucvqujwkdh', 'ewkghcvkaHGS'),
('0', '', 'kwueyvckc', 'qwkuyecdcq', 'qucyvkus', 'qwucvqujwkdh', 'ewkghcvkaHGS'),
('0', '', 'kwueyvckc', 'qwkuyecdcq', 'qucyvkus', 'qwucvqujwkdh', 'ewkghcvkaHGS'),
('0', '', '', '', '', '', ''),
('0', '', '', '', '', '', ''),
('0', '', '', '', '', '', ''),
('0', '', 'huevos', 'ensalad', 'pastel', 'cervesa', 'nada '),
('', '', '', '', '', '', ''),
('12', '', 'carne', 'sopa', 'pastel', 'bodka', 'sin sal la carne'),
('12', '', 'carne', 'sopa', 'pastel', 'bodka', 'sin sal la carne'),
('12', 'pedro', 'carne', 'sopa', 'pastel', 'cervesa', 'sin sal la carne'),
('19', 'spopobich', 'yucdcpia', 'oyvewuydc', 'ufiygvrufc', 'udycukew', 'iuydcvuigsdx'),
('127', 'victor', 'tftagdn', 'sjyhegx', 'skyegd', 'kedygcis', 'dwugixd'),
('222', '1', '2', '2', '2', '2', '2'),
('4', '4', '4', '4', '4', '4', '4'),
('', '', '', '', '', '', ''),
('5', '5', '5', '5', '5', '5', '5'),
('', '', '', '', '', '', ''),
('6', '6', '6', '6', '6', '6', '6'),
('a', 'a', 'a', 'a', 'a', 'a', 'a'),
('2', '2', '2', '2', '2', '2', '2'),
('2', '2', '2', '2', '2', '2', '2'),
('1', '1', '1', '1', '1', '1', '1'),
('1', '1', '1', '1', '1', '1', '1'),
('12', 'german', 'arroz', 'pulpo', 'frape', 'agua', 'nada');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
