-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2025 a las 00:55:20
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
(17, 'Deportes'),
(18, 'gift card');

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
(28, 23, 19, 1, 30523),
(29, 24, 18, 1, 8500),
(30, 24, 17, 2, 9005),
(31, 25, 33, 1, 23521),
(32, 26, 39, 1, 12854),
(33, 27, 18, 1, 8500),
(34, 27, 20, 1, 9585);

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
(17, 'Tales of Arise', 'pc', 'animaciones epicas', 2, 9005, '1749601419_f65c14066201c115c7e8.jpg', 13, 1),
(18, 'Control', 'pc', 'poderes telequineticos ', 68, 8500, '1749601452_52206b9d03c1e4baf273.jpeg', 11, 1),
(19, 'UNCHARTED', 'ps4', 'busqueda de tesoros antiguos', 5, 30523, '1749601513_3cf15bc28bcbc233497e.jpg', 11, 1),
(20, 'Outlast', 'ps4', 'terror y busqueda de la verdad', 46, 9585, '1749601566_b13dfbd84f84f25a0b25.jpg', 10, 1),
(21, 'Outlast II', 'pc', 'secta y ocultismos ', 68, 8548, '1749601617_65510a6a3398c73fab85.jpg', 10, 1),
(22, 'The Outlast Trials', 'ps4', 'multijugador de terror', 100, 23655, '1749601671_84392e06d3096af03aa4.jpg', 10, 1),
(23, 'Phasmophobia', 'xbox', 'suspenso sin armas', 74, 5866, '1749601724_2dfca74c03dff28ebdbf.jpeg', 10, 0),
(24, 'Silent Hill 2', 'ps5', 'busqueda de personas perdidas en lugares desconocidos', 96, 55236, '1749601766_916a8a7f60827aff0329.jpg', 10, 1),
(25, 'Forza Horizon 5', 'ps5', 'carreras con paisajes reales', 12, 23657, '1749601877_32fcc9c7b8a4aabc6eff.jpeg', 12, 1),
(26, 'Need for Speed Unbound', 'pc', 'Juego clasico', 23, 10252, '1749601924_29d5603ce9a7cc207d53.jpg', 12, 1),
(27, 'WRC Generations', 'ps4', 'Terreneitor', 85, 45263, '1749601961_352be84d157189c82b3f.jpg', 12, 1),
(28, 'Dirt 5', 'steam', 'juego renovado en texturas', 856, 45216, '1749602014_63cf322f6d92b8738b23.jpeg', 12, 1),
(29, 'Trackmania 2 Canyon', 'steam', 'juego con acrobacias extremas', 58, 2635, '1749602065_85f4d5ea4329edd8e878.jpeg', 12, 1),
(30, 'Horizon Zero Dawn Remastered', 'pc', 'juego futuristico', 653, 23526, '1749617581_bfa4077322ffac04f4a9.jpg', 11, 1),
(32, 'Minecraft', 'Steam', 'juego de supervivencia multijugador pixeleado', 595, 36521, '1749768202_02e03b45867225041674.jpg', 16, 1),
(33, 'Red Dead Redemption 2', 'pc', 'Juego ambientado en el viejo oeste', 49, 23521, '1749846184_1b5d97f5ef5d0b040001.jpeg', 11, 1),
(34, 'the Last of Us', 'pc', 'juego de supervivencia y aventura ', 60, 40584, '1750338112_049989e6ec4b732e430a.jpg', 11, 1),
(35, 'The Elder Scrolls IV Remastered', 'pc', 'juego de supervivencia ', 110, 58654, '1750338307_78e92cbf553bb4da4354.jpg', 14, 1),
(36, 'God of War ', 'pc', 'Sigue las historias de Kratos, un guerrero espartano que, tras vengarse de los dioses del Olimpo, se encuentra en el reino nórdico buscando redención y tratando de ser un padre para su hijo Atreus', 150, 23484, '1750338427_dbb3ff7944650635e6aa.jpeg', 11, 1),
(37, 'Dragon Ball Kakarot', 'xbox', 'juego de acción y aventura se recrea la historia de Goku y sus Amigos ', 200, 59612, '1750338721_e1c2f11044ec058b2a0f.webp', 11, 1),
(38, 'Cuphead', 'ps4', 'es un videojuego de plataformas y disparos en 2D, conocido por su estilo visual inspirado en las caricaturas de los años 30 y su dificultad desafiante', 165, 21452, '1750339060_f6da2f5dcfdf5109dc51.webp', 14, 1),
(39, 'Dark Souls Remastered', 'pc', 'es un videojuego de rol de acción y fantasía oscura en tercera persona que se centra en la exploración de entornos interconectados y la lucha contra enemigos desafiantes', 179, 12854, '1750339150_2f00eb73add8aab1345f.jpg', 13, 1),
(40, 'Resident Evil 3 ', 'ps4', 'es un videojuego de terror y supervivencia', 230, 38895, '1750339251_8f03b4338b85202b9cf0.webp', 10, 1),
(41, 'Netflix', 'pc', 'gift card de $10USD', 50, 12368, '1750340073_a08979df79926b4591de.png', 18, 1),
(42, 'Spotify', 'pc', 'Gift card $3usd', 50, 12368, '1750340147_8d5cfa360fa8f7404851.jpg', 18, 1),
(43, 'Xbox gamePass', 'pc ', 'gift card $8USD', 32, 10000, '1750340197_739994dcbc43852a8085.png', 18, 1),
(44, 'Disney PLus', 'pc ', 'gift card  $5USD', 45, 7545, '1750340267_2f32abf1887b97eaf3d9.png', 18, 1),
(45, 'Steam', 'pc ', 'gift card $5USD', 48, 7545, '1750340315_8161938ea23b38f877e2.jpg', 18, 1),
(46, 'HBO MAX', 'pc ', 'gift card $11USD', 48, 12456, '1750340713_77813fbf80b5a69e4165.jpg', 18, 1),
(47, 'Crunchyroll', 'pc', 'gitf card $7USD', 35, 9568, '1750340953_62d62088c07c19f0fd9e.webp', 18, 1),
(48, 'Ark survival', 'ps4', 'es un videojuego de acción, aventura y supervivencia en mundo abierto, donde los jugadores deben sobrevivir en una isla llena de dinosaurios y otras criaturas prehistóricas.', 300, 50456, '1750361104_77ccfbaaf12ece5281e0.webp', 16, 1),
(49, 'FIFA 22', 'pc', 'es un videojuego de fútbol desarrollado por EA Sports, disponible para varias plataformas', 123, 35890, '1750361179_6e6d9ddfcbebb524928d.jpeg', 17, 1),
(50, 'Jump Force', 'pc', 'es un juego de lucha 3D que reúne a personajes icónicos de varias series de manga de la revista Weekly Shonen Jump de Shueisha para celebrar su 50 aniversario', 500, 44890, '1750361262_b9c81a61380d877c35ba.jpeg', 11, 1),
(51, 'Resident Evil 4 ', 'pc', 'la misión de Leon S. Kennedy para rescatar a la hija del presidente, Ashley Graham, quien ha sido secuestrada por una secta en una zona rural de España ', 312, 35450, '1750361328_b4d2e5dd07e774ea91b4.jpg', 10, 1),
(52, 'Dark Souls 3', 'ps4', 'lo mismo  que el 2 y el 1 ', 66, 31890, '1750361793_df519bb19e85a9a9aae5.webp', 13, 1),
(53, 'Sekiro ', 'Xbox One ', 'desarrollado por FromSoftware, ambientado en un Japón ficticio del siglo XIV, durante el período Sengoku', 12, 39390, '1750361884_f1743edca38b395ad2c0.webp', 13, 1),
(54, 'Dark Souls 2', 'pc', 'Dark Souls II es un videojuego de souls de acción desarrollado por FromSoftware y publicado por Bandai Namco', 22, 35567, '1750361952_dfb336a9dd9843ecbd15.jpg', 13, 1),
(55, 'Yakusa ', 'pc', 'La Yakuza, también conocida como la mafia japonesa, es una organización criminal organizada con una larga historia en Japón ', 33, 41850, '1750362014_ac18db3020c71e60b8da.jpeg', 16, 1),
(56, 'BloodBorne', 'ps4', 'desarrollado por FromSoftware, conocidos por la saga Souls. Ambientado en la ciudad gótica de Yharnam, el juego te sumerge en una atmósfera oscura y terrorífica donde una misteriosa plaga ha transformado a sus habitantes en bestias', 44, 30000, '1750366179_d8123df9e4b3f696166b.jpg', 13, 1),
(57, 'Demon Souls', 'ps4', 'caza demonios ', 11, 44892, '1750366225_b3de9b0e51f984d3d763.png', 13, 1),
(58, 'Alan Wake ', 'pc', 'viaja a Bright Falls, un pequeño pueblo en busca de tranquilidad. Sin embargo, su esposa desaparece y Alan se ve envuelto en una serie de eventos paranormales', 55, 17854, '1750366522_0ea6648d7dbab2066f88.jpg', 10, 1),
(59, 'Alan Wake 2 ', 'Xbox One ', 'la continuación del primero', 69, 39391, '1750366571_16c7f69066d22be0525a.jpg', 10, 1),
(60, 'Gran Turismo 7 ', 'pc', 'juego de carreras ', 67, 44123, '1750366627_579d06abfe5bdfd1920d.webp', 12, 1),
(61, 'Gran Turismo 6 ', 'pc', 'juego de carreras en europa', 89, 21890, '1750366669_abbcd8b8d1ef77365698.jpg', 12, 1),
(62, ' Metal Gear Survival', 'ps4', 'juego de supervivencia ', 126, 10000, '1750366821_82a939be51ec0bb5776c.jpeg', 16, 1),
(63, 'Agony ', 'ps4', 'juego de terror ', 15, 21555, '1750367504_55b75f3426dc2a10b52f.jpg', 16, 1),
(64, 'Atomfall', 'pc', 'juego de supervivencia ', 78, 36320, '1750367545_2aae16e11ba39f3e5924.jpg', 16, 1),
(65, 'Dayz', 'pc', 'juego de supervivencia ', 66, 78124, '1750367583_6a13bfae18918b4728d6.jpg', 16, 1),
(66, 'Howards Legacy ', 'pc', 'juego de harry potter', 44, 50457, '1750367654_50aff2cfd744c54cdddd.jpg', 14, 1),
(67, 'Undertale ', 'pc', 'juego de rol ', 77, 3456, '1750367684_59d30ba4fe42b777d7c0.jpg', 14, 1),
(68, 'Starfield', 'pc', 'juego de supervivencia en el espacio ', 89, 40000, '1750367731_141a4c9830719d301d16.jpg', 16, 1),
(69, 'saint row', 'pc', 'juego de vaqueros ', 55, 12678, '1750367774_0bfd4ed7aedd5d0825f5.jpg', 16, 1),
(70, 'MontandBlade II', 'pc', 'juego de rol', 77, 12987, '1750368137_c6335eafb46e600644cb.jpg', 14, 1),
(71, 'One piece Odyssey', 'pc', 'juego de one piece en pc', 87, 33890, '1750368187_8f8e497a4331bd8385ee.jpg', 14, 1),
(72, 'Cyberpunk', 'pc ', 'juego de roles en el futuro ', 9, 50453, '1750368246_6946d1d1f87b6b58fd76.jpg', 14, 1);

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
(4, 'Azcona', 'Margarita Petrona', 'brianazcona4@gmail.com', 'consulta', 12345678, 'steam', 'quiero informar un problema de incompatibilidad del juego con mi windows\r\n'),
(5, 'gasparin', 'pepe', 'pepe@gmail.com', 'producto defectuoso ', 0, 'pc ', 'no anda\r\n'),
(6, 'aquino ponce', 'leo', 'leoaquino445@gmail.com', ' no me deja registrar cuenta ', 0, '', 'no me deja registrarme ');

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
(23, 5, '2025-06-17'),
(24, 5, '2025-06-19'),
(25, 6, '2025-06-19'),
(26, 6, '2025-06-19'),
(27, 6, '2025-06-19');

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
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tab_detalleventa`
--
ALTER TABLE `tab_detalleventa`
  MODIFY `detalleVenta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tab_juegos`
--
ALTER TABLE `tab_juegos`
  MODIFY `juego_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `tab_mensaje`
--
ALTER TABLE `tab_mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tab_perfil`
--
ALTER TABLE `tab_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_ventas`
--
ALTER TABLE `tab_ventas`
  MODIFY `ventas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
