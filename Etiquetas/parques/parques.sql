-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2017 a las 17:46:02
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parques`
--
CREATE DATABASE IF NOT EXISTS `parques` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parques`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

DROP TABLE IF EXISTS `complejo`;
CREATE TABLE IF NOT EXISTS `complejo` (
  `Nombre` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `Ubicacion` text,
  `Horario` text,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`Nombre`, `Ubicacion`, `Horario`) VALUES
('Delphinus Riviera maya', 'Carretera Federal Cancun - Chetumal Km. 282, 77710 Playa del Carmen, Q.R.', 'martes 8:30–17:00\r\nmiércoles 8:30–17:00\r\njueves 8:30–17:00\r\nviernes 8:30–17:00\r\nsábado 8:30–17:00\r\ndomingo 8:30–17:00\r\nlunes 8:30–17:00'),
('Delphinus Xcaret', 'Carretera Federal Cancun - Chetumal Km. 282, 77710 Playa del Carmen, Q.R.', 'martes 8:30–17\r\nmiércoles 8:30–17\r\njueves 8:30–17\r\nviernes 8:30–17\r\nsábado 8:30–17\r\ndomingo 8:30–17\r\nlunes 8:30–17'),
('Emotions native park', 'Carretera Federal Chetumal-Puerto Juarez Km 285, Ejido Sur, 77712 Playa del Carmen, Q.Roo', 'martes 8–15\r\nmiércoles 8–15\r\njueves 8–15\r\nviernes 8–15\r\nsábado 8–15\r\ndomingo 8–15\r\nlunes 8–15'),
('Parque Fundadores', 'av.Benito Juarez,centro,77710,Playa del carmen Qroo', 'martes Abierto las 24 horas\r\nmiércoles Abierto las 24 horas\r\njueves Abierto las 24 horas\r\nviernes Abierto las 24 horas\r\nsábado Abierto las 24 horas\r\ndomingo Abierto las 24 horas\r\nlunes Abierto las 24 horas'),
('parque la ceiba', 'calle 1 sur , Ejidal,playa del carmen Qroo', 'martes Abierto las 24 horas\r\nmiércoles Abierto las 24 horas\r\njueves Abierto las 24 horas\r\nviernes Abierto las 24 horas\r\nsábado Abierto las 24 horas\r\ndomingo Abierto las 24 horas\r\nlunes Abierto las 24 horas'),
('parque Xplor', 'Carretera Cancún -Tulum Km 282, Puerto Juarez, Solidaridad, 77710 Playa del Carmen, Q.R.', 'martes 9–17\r\nmiércoles 9–17\r\njueves 9–17\r\nviernes 9–17\r\nsábado 9–17\r\ndomingo Cerrado\r\nlunes 9–17'),
('parque, portal maya', '15 avenida norte,77710 playa del carmen Qroo', 'martes Abierto las 24 horas\r\nmiércoles Abierto las 24 horas\r\njueves Abierto las 24 horas\r\nviernes Abierto las 24 horas\r\nsábado Abierto las 24 horas\r\ndomingo Abierto las 24 horas\r\nlunes Abierto las 24 horas'),
('Xaman-Ha Aviario', 'Paseo Xaman - Ha, Galaxia del Carmen II, 77717 Playa del Carmen, Q.R.', 'martes 9–17\r\nmiércoles 9–17\r\njueves 9–17\r\nviernes 9–17\r\nsábado 9–17\r\ndomingo 9–17\r\nlunes 9–17'),
('Xcaret', 'Carretera chetumal-puerto juarez kilometro 282, solidaridad, 77710, playa del carmen Q.R', 'martes 8:30–21\r\nmiércoles 8:30–21\r\njueves 8:30–21\r\nviernes 8:30–21\r\nsábado 8:30–21\r\ndomingo 8:30–21\r\nlunes 8:30–21'),
('Xenses', 'Carretera Chetumal-puerto juarez. Km 282, Solidaridad, 77710 Playa del Carmer, Q.R.', 'martes 9–13, 14–19\r\nmiércoles 9–13, 14–19\r\njueves 9–13, 14–19\r\nviernes 9–13, 14–19\r\nsábado 9–13, 14–19\r\ndomingo Cerrado\r\nlunes 9–13, 14–19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos de parques`
--

DROP TABLE IF EXISTS `tipos de parques`;
CREATE TABLE IF NOT EXISTS `tipos de parques` (
  `Nombre` varchar(120) CHARACTER SET utf8 NOT NULL,
  `TipoParque` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Activo` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos de parques`
--

INSERT INTO `tipos de parques` (`Nombre`, `TipoParque`, `Activo`) VALUES
('Delphinus riviera maya', 'Acuatico', 'Si'),
('Delphinus Xcaret', 'Acuatico', 'si'),
('Emotions native park', 'Eco-parque arqueológico', 'si'),
('Fundadores', 'publico', 'si'),
('Parque la ceiba', 'Ecologico', 'si'),
('Portal Maya', 'publico', 'si'),
('Xaman-Ha Aviario', 'Aviario', 'si'),
('Xcaret', 'Eco-parque Arqueológico', 'si'),
('Xenses', 'Eco-parque arqueológico', 'si'),
('Xplor', 'Eco-parque arqueológico', 'si');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
