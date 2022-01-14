-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2022 a las 14:30:05
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanitae_bbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_users`
--

CREATE TABLE `data_users` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellido1` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellido2` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Contrasena` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DNI` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nacimiento` date NOT NULL,
  `Tipo` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_users`
--
ALTER TABLE `data_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
