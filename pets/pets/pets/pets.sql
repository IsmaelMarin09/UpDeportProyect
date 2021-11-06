-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2021 a las 23:48:15
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablepets`
--

CREATE TABLE `tablepets` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `raza` varchar(32) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `genero` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablepets`
--

INSERT INTO `tablepets` (`id`, `nombre`, `raza`, `categoria`, `genero`) VALUES
(2, 'esteban', 'corgi', 'Perro', 'Macho'),
(3, 'macosta', 'Bulldog', 'Gato', 'Hembra'),
(4, 'elMejor', 'corgi', 'Perro', 'Macho'),
(7, 'alejito', 'corgi', 'Gato', 'Macho'),
(9, 'El hijo del demoniio', 'Bulldog', 'Perro', 'Hembra'),
(10, 'felipe', 'corgi', 'Gato', 'Macho'),
(11, 'El hijo del Señor Demonio', 'Bulldog', 'Gato', 'Hembra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `rol`, `email`, `clave`) VALUES
(123456789, 'Esteban', 'Lizarazo ', 'Comprador', 'este@hotmail.com', '12345'),
(1075688919, 'Juan', ' cifuentes', 'Administrador', 'juanpacifuentes1999@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablepets`
--
ALTER TABLE `tablepets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablepets`
--
ALTER TABLE `tablepets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
