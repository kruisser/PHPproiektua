-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2013 a las 11:35:42
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proiektua`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE IF NOT EXISTS `alquileres` (
  `Cod_Alquiler` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_Cliente` int(11) NOT NULL,
  `Cod_Pelicula` int(11) NOT NULL,
  `Entregado` tinyint(1) NOT NULL,
  PRIMARY KEY (`Cod_Alquiler`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Num_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(25) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Usuario` varchar(10) COLLATE utf8_bin NOT NULL,
  `Password` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Num_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `Tipo` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`Tipo`) VALUES
('Accion'),
('Aventuras'),
('Belico'),
('Comedia'),
('Drama'),
('Thriller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `Num_Pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(25) COLLATE utf8_bin NOT NULL,
  `Director` varchar(25) COLLATE utf8_bin NOT NULL,
  `Genero` varchar(25) COLLATE utf8_bin NOT NULL,
  `Year` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  PRIMARY KEY (`Num_Pelicula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`Num_Pelicula`, `Titulo`, `Director`, `Genero`, `Year`, `Stock`) VALUES
(9, 'a', 'a', 'Aventuras', 1972, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
