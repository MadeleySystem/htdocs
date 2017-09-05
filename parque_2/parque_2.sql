-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2017 a las 05:08:39
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parque_2`
--
CREATE DATABASE IF NOT EXISTS `parque_2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parque_2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

DROP TABLE IF EXISTS `complejo`;
CREATE TABLE IF NOT EXISTS `complejo` (
  `id` int(1) NOT NULL,
  `Tparque` varchar(120) NOT NULL,
  `administracion` varchar(100) NOT NULL,
  `activos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`id`, `Tparque`, `administracion`, `activos`) VALUES
(1, 'parque arqueologico ecologico', 'xcaret', 1),
(2, 'parque ecologico ', 'xcaret,xplor ', 1),
(3, 'Xenses\r\n', 'xcaret,xenses', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

DROP TABLE IF EXISTS `ubicacion`;
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` int(1) DEFAULT NULL,
  `nombre` varchar(25) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `horarios` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `nombre`, `direccion`, `horarios`) VALUES
(1, 'Xcaret', 'Carretera chetumal-puerto juarez kilometro 282, solidaridad, 77710, playa del carmen Q.R\r\n', '8:00 a 8:00'),
(2, 'parque Xplor', 'Carretera Cancún -Tulum Km 282, Puerto Juarez, Solidaridad, 77710 Playa del Carmen, Q.R.\r\n', '9:00 a 3:00'),
(3, 'Xenses', 'Carretera Chetumal-puerto juarez. Km 282, Solidaridad, 77710 Playa del Carmer, Q.R.\r\n', '9:00 a 6:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
