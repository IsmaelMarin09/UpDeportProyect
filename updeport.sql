-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 03:01:13
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `updeport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `mensaje` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `mensaje`, `fecha`) VALUES
(1, 'Hola soy Ismael', '16:42:06'),
(2, 'ah bueno jaja', '16:42:31'),
(3, 'ah bueno jaja', '16:43:26'),
(4, 'ah bueno jaja', '16:43:39'),
(5, '', '12:33:05'),
(6, '', '12:37:12'),
(7, 'hola soy pablo', '12:37:19'),
(8, '', '12:37:21'),
(9, 'hola soy pablo', '12:37:31'),
(10, 'hola soy pablo', '12:38:16'),
(11, 'hola soy pablo', '12:39:17'),
(12, 'primer intento type button', '12:39:37'),
(13, '', '12:39:38'),
(14, '', '12:39:40'),
(15, '', '12:39:57'),
(16, 'asfdd', '12:42:57'),
(17, 'asfdd', '12:44:03'),
(18, 'asdadsd', '12:44:06'),
(19, 'asdas', '12:44:10'),
(20, 'asdas', '12:44:39'),
(21, 'dfgdfgdfg', '12:44:46'),
(22, 'dfgdfgdfg', '12:45:12'),
(23, 'gggg', '12:45:17'),
(24, 'gggg', '13:14:13'),
(25, 'gggg', '13:14:19'),
(26, 'gggg', '13:28:31'),
(27, 'gggg', '13:31:16'),
(28, 'gggg', '13:31:25'),
(29, 'gggg', '13:36:11'),
(30, 'gggg', '13:39:12'),
(31, 'gggg', '13:39:17'),
(32, 'gggg', '13:45:00'),
(33, 'gggg', '13:45:19'),
(34, 'gggg', '13:45:28'),
(35, 'gggg', '13:46:34'),
(36, 'gggg', '13:47:55'),
(37, 'gggg', '13:49:14'),
(38, 'gggg', '13:51:08'),
(39, 'gggg', '13:51:24'),
(40, 'gggg', '13:54:21'),
(41, 'gggg', '13:55:30'),
(42, 'gggg', '14:00:59'),
(43, 'gggg', '14:07:47'),
(44, 'gggg', '14:07:57'),
(45, 'gggg', '14:08:00'),
(46, 'gggg', '14:08:27'),
(47, 'gggg', '14:08:58'),
(48, 'gggg', '14:09:02'),
(49, 'gggg', '14:11:01'),
(50, 'gggg', '14:11:34'),
(51, 'gggg', '14:11:48'),
(52, 'gggg', '14:13:17'),
(53, 'gggg', '14:13:26'),
(54, 'gggg', '14:15:06'),
(55, 's', '14:15:11'),
(56, 'dsa', '14:15:17'),
(57, 'dsa', '14:18:30'),
(58, 'eertert', '14:18:34'),
(59, 'eertert', '14:19:00'),
(60, 'ASasASsasd', '14:19:05'),
(61, '', '14:19:07'),
(62, '', '14:20:46'),
(63, 'tñoi{b', '14:20:50'),
(64, '789876', '14:20:53'),
(65, '6786786786', '14:20:56'),
(66, '6786786786', '14:26:30'),
(67, 'ere', '14:26:34'),
(68, 'zdsfasd', '20:15:19'),
(69, 'zdsfasd', '20:16:22'),
(70, 'zdsfasd', '20:17:23'),
(71, 'zdsfasd', '20:17:47'),
(72, 'rgfdsf', '20:17:51'),
(73, 'j', '20:17:56'),
(74, 'ddd', '20:19:35'),
(75, 'dddfdsfsd', '20:19:40'),
(76, 'dddfdsfsd', '20:19:51'),
(77, '', '20:22:45'),
(78, '', '20:24:29'),
(79, 'asdasdasd', '20:24:34'),
(80, 'asdasdasd', '20:24:51'),
(81, 'asdasdasd', '20:26:00'),
(82, 'asdasdasd', '20:26:16'),
(83, 'asdasdasd', '20:26:28'),
(84, 'dszxcv', '20:26:31'),
(85, 'dszxcv', '20:27:10'),
(86, 'dszxcv', '20:27:30'),
(87, 'dszxcv', '20:28:31'),
(88, 'dszxcv', '20:30:56'),
(89, 'dszxcv', '20:31:38'),
(90, 'dszxcv', '20:33:42'),
(91, 'asdasdasd', '20:33:46'),
(94, 'ssdsd', '20:34:20'),
(95, 'ssdsd', '20:35:17'),
(96, 'ddfdf', '20:35:20'),
(97, 'ddfdf', '20:36:18'),
(98, 'ddfdf', '20:36:33'),
(99, 'ddfdf', '20:37:28'),
(100, 'sadasdasd', '20:37:32'),
(101, 'sadasdasd', '20:38:52'),
(102, 'sadasdasd', '20:39:28'),
(103, 'sadasdasd', '20:39:59'),
(104, 'sadasdasd', '20:40:11'),
(105, 'sadasdasd', '20:43:20'),
(106, 'sadasdasd', '20:44:54'),
(107, 'a', '20:44:56'),
(108, 'a', '20:46:56'),
(109, 'a', '20:49:53'),
(110, 'eeee', '20:49:56'),
(111, 'xzczxc', '20:50:22'),
(112, 'jjjjjjjjjjjjjj', '20:50:29'),
(113, 'eeee', '20:51:45'),
(114, 'ddd', '20:51:48'),
(115, 'ddd', '20:53:57'),
(116, 'ddd', '20:54:51'),
(117, 'x', '20:54:53'),
(118, 'c', '20:55:09'),
(119, 'c', '20:55:18'),
(120, 'd', '20:55:20'),
(121, 'd', '20:55:28'),
(122, 's', '20:55:30'),
(123, 's', '20:59:16'),
(124, 'bbb', '20:59:18'),
(125, 'bbb', '21:00:14'),
(126, '123', '21:00:18'),
(127, '123', '21:01:39'),
(128, '12345', '21:01:43'),
(129, '12345', '21:46:05'),
(130, 'eeee', '21:46:18'),
(131, 'eeee', '21:50:49'),
(132, 'jjjjj', '21:52:10'),
(133, 'jjjjj', '21:58:27'),
(134, 'mm', '21:58:35'),
(135, 'ggg', '14:22:29'),
(136, 'ggg', '14:28:17'),
(137, 'jjjjjjjjj', '14:28:21'),
(138, 'jjjjjjjjj', '14:28:48'),
(139, 'dd', '14:28:50'),
(140, 'dd', '14:28:57'),
(141, 'dd', '14:30:02'),
(142, 'jjj', '14:30:07'),
(143, 'jjj', '14:31:00'),
(144, 'dadada', '14:31:02'),
(145, 'ssss', '14:31:05'),
(146, 'gggg', '14:31:12'),
(147, 'gggg', '14:32:42'),
(148, 'gggg', '14:34:52'),
(149, 'gggg', '14:35:35'),
(150, 'gggg', '14:36:10'),
(151, 'gggg', '14:37:59'),
(152, 'gggg', '14:40:08'),
(153, 'gggg', '14:40:24'),
(154, 'gggg', '14:40:35'),
(155, 'gggg', '14:42:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaprofile`
--

CREATE TABLE `tablaprofile` (
  `unique_Id` int(9) NOT NULL,
  `seguidores` int(6) NOT NULL,
  `seguidos` int(6) NOT NULL,
  `desarrollo` text NOT NULL,
  `reconocimientos` varchar(150) NOT NULL,
  `descripcion` varchar(241) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablaprofile`
--

INSERT INTO `tablaprofile` (`unique_Id`, `seguidores`, `seguidos`, `desarrollo`, `reconocimientos`, `descripcion`) VALUES
(123456789, 0, 0, 'Soy un joven que le apasiona el tema de desarrollo.', 'Uno de los mejores del grupo :v. soy hiperactivo, tengo conocimiento variado en pocos lenguajes', 'Tengo 22 años y mi idea es terminar esta pinche pagina :) y que quede bien hecha para así poder hacer las practicas sin problema'),
(234567891, 0, 0, 'ME gusta la rpogramación y estudio dos carreras de programción, psdt soy todo un papucho', 'soy uno de los mejores del curso, cuandos e trata de programar y seguir adelante', 'tengo 19 años, y quiero vivir de esto hasta que sea viejo'),
(345678912, 0, 0, 'Me gusta el desarrollo de sistemas', 'soy uno de los mejores y soy bien crack aguebo', 'me gusta todo el mundo de la programacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaseguimiento`
--

CREATE TABLE `tablaseguimiento` (
  `id` int(11) NOT NULL,
  `unique_IdA` int(9) NOT NULL,
  `unique_IdB` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablaseguimiento`
--

INSERT INTO `tablaseguimiento` (`id`, `unique_IdA`, `unique_IdB`) VALUES
(1, 234567891, 123456789),
(2, 345678912, 123456789),
(7, 234567891, 123456789),
(8, 123456789, 345678912),
(11, 123456789, 234567891);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `unique_Id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `rol` text NOT NULL,
  `deporte` text NOT NULL,
  `fNacimiento` date NOT NULL,
  `municipio` text NOT NULL,
  `genero` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `unique_Id`, `nombre`, `email`, `clave`, `img`, `rol`, `deporte`, `fNacimiento`, `municipio`, `genero`, `estado`) VALUES
(16, 120710809, 'zapato t42', 'juanpacifuzdsfentes1999@gmail.com', '12345', 'user.jpg', 'Hunter', 'Patinaje', '2021-11-18', 'Cubará', 'Femenino', 'Habilitado'),
(1, 123456789, 'Juan Pablo Cifuentes', 'juan@cifuentes.com', '12345', 'pablo.jpg', 'Administrador', 'Volleiball', '1999-06-06', 'Zipaquira', 'Masculino', 'Habilitado'),
(2, 234567891, 'Ismael Marin', 'ismael@marin.com', '12345', 'ismael.jpg', 'Administrador', 'Futbol', '2001-05-01', 'Chia', 'Masculino', 'Habilitado'),
(12, 257263670, 'Adrian Cifuentes', 'adrian@cifuentes.com', '12345', 'user.jpg', 'Deportista', 'Ciclismo', '2021-11-27', 'Albania', 'Masculino', 'Habilitado'),
(3, 345678912, 'Esteban Lizaraso', 'esteban@lizaraso.com', '12345', 'esteban.jpg', 'Administrador', 'Futbol', '2002-09-30', 'Chia', 'Masculino', 'Habilitado'),
(15, 510014068, 'zapato t40', 'juanpacifudsfentes1999@gmail.com', '12345', 'user.jpg', 'Deportista', 'Futbol', '2021-11-18', 'Cácota', 'Femenino', 'Habilitado'),
(17, 510339014, 'el crack alias el pacho', 'el@pacho.com', '12345', 'user.jpg', 'Hunter', 'Patinaje', '2021-11-05', 'Carepa', 'Femenino', 'Deshabilitado'),
(13, 813887107, 'daniela Cifuentes', 'daniela@cifuentes.com', '12345', 'user.jpg', 'Deportista', 'Baloncesto', '2021-11-11', 'Albán', 'Femenino', 'Habilitado'),
(14, 871857633, 'Andres Duarte', 'Andres@Duarte.com', '12345', 'user.jpg', 'Deportista', 'Ciclismo', '2021-09-09', 'Boavita', 'Masculino', 'Habilitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `tablaseguimiento`
--
ALTER TABLE `tablaseguimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_Id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tablaseguimiento`
--
ALTER TABLE `tablaseguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
