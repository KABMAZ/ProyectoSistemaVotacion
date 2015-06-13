-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2015 a las 20:30:47
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `katyymaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aperturar`
--

CREATE TABLE IF NOT EXISTS `aperturar` (
`id` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aperturar`
--

INSERT INTO `aperturar` (`id`, `tipo`, `year`) VALUES
(1, 'Presidentes', '2016'),
(2, 'Diputados', '2016'),
(3, 'Diputados', '2016'),
(4, 'Alcaldes', '2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_cand`
--

CREATE TABLE IF NOT EXISTS `inscripcion_cand` (
  `id` int(11) NOT NULL,
  `Dui` varchar(10) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Departamento` varchar(40) NOT NULL,
  `Municipio` varchar(40) NOT NULL,
  `Candidatura` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_partido`
--

CREATE TABLE IF NOT EXISTS `inscripcion_partido` (
`id` int(11) NOT NULL,
  `Nombre` varchar(11) NOT NULL,
  `Bandera` varchar(30) NOT NULL,
  `Dui` varchar(40) NOT NULL,
  `Representante` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion_partido`
--

INSERT INTO `inscripcion_partido` (`id`, `Nombre`, `Bandera`, `Dui`, `Representante`) VALUES
(1, 'NEEP', 'imagenes/NEPP.png', '55555555-5', 'Maria Mendoza'),
(2, 'Dubstep', 'imagenes/dubstep.jpg', '12868154-9', 'katy'),
(3, 'Rap', 'imagenes/rap.gif', '02960860-5', 'Maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_votante`
--

CREATE TABLE IF NOT EXISTS `registro_votante` (
`id` int(11) NOT NULL,
  `Dui` varchar(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Foto` blob NOT NULL,
  `Genero` varchar(1) NOT NULL,
  `Fecha_vencimiento` date NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `id_depa` varchar(40) NOT NULL,
  `id_muni` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_votante`
--

INSERT INTO `registro_votante` (`id`, `Dui`, `Nombre`, `Apellido`, `Foto`, `Genero`, `Fecha_vencimiento`, `Direccion`, `id_depa`, `id_muni`, `estado`) VALUES
(1, '35355446-5', 'Katy', 'Berrios', 0x696d67312e706e67, 'F', '2015-06-12', 'San Francisco', 'La Paz', 'Zacatecoluca', 1),
(2, '11111111-2', 'Dany', 'Garcia', 0x696d67312e706e67, 'M', '2015-06-12', 'La palma', 'La Paz', 'zacatecoluca', 1),
(3, '11111111-3', 'Marisol', 'Campos', 0x696d67312e706e67, 'F', '2015-06-12', 'San Rafael', 'La Paz', 'Zacatecaluca', 1),
(4, '13243546-5', 'maria', 'zavala', 0x696d67312e706e67, 'F', '2015-06-10', 'la palma', 'la paz', 'Zacatecaluca', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `rango` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `clave`, `rango`) VALUES
(1, 'katy', '2222', 'admin'),
(2, 'maria', '1234', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
`id` int(11) NOT NULL,
  `nombre_partido` varchar(100) NOT NULL,
  `candidatura` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`id`, `nombre_partido`, `candidatura`, `voto`) VALUES
(1, 'NEEP', 'Presidentes', 3),
(2, 'NEEP', 'Alcaldes', 3),
(3, 'NEEP', 'Diputados', 3),
(4, 'Dubstep', 'Presidentes', 2),
(5, 'Dubstep', 'Alcaldes', 2),
(6, 'Dubstep', 'Diputados', 2),
(7, 'Rap', 'Presidentes', 1),
(8, 'Rap', 'Alcaldes', 1),
(9, 'Rap', 'Diputados', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aperturar`
--
ALTER TABLE `aperturar`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion_cand`
--
ALTER TABLE `inscripcion_cand`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Dui` (`Dui`);

--
-- Indices de la tabla `inscripcion_partido`
--
ALTER TABLE `inscripcion_partido`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Dui` (`Dui`);

--
-- Indices de la tabla `registro_votante`
--
ALTER TABLE `registro_votante`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Dui` (`Dui`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aperturar`
--
ALTER TABLE `aperturar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inscripcion_partido`
--
ALTER TABLE `inscripcion_partido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `registro_votante`
--
ALTER TABLE `registro_votante`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
