-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2025 a las 05:52:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_azconabrian_aquinoleonardo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nombre` varchar(500) NOT NULL,
  `cliente_apellido` varchar(500) NOT NULL,
  `cliente_dni` int(255) NOT NULL,
  `cliente_correo` varchar(500) NOT NULL,
  `cliente_password` varchar(500) NOT NULL,
  `cliente_pais` text NOT NULL,
  `cliente_provincia` text NOT NULL,
  `cliente_ciudad` text NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `cliente_telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_mensaje`
--

CREATE TABLE `tab_mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `apellido` varchar(500) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `asunto` varchar(500) NOT NULL,
  `num_orden` int(255) NOT NULL,
  `plataforma` varchar(500) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_perfil`
--

CREATE TABLE `tab_perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil_descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `tab_mensaje`
--
ALTER TABLE `tab_mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `tab_perfil`
--
ALTER TABLE `tab_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_mensaje`
--
ALTER TABLE `tab_mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_perfil`
--
ALTER TABLE `tab_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
