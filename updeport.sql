-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 23:14:22
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fNacimiento` date NOT NULL,
  `rol` varchar(100) NOT NULL,
  `deporte` varchar(10) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `genero` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `correo`, `fNacimiento`, `rol`, `deporte`, `clave`, `municipio`, `genero`) VALUES
(1, 'juan pablo', 'juanpacifuentes1999@gmail.com', '1999-06-06', 'Deportista', 'voleiball', '12345', 'Zipaquirá', 'Masculino'),
(2, 'Ismael Marin', 'ismael@marin.com', '2021-09-28', 'Deportista', 'futbol', 'asdfsdgfhg', 'Aipe', 'Masculino'),
(3, 'Ismael Enrique Marin', 'ismaeasl@marin.com', '2021-10-01', 'Deportista', 'futbol', '6789', 'Chía', 'Masculino'),
(4, 'esteban melo', 'estebitan@melo.com', '2021-10-12', 'Entranador', 'futbol', '00000', 'Chía', 'Masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
