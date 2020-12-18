-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 18:02:32
-- Versión del servidor: 8.0.13
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2021_maestretoni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleado`
--

CREATE TABLE `tbl_empleado` (
  `DNI_empleado` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido1_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido2_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_empleado` enum('Camarero','Administrador') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`DNI_empleado`, `nombre_empleado`, `apellido1_empleado`, `apellido2_empleado`, `tipo_empleado`, `password_empleado`) VALUES
('43345600R', 'Pedro', 'Puyol', 'Maestre', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('43345611R', 'Uri', 'Cases', 'Tellu', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('43345672R', 'Camilito', 'Vargas', 'Herrera', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('45545672R', 'Tabu', 'Courtois', 'Zsaly', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('45555555R', 'Lucas', 'Pato', 'Liandez', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492422W', 'Viktor', 'Valdes', 'Victoria', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492428W', 'Gerard', 'Pique', 'Bernabeu', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492452W', 'Federico', 'Gonzalez', 'Urieta', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46660011D', 'Carlos', 'Jimenez', 'Lopez', 'Administrador', '81dc9bdb52d04dc20036dbd8313ed055'),
('47645672R', 'Sergio', 'Gramos', 'Gonzalez', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('47777777X', 'Jan', 'Oblak', 'Fritolis', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('58884456T', 'Dani', 'Puyol', 'Crack', 'Camarero', '1234'),
('91929393S', 'Yefrey', 'Kondogbia', 'Matuto', 'Camarero', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE `tbl_incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `observacion` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DNI_empleado` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_mesa` int(11) DEFAULT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_incidencia`
--

INSERT INTO `tbl_incidencia` (`id_incidencia`, `observacion`, `DNI_empleado`, `id_mesa`, `id_sala`) VALUES
(1, 'La pata de la mesa para 4 personas en terraza playa está rota.', '43345672R', 33, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE `tbl_mesa` (
  `id_mesa` int(11) NOT NULL,
  `capacidad_mesa` int(2) NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `capacidad_mesa`, `id_sala`) VALUES
(1, 6, 1),
(2, 6, 1),
(3, 6, 1),
(4, 6, 1),
(5, 8, 1),
(6, 4, 2),
(7, 4, 2),
(8, 4, 2),
(9, 8, 2),
(10, 2, 3),
(11, 2, 3),
(12, 4, 3),
(13, 2, 4),
(14, 1, 4),
(15, 1, 4),
(16, 3, 4),
(17, 1, 5),
(18, 4, 5),
(19, 2, 5),
(20, 1, 5),
(21, 3, 6),
(22, 2, 6),
(23, 5, 6),
(24, 6, 6),
(25, 1, 6),
(26, 3, 7),
(27, 2, 7),
(28, 4, 7),
(29, 8, 7),
(30, 2, 8),
(31, 1, 8),
(32, 1, 8),
(33, 4, 8),
(34, 6, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ocupacion`
--

CREATE TABLE `tbl_ocupacion` (
  `id_ocupacion` int(11) NOT NULL,
  `nombre_ocupacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ocupacion` date NOT NULL,
  `franja_ocupacion` enum('12:00h-13:00h','13:00h-14:00h','14:00h-15:00h','15:00h-16:00h','16:00h-17:00h','17:00h-18:00h','18:00h-19:00h','19:00h-20:00h','20:00h-21:00h','21:00h-22:00h','22:00h-23:00h') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DNI_empleado` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_ocupacion`
--

INSERT INTO `tbl_ocupacion` (`id_ocupacion`, `nombre_ocupacion`, `fecha_ocupacion`, `franja_ocupacion`, `DNI_empleado`, `id_mesa`) VALUES
(93, 'Pablo', '2020-12-19', '13:00h-14:00h', '47645672R', 9),
(94, 'Francisco', '2020-12-25', '20:00h-21:00h', '91929393S', 31),
(95, 'Agnes', '2020-12-25', '21:00h-22:00h', '46660011D', 12),
(96, 'Error', '2020-12-17', '20:00h-21:00h', '46660011D', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sala`
--

CREATE TABLE `tbl_sala` (
  `id_sala` int(11) NOT NULL,
  `nombre_sala` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sala` enum('Terraza','Comedor','Sala privada','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_sala`
--

INSERT INTO `tbl_sala` (`id_sala`, `nombre_sala`, `tipo_sala`) VALUES
(1, 'Comedor Central', 'Comedor'),
(2, 'Comedor Superior', 'Comedor'),
(3, 'Sala Privada Playa', 'Sala privada'),
(4, 'Sala Privada Montaña', 'Sala privada'),
(5, 'Sala Privada Interior', 'Sala privada'),
(6, 'Terraza Montaña', 'Terraza'),
(7, 'Terraza Playa', 'Terraza'),
(8, 'Terraza Central', 'Terraza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD PRIMARY KEY (`DNI_empleado`);

--
-- Indices de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `id_mesa` (`id_mesa`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `DNI_empleado` (`DNI_empleado`);

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Indices de la tabla `tbl_ocupacion`
--
ALTER TABLE `tbl_ocupacion`
  ADD PRIMARY KEY (`id_ocupacion`),
  ADD UNIQUE KEY `fecha_ocupacion` (`fecha_ocupacion`,`franja_ocupacion`),
  ADD KEY `DNI_empleado` (`DNI_empleado`),
  ADD KEY `id_mesa` (`id_mesa`);

--
-- Indices de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tbl_ocupacion`
--
ALTER TABLE `tbl_ocupacion`
  MODIFY `id_ocupacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD CONSTRAINT `tbl_incidencia_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `tbl_sala` (`id_sala`),
  ADD CONSTRAINT `tbl_incidencia_ibfk_3` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`),
  ADD CONSTRAINT `tbl_incidencia_ibfk_4` FOREIGN KEY (`DNI_empleado`) REFERENCES `tbl_empleado` (`dni_empleado`);

--
-- Filtros para la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD CONSTRAINT `tbl_mesa_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `tbl_sala` (`id_sala`);

--
-- Filtros para la tabla `tbl_ocupacion`
--
ALTER TABLE `tbl_ocupacion`
  ADD CONSTRAINT `tbl_ocupacion_ibfk_1` FOREIGN KEY (`DNI_empleado`) REFERENCES `tbl_empleado` (`dni_empleado`),
  ADD CONSTRAINT `tbl_ocupacion_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
