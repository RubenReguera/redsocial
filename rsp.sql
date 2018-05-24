-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2018 a las 16:11:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red_social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rsp`
--

CREATE TABLE `rsp` (
  `id_rsp` int(11) NOT NULL,
  `fecha_rsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `titulo_rsp` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuerpo_rsp` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rsp`
--

INSERT INTO `rsp` (`id_rsp`, `fecha_rsp`, `titulo_rsp`, `cuerpo_rsp`, `id_padre`) VALUES
(1, '2018-05-24 14:08:29', 'respuesta electro', 'En redacción, un texto breve que, en lenguaje simple, transmita información a una persona que se encuentra ausente al momento de redactarlo.', 2),
(2, '2018-05-24 14:09:30', 'pensamiento', 'Cualquier pensamiento o idea expresado brevemente, y preparado para su transmisión por cualquier medio de comunicación.', 3),
(3, '2018-05-24 14:10:24', 'Res_prueba', 'Una cantidad arbitraria de información cuyo inicio y final están definidos o son identificables.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rsp`
--
ALTER TABLE `rsp`
  ADD PRIMARY KEY (`id_rsp`),
  ADD KEY `id_padre` (`id_padre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rsp`
--
ALTER TABLE `rsp`
  MODIFY `id_rsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rsp`
--
ALTER TABLE `rsp`
  ADD CONSTRAINT `rsp_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `msg` (`id_msg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
