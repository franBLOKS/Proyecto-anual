-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2020 a las 23:41:57
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `ID_RECETA` int(100) UNSIGNED NOT NULL,
  `NOMBRE_RECETA` char(255) COLLATE utf8_spanish_ci NOT NULL,
  `DIFICULTAD` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `INGREDIENTES` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `PROCEDIMIENTO` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`ID_RECETA`, `NOMBRE_RECETA`, `DIFICULTAD`, `DESCRIPCION`, `INGREDIENTES`, `PROCEDIMIENTO`) VALUES
(1, 'Paella', 'Difícil', '', '', 'Y, esto está medio jodido. Vos sabrás como hacerlo'),
(2, 'Pizza', 'Normal', '', '', 'Es una pizza, papá. No es tan difícil'),
(3, 'Pollo a la crema', 'Normal', '', '', 'Le ponés crema a un pollo'),
(4, 'Pollo al disco', 'Difícil', '', '', 'Agarrá un disco (que no sea de La Beriso) y hacé un pollo'),
(5, 'Pollo al horno', 'Fácil', '', '', 'Hacés un posho she peola. Okno, de esto se encarga Fefe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`ID_RECETA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `ID_RECETA` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
