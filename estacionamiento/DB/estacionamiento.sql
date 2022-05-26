-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 04:28:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tim_est`
--

CREATE TABLE `tim_est` (
  `id` int(10) NOT NULL,
  `placas` varchar(10) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `entrada` timestamp NOT NULL DEFAULT current_timestamp(),
  `salida` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tim_est`
--

INSERT INTO `tim_est` (`id`, `placas`, `tipo`, `entrada`, `salida`) VALUES
(12, 'kj15giuk', 'No Residente', '2022-05-26 00:02:38', '0000-00-00 00:00:00'),
(13, 'ddcc45', 'Residente', '2022-05-26 00:09:30', '0000-00-00 00:00:00'),
(14, 'ddcc45', 'No Residente', '2022-05-26 00:10:51', '0000-00-00 00:00:00'),
(15, 'ddcc45', 'No Residente', '2022-05-26 00:12:46', '0000-00-00 00:00:00'),
(16, 'ddcc45', 'No Residente', '2022-05-26 00:12:50', '0000-00-00 00:00:00'),
(17, 'ddcc45', 'No Residente', '2022-05-26 00:12:59', '0000-00-00 00:00:00'),
(18, 'kimo68', 'Residente', '2022-05-26 00:15:34', '0000-00-00 00:00:00'),
(19, 'hlo524h', 'Residente', '2022-05-26 01:44:04', '0000-00-00 00:00:00'),
(20, 'dddsaw', 'No Residente', '2022-05-26 01:45:29', '0000-00-00 00:00:00'),
(21, 'jmlmlkm', 'Residente', '2022-05-26 01:47:28', '0000-00-00 00:00:00'),
(22, 'kkkk', 'No Residente', '2022-05-26 01:49:33', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tim_est`
--
ALTER TABLE `tim_est`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tim_est`
--
ALTER TABLE `tim_est`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
