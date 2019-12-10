-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2019 a las 05:33:16
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `restaurant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acmin`
--

CREATE TABLE IF NOT EXISTS `acmin` (
  `usuario_a` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acmin`
--

INSERT INTO `acmin` (`usuario_a`, `pass`) VALUES
('admin', 'Tecsup');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `NombreCliente` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Dni` int(8) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Clave` varchar(8) NOT NULL,
  PRIMARY KEY (`Dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`NombreCliente`, `Apellidos`, `Dni`, `Direccion`, `Usuario`, `Clave`) VALUES
('orlando', 'orlando', 12345345, 'orlando', 'orlando', 'orlando'),
('Analy', 'Chupayo', 12365478, 'Urb. La Encalada', 'analy', 'any'),
('Ray', 'Medina', 73495689, 'Urb. La Mangos', 'ray', 'rico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `Cod_Reserva` int(11) NOT NULL AUTO_INCREMENT,
  `Hora` time NOT NULL,
  `Num_Mesa` varchar(2) NOT NULL,
  `Tipo_mesa` varchar(30) NOT NULL,
  `Dia` date NOT NULL,
  `Dni` int(8) NOT NULL,
  PRIMARY KEY (`Cod_Reserva`),
  KEY `FK_Num_Mesa` (`Num_Mesa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`Cod_Reserva`, `Hora`, `Num_Mesa`, `Tipo_mesa`, `Dia`, `Dni`) VALUES
(21, '08:00:00', '4', 'Dos personas', '2019-12-03', 73495689),
(22, '09:00:00', '8', 'Dos personas', '2019-12-13', 12345345),
(23, '00:00:00', '1', 'Personal', '0000-00-00', 0),
(24, '00:00:00', '1', 'Personal', '0000-00-00', 0),
(25, '12:09:00', '3', 'Familiar', '2019-12-13', 12345345),
(26, '00:00:00', '1', 'Personal', '0000-00-00', 0),
(27, '00:00:00', '1', 'Personal', '0000-00-00', 0),
(28, '00:12:00', '3', 'Personal', '2019-12-04', 12345345),
(29, '12:12:00', '3', 'Dos personas', '2019-12-12', 12345345);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
