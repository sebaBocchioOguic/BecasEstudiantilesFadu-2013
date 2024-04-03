-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2013 a las 00:33:08
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fadu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becas`
--

CREATE TABLE IF NOT EXISTS `becas` (
  `id_beca` int(9) NOT NULL AUTO_INCREMENT,
  `nombre_becas` varchar(70) NOT NULL,
  `total_vacantes_becas` int(4) NOT NULL,
  `vigente_becas` varchar(1) NOT NULL,
  PRIMARY KEY (`id_beca`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Esta tabla almacena las becas solicitadas' AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `becas`
--

INSERT INTO `becas` (`id_beca`, `nombre_becas`, `total_vacantes_becas`, `vigente_becas`) VALUES
(1, 'Materiales', 40, 'S'),
(2, 'Libros', 200, 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beca_solicitada`
--

CREATE TABLE IF NOT EXISTS `beca_solicitada` (
  `id_beca_solicitada` int(10) NOT NULL AUTO_INCREMENT,
  `id_beca` int(9) NOT NULL,
  `id_documento` int(9) NOT NULL,
  `fecha_beca_solicitada` date NOT NULL,
  PRIMARY KEY (`id_beca_solicitada`),
  KEY `id_documento` (`id_documento`),
  KEY `id_beca` (`id_beca`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Almacena solicitudes de becas realizadas' AUTO_INCREMENT=31 ;

--
-- Volcar la base de datos para la tabla `beca_solicitada`
--

INSERT INTO `beca_solicitada` (`id_beca_solicitada`, `id_beca`, `id_documento`, `fecha_beca_solicitada`) VALUES
(30, 1, 30369019, '2013-04-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE IF NOT EXISTS `solicitantes` (
  `id_solicitante` int(9) NOT NULL AUTO_INCREMENT,
  `documento_solicitante` int(9) NOT NULL,
  `nombre_solicitante` varchar(40) NOT NULL,
  `apellido_solicitante` varchar(40) NOT NULL,
  `fecha_nac_solicitante` date NOT NULL,
  `domicilio_solicitante` varchar(50) NOT NULL,
  `localidad_solicitante` varchar(50) NOT NULL,
  `provincia_solicitante` varchar(40) DEFAULT NULL,
  `mail_solicitante` varchar(70) NOT NULL,
  `celular_solicitante` int(15) NOT NULL,
  `carrera_solicitante` varchar(50) NOT NULL,
  `nivel_solicitante` varchar(30) NOT NULL,
  `trabaja_solicitante` varchar(1) NOT NULL,
  `internet_solicitante` varchar(1) NOT NULL,
  PRIMARY KEY (`id_solicitante`),
  UNIQUE KEY `documento_solicitante` (`documento_solicitante`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`id_solicitante`, `documento_solicitante`, `nombre_solicitante`, `apellido_solicitante`, `fecha_nac_solicitante`, `domicilio_solicitante`, `localidad_solicitante`, `provincia_solicitante`, `mail_solicitante`, `celular_solicitante`, `carrera_solicitante`, `nivel_solicitante`, `trabaja_solicitante`, `internet_solicitante`) VALUES
(7, 11223366, 'Sebastian', 'Bocchio', '1983-06-30', 'a', 'a', '', 'a@a.com', 41155, 'Arquitectura', 'Diseño 1 - Aprobado', 'S', 'S'),
(8, 30369019, 'Sebastian', 'Bocchio', '1983-06-30', 'a', 'a', '', 'a@a.com', 1122, 'Arquitectura', 'Diseño 1 - En Curso', 'S', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `login_usuario` varchar(30) NOT NULL,
  `pw_usuario` varchar(30) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `apellido_usuario` varchar(30) NOT NULL,
  `perfil_usuario` varchar(30) NOT NULL,
  `fecha_creacion_usuario` date NOT NULL,
  `fecha_ult_conex_usuario` date NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `pw_usuario`, `nombre_usuario`, `apellido_usuario`, `perfil_usuario`, `fecha_creacion_usuario`, `fecha_ult_conex_usuario`) VALUES
(1, 'usuario', 'pw', 'prueba_nom', 'prueba_ape', 'supervisor', '2013-04-03', '2013-04-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
