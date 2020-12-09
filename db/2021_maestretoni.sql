-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 17:50:29
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
  `nombre_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido1_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido2_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_empleado` enum('Camarero','Administrador','Mantenimiento') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_empleado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`DNI_empleado`, `nombre_empleado`, `apellido1_empleado`, `apellido2_empleado`, `tipo_empleado`, `password_empleado`) VALUES
('43345600R', 'Carles', 'Puyol', 'Martinez', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('43345611R', 'Daniel', 'Alves', 'Lara', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('43345672R', 'Camilo', 'Vargas', 'Herrera', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055'),
('45414143L', 'Diego', 'Forlan', 'Heras', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055'),
('45545672R', 'Thibaut', 'Courtois', 'Zsaly', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055'),
('45555555R', 'Lucas', 'Torreira', 'Liandez', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492422W', 'Victor', 'Valdes', 'Victoria', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492428W', 'Gerard', 'Pique', 'Bernabeu', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492432W', 'Andres', 'Iniesta', 'Gordillo', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46492452W', 'Federico', 'Gonzalez', 'Urieta', 'Camarero', '81dc9bdb52d04dc20036dbd8313ed055'),
('46660011D', 'Carlos', 'Jimenez', 'Lopez', 'Administrador', '81dc9bdb52d04dc20036dbd8313ed055'),
('47645672R', 'Sergio', 'Ramos', 'Gonzalez', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055'),
('47777777X', 'Jan', 'Oblak', 'Fritolis', 'Mantenimiento', '81dc9bdb52d04dc20036dbd8313ed055');

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
  `ocupacion_mesa` enum('Libre','Ocupado') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `capacidad_mesa`, `ocupacion_mesa`, `id_sala`) VALUES
(1, 6, 'Libre', 1),
(2, 6, 'Libre', 1),
(3, 6, 'Libre', 1),
(4, 6, 'Libre', 1),
(5, 8, 'Libre', 1),
(6, 4, 'Libre', 2),
(7, 4, 'Libre', 2),
(8, 4, 'Libre', 2),
(9, 8, 'Libre', 2),
(10, 2, 'Libre', 3),
(11, 2, 'Libre', 3),
(12, 4, 'Libre', 3),
(13, 2, 'Libre', 4),
(14, 1, 'Libre', 4),
(15, 1, 'Libre', 4),
(16, 3, 'Libre', 4),
(17, 1, 'Libre', 5),
(18, 4, 'Libre', 5),
(19, 2, 'Libre', 5),
(20, 1, 'Libre', 5),
(21, 3, 'Libre', 6),
(22, 2, 'Libre', 6),
(23, 5, 'Libre', 6),
(24, 6, 'Libre', 6),
(25, 1, 'Libre', 6),
(26, 3, 'Libre', 7),
(27, 2, 'Libre', 7),
(28, 4, 'Libre', 7),
(29, 8, 'Libre', 7),
(30, 2, 'Libre', 8),
(31, 1, 'Libre', 8),
(32, 1, 'Libre', 8),
(33, 4, 'Libre', 8),
(34, 6, 'Libre', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ocupacion`
--

CREATE TABLE `tbl_ocupacion` (
  `id_ocupacion` int(11) NOT NULL,
  `fecha_ocupacion` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time DEFAULT NULL,
  `estado_ocupacion` enum('Abierta','Cerrada') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DNI_empleado` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_mesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_ocupacion`
--

INSERT INTO `tbl_ocupacion` (`id_ocupacion`, `fecha_ocupacion`, `hora_inicio`, `hora_final`, `estado_ocupacion`, `DNI_empleado`, `id_mesa`) VALUES
(71, '2020-11-06', '15:48:46', '16:46:30', 'Cerrada', '43345672R', 1),
(72, '2020-11-06', '15:48:53', '15:49:18', 'Cerrada', '43345672R', 6),
(73, '2020-11-06', '15:49:01', '16:48:25', 'Cerrada', '43345672R', 2),
(74, '2020-11-06', '15:49:02', '17:10:26', 'Cerrada', '43345672R', 3),
(75, '2020-11-06', '15:49:03', '17:10:27', 'Cerrada', '43345672R', 4),
(76, '2020-11-06', '15:49:04', '17:10:27', 'Cerrada', '43345672R', 5),
(77, '2020-11-06', '15:49:33', '17:13:28', 'Cerrada', '43345672R', 6),
(78, '2020-11-06', '16:06:16', '16:08:48', 'Cerrada', '43345672R', 7),
(79, '2020-11-06', '16:46:31', '17:10:26', 'Cerrada', '43345672R', 1),
(80, '2020-11-06', '16:48:26', '17:10:26', 'Cerrada', '43345672R', 2),
(81, '2020-11-06', '17:10:28', '17:10:29', 'Cerrada', '43345672R', 1),
(82, '2020-11-06', '17:10:30', '17:10:31', 'Cerrada', '43345672R', 1),
(83, '2020-11-06', '17:10:31', '17:10:32', 'Cerrada', '43345672R', 2),
(84, '2020-11-06', '17:10:33', '17:10:33', 'Cerrada', '43345672R', 2),
(85, '2020-11-06', '17:10:34', '17:10:35', 'Cerrada', '43345672R', 2),
(86, '2020-11-06', '17:10:35', '17:10:36', 'Cerrada', '43345672R', 2),
(87, '2020-11-06', '17:10:36', '17:10:37', 'Cerrada', '43345672R', 2),
(88, '2020-11-06', '17:10:39', '17:10:40', 'Cerrada', '43345672R', 2),
(89, '2020-11-06', '20:01:22', '20:01:26', 'Cerrada', '46492452W', 10),
(90, '2020-11-06', '20:04:34', '20:04:41', 'Cerrada', '46492452W', 10);

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
  MODIFY `id_ocupacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
