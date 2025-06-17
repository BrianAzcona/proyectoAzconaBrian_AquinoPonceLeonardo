-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2025 a las 18:05:11
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
-- Estructura de tabla para la tabla `tab_categoria`
--

CREATE TABLE `tab_categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tab_categoria`
--

INSERT INTO `tab_categoria` (`categoria_id`, `categoria_descripcion`) VALUES
(10, 'Terror'),
(11, 'Aventura'),
(12, 'Carreras'),
(13, 'Souls'),
(14, 'Roles'),
(15, 'Simulacion'),
(16, 'Supervivencia'),
(17, 'Deportes');

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

--
-- Volcado de datos para la tabla `tab_clientes`
--

INSERT INTO `tab_clientes` (`cliente_id`, `cliente_nombre`, `cliente_apellido`, `cliente_dni`, `cliente_correo`, `cliente_password`, `cliente_pais`, `cliente_provincia`, `cliente_ciudad`, `perfil_id`, `cliente_telefono`) VALUES
(3, 'BrianAdmin', 'Azcona', 45759787, 'brianazcona25@gmail.com', '$2y$10$a83swJHX.ya59QTOic.jG.Qrq03l7kks2VbvRzNHrw86hyjIQN.g.', 'Argentina', 'Corrientes', 'Corrientes', 1, 2147483647),
(5, 'Brian', 'Azcona', 45759787, 'brianazcona26@gmail.com', '$2y$10$nHs7ShH9IccSPsDR2G8WoePRx51m4MZD2G8gzPQHLEZ3zeNzM8Ipq', 'Argentina', 'Corrientes', 'Corrientes', 2, 2147483647),
(6, 'pepe', 'gasparin', 46854758, 'pepe@gmail.com', '$2y$10$Ymt1W3.oMLkv8Yp4SFRxXe19tlMMnZhbhd4ZXh/6rz8eAkQg.n9jy', 'Argentina', 'Corrientes', 'Corrientes', 2, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_detalleventa`
--

CREATE TABLE `tab_detalleventa` (
  `detalleVenta_id` int(11) NOT NULL,
  `ventas_id` int(11) NOT NULL,
  `juego_id` int(11) NOT NULL,
  `detalle_cantidad` int(11) NOT NULL,
  `detalle_precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tab_detalleventa`
--

INSERT INTO `tab_detalleventa` (`detalleVenta_id`, `ventas_id`, `juego_id`, `detalle_cantidad`, `detalle_precio`) VALUES
(9, 9, 32, 2, 36521),
(10, 9, 15, 1, 16545),
(11, 10, 15, 1, 16545),
(12, 11, 17, 1, 9005),
(13, 12, 17, 1, 9005),
(14, 13, 17, 1, 9005),
(15, 14, 18, 1, 8500),
(16, 15, 18, 1, 8500),
(17, 15, 20, 1, 9585),
(18, 16, 18, 1, 8500),
(19, 17, 17, 1, 9005),
(20, 18, 18, 1, 8500),
(21, 19, 18, 1, 8500),
(22, 20, 17, 1, 9005),
(23, 21, 20, 1, 9585),
(24, 21, 21, 1, 8548),
(25, 21, 32, 1, 36521),
(26, 21, 30, 1, 23526),
(27, 22, 17, 1, 9005),
(28, 23, 19, 1, 30523);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_juegos`
--

CREATE TABLE `tab_juegos` (
  `juego_id` int(11) NOT NULL,
  `juego_nombre` varchar(255) NOT NULL,
  `juego_plataforma` varchar(255) NOT NULL,
  `juego_descripcion` text NOT NULL,
  `juego_stock` int(255) NOT NULL,
  `juego_precio` decimal(65,0) NOT NULL,
  `juego_imagen` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `juego_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tab_juegos`
--

INSERT INTO `tab_juegos` (`juego_id`, `juego_nombre`, `juego_plataforma`, `juego_descripcion`, `juego_stock`, `juego_precio`, `juego_imagen`, `categoria_id`, `juego_estado`) VALUES
(17, 'Tales of Arise', 'pc', 'animaciones epicas', 38, 9005, '1749601419_f65c14066201c115c7e8.jpg', 11, 1),
(18, 'Control', 'pc', 'poderes telequineticos ', 70, 8500, '1749601452_52206b9d03c1e4baf273.jpeg', 11, 1),
(19, 'UNCHARTED', 'ps4', 'busqueda de tesoros antiguos', 86, 30523, '1749601513_3cf15bc28bcbc233497e.jpg', 11, 1),
(20, 'Outlast', 'ps4', 'terror y busqueda de la verdad', 47, 9585, '1749601566_b13dfbd84f84f25a0b25.jpg', 10, 1),
(21, 'Outlast II', 'pc', 'secta y ocultismos ', 68, 8548, '1749601617_65510a6a3398c73fab85.jpg', 10, 1),
(22, 'The Outlast Trials', 'ps4', 'multijugador de terror', 100, 23655, '1749601671_84392e06d3096af03aa4.jpg', 10, 1),
(23, 'Phasmophobia', 'xbox', 'suspenso sin armas', 74, 5866, '1749601724_2dfca74c03dff28ebdbf.jpeg', 10, 1),
(24, 'Silent Hill 2', 'ps5', 'busqueda de personas perdidas en lugares desconocidos', 96, 55236, '1749601766_916a8a7f60827aff0329.jpg', 10, 1),
(25, 'Forza Horizon 5', 'ps5', 'carreras con paisajes reales', 12, 23657, '1749601877_32fcc9c7b8a4aabc6eff.jpeg', 12, 1),
(26, 'Need for Speed Unbound', 'pc', 'Juego clasico', 23, 10252, '1749601924_29d5603ce9a7cc207d53.jpg', 12, 1),
(27, 'WRC Generations', 'ps4', 'Terreneitor', 85, 45263, '1749601961_352be84d157189c82b3f.jpg', 12, 1),
(28, 'Dirt 5', 'steam', 'juego renovado en texturas', 856, 45216, '1749602014_63cf322f6d92b8738b23.jpeg', 12, 1),
(29, 'Trackmania 2 Canyon', 'steam', 'juego con acrobacias extremas', 58, 2635, '1749602065_85f4d5ea4329edd8e878.jpeg', 12, 1),
(30, 'Horizon Zero Dawn Remastered', 'pc', 'juego futuristico', 653, 23526, '1749617581_bfa4077322ffac04f4a9.jpg', 11, 1),
(32, 'Minecraft', 'Steam', 'juego de supervivencia multijugador pixeleado', 595, 36521, '1749768202_02e03b45867225041674.jpg', 16, 1),
(33, 'Red Dead Redemption 2', 'pc', 'Juego ambientado en el viejo oeste', 50, 23521, '1749846184_1b5d97f5ef5d0b040001.jpeg', 11, 1);

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

--
-- Volcado de datos para la tabla `tab_mensaje`
--

INSERT INTO `tab_mensaje` (`id_mensaje`, `apellido`, `nombre`, `correo`, `asunto`, `num_orden`, `plataforma`, `consulta`) VALUES
(1, 'Azcona', 'Brian Alexander', 'brianazcona25@gmail.com', 'primer asunto', 0, '', '1er problema\r\n'),
(3, 'Azcona', 'Brian Alexander', 'brianazcona4@gmail.com', 'consulta', 0, '', '2da Consulta\r\n'),
(4, 'Azcona', 'Margarita Petrona', 'brianazcona4@gmail.com', 'consulta', 12345678, 'steam', 'quiero informar un problema de incompatibilidad del juego con mi windows\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_perfil`
--

CREATE TABLE `tab_perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil_descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_ventas`
--

CREATE TABLE `tab_ventas` (
  `ventas_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `ventas_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tab_ventas`
--

INSERT INTO `tab_ventas` (`ventas_id`, `cliente_id`, `ventas_fecha`) VALUES
(9, 5, '2025-06-13'),
(10, 5, '2025-06-13'),
(11, 5, '2025-06-13'),
(12, 5, '2025-06-13'),
(13, 5, '2025-06-13'),
(14, 5, '2025-06-13'),
(15, 5, '2025-06-13'),
(16, 5, '2025-06-13'),
(17, 5, '2025-06-13'),
(18, 5, '2025-06-13'),
(19, 5, '2025-06-13'),
(20, 5, '2025-06-13'),
(21, 6, '2025-06-15'),
(22, 5, '2025-06-16'),
(23, 5, '2025-06-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Indices de la tabla `tab_detalleventa`
--
ALTER TABLE `tab_detalleventa`
  ADD PRIMARY KEY (`detalleVenta_id`);

--
-- Indices de la tabla `tab_juegos`
--
ALTER TABLE `tab_juegos`
  ADD PRIMARY KEY (`juego_id`);

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
-- Indices de la tabla `tab_ventas`
--
ALTER TABLE `tab_ventas`
  ADD PRIMARY KEY (`ventas_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_categoria`
--
ALTER TABLE `tab_categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tab_detalleventa`
--
ALTER TABLE `tab_detalleventa`
  MODIFY `detalleVenta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tab_juegos`
--
ALTER TABLE `tab_juegos`
  MODIFY `juego_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tab_mensaje`
--
ALTER TABLE `tab_mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tab_perfil`
--
ALTER TABLE `tab_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_ventas`
--
ALTER TABLE `tab_ventas`
  MODIFY `ventas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
