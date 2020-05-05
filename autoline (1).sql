-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2020 a las 00:06:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autoline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id_auto` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id_auto`, `marca`, `modelo`, `precio`, `foto`) VALUES
(1, 'Volkswagen', 'Gol ', '50000.00', 'img1.jpg'),
(2, 'Ford', 'Transit Van Larga', '50.00', 'img2.jpg'),
(3, 'mazda', 'A5', '40.00', 'img3.jpg'),
(4, 'Lamboguinni', 'Gallardo', '90.00', 'img4.jpg'),
(6, 'chevrolet', 'camaro', '60.00', 'img6'),
(7, 'nissan', 'ford gt', '0.00', ''),
(8, 'gmc', 'gmc1', '40.00', 'img8'),
(9, 'porsche', 'porsche1', '900000.00', 'img9.jpg'),
(10, 'buik', 'ck', '22222.00', 'img9.jpg'),
(11, 'junito', 'juanito', '1000000.00', 'img10.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_especificcacion`
--

CREATE TABLE `descripcion_especificcacion` (
  `id_especificacion` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descripcion_especificcacion`
--

INSERT INTO `descripcion_especificcacion` (`id_especificacion`, `id_auto`, `descripcion`) VALUES
(1, 1, 'Motor de 4 cilindros y 1.6L'),
(1, 2, '4 cilindros de Diesel'),
(3, 1, '2016'),
(4, 1, 'Estandar'),
(4, 2, 'Estandar 6 velocidades.'),
(10, 1, 'Contiene aire acondicionado'),
(10, 2, 'Contiene'),
(13, 2, 'Contiene bolsas de aire'),
(14, 1, '40,000 km');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificacion`
--

CREATE TABLE `especificacion` (
  `id_especificacion` int(11) NOT NULL,
  `especificacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especificacion`
--

INSERT INTO `especificacion` (`id_especificacion`, `especificacion`) VALUES
(1, 'Motor'),
(2, 'Color'),
(3, 'Año'),
(4, 'Transmision'),
(5, 'Numero de puertas'),
(6, 'Altura'),
(7, 'Largo'),
(8, 'Capacidad del tanque'),
(9, 'Direccion'),
(10, 'Aire acondicionado'),
(11, 'Bluetooth'),
(12, 'Reproductor mp3'),
(13, 'Bolsas de aire'),
(14, 'Kilometraje'),
(15, 'Unico dueño'),
(16, 'Faros de niebla'),
(17, 'Caballos de fuerza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_auto`
--

CREATE TABLE `fotos_auto` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_auto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_auto` (`id_auto`);

--
-- Indices de la tabla `descripcion_especificcacion`
--
ALTER TABLE `descripcion_especificcacion`
  ADD PRIMARY KEY (`id_especificacion`,`id_auto`),
  ADD KEY `id_auto` (`id_auto`);

--
-- Indices de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  ADD PRIMARY KEY (`id_especificacion`);

--
-- Indices de la tabla `fotos_auto`
--
ALTER TABLE `fotos_auto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_auto` (`id_auto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  MODIFY `id_especificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `fotos_auto`
--
ALTER TABLE `fotos_auto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descripcion_especificcacion`
--
ALTER TABLE `descripcion_especificcacion`
  ADD CONSTRAINT `descripcion_especificcacion_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `descripcion_especificcacion_ibfk_2` FOREIGN KEY (`id_especificacion`) REFERENCES `especificacion` (`id_especificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fotos_auto`
--
ALTER TABLE `fotos_auto`
  ADD CONSTRAINT `fotos_auto_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
