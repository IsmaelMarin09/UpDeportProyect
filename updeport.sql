-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 06:48:00
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
-- Estructura de tabla para la tabla `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(32) NOT NULL,
  `unique_IdS` int(9) NOT NULL,
  `unique_IdD` int(9) NOT NULL,
  `IdP` int(32) NOT NULL,
  `tipo` text NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fSolicitud` datetime NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `denuncias`
--

INSERT INTO `denuncias` (`id`, `unique_IdS`, `unique_IdD`, `IdP`, `tipo`, `descripcion`, `fSolicitud`, `estado`) VALUES
(1, 234567891, 123456789, 123456789, 'Persona', 'Este usuario ah inflingido las normas con sus comentarios', '2021-11-09 13:16:00', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentoshunters`
--

CREATE TABLE `documentoshunters` (
  `id` int(12) NOT NULL,
  `unique_Id` int(9) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `hojaDeVida` varchar(15) NOT NULL,
  `certificacionLaboral` varchar(15) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentoshunters`
--

INSERT INTO `documentoshunters` (`id`, `unique_Id`, `cedula`, `hojaDeVida`, `certificacionLaboral`, `estado`) VALUES
(1, 603251203, '603251203cc.pdf', '603251203hv.pdf', '603251203cl.pdf', 'En espera'),
(2, 398050141, '398050141cc.pdf', '398050141hv.pdf', '398050141cl.pdf', 'En espera'),
(3, 908725800, '908725800cc.pdf', '908725800hv.pdf', '908725800cl.pdf', 'En espera');

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

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 400032779, 661187208, 'hola te amo hermana'),
(2, 400032779, 234567891, 'hola'),
(3, 400032779, 234567891, 'bb'),
(4, 123456789, 345678912, 'hola bb'),
(5, 199454906, 123456789, 'huo'),
(6, 199454906, 123456789, '265');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(20) NOT NULL,
  `unique_Id` int(20) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `des_Video` varchar(300) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `f_Publicacion` date NOT NULL,
  `compartidos` text NOT NULL
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
(123456789, 2, 3, 'Soy un joven que le apasiona el tema de desarrollo,actualmente me dedico a la parte del perfilsad', 'Uno de los mejores del grupo :v. soy hiperactivo, tengo conocimiento variado en pocos lenguajes pero aguebo :D', 'Tengo 22 años y mi idea es terminar esta pinche pagina :) y que quede bien hecha para así poder hacer las practicas sin problema, eso deseo :V'),
(199454906, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(234567891, 2, 1, 'ME gusta la rpogramación y estudio dos carreras de programción, psdt soy todo un papucho', 'soy uno de los mejores del curso, cuandos e trata de programar y seguir adelante', 'tengo 19 años, y quiero vivir de esto hasta que sea viejo'),
(292631422, 0, 0, 'Escribe sobre tu desarrollo.', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(345678912, 1, 4, 'Me gusta el desarrollo de sistemas :D', 'soy uno de los mejores y soy bien crack aguebo :D', 'me gusta todo el mundo de la programacion'),
(398050141, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(400032779, 2, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(408472678, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(661187208, 1, 0, 'Escribe sobre tu desarrollo-', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(713815612, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocertebg'),
(784562652, 0, 0, 'Escribe sobre tu desarrolloasfdS', 'Relaciona acá tus reconocisgrhdmientos', 'Escribe acá unafgh pequeña descripción para que todos puedan conocerte'),
(848176667, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(908725800, 0, 0, 'Escribe sobre tu desarrollov', 'Relaciona acá tus reconvocimientos', 'Escribe acá una pequeñab descripción para que todos puedan conocerte');

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
(52, 234567891, 123456789),
(55, 123456789, 345678912),
(57, 345678912, 234567891),
(64, 345678912, 400032779),
(65, 123456789, 400032779),
(70, 345678912, 661187208),
(75, 345678912, 123456789),
(77, 123456789, 234567891);

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
  `estado` text NOT NULL,
  `online` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `unique_Id`, `nombre`, `email`, `clave`, `img`, `rol`, `deporte`, `fNacimiento`, `municipio`, `genero`, `estado`, `online`) VALUES
(1, 123456789, 'Juan Pablo Cifuentes', 'juan@cifuentes.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789.jpg', 'Administrador', 'Volleiball', '1999-06-06', 'Zipaquirá', 'Masculino', 'Habilitado', ''),
(30, 199454906, 'camila castañeda', 'camila@castañeda.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user.jpg', 'Hunter', 'Voleyball', '2021-11-26', 'Agustín Codazzi', 'Masculino', 'Habilitado', ''),
(2, 234567891, 'Ismael Marin', 'ismael@marin.com', '827ccb0eea8a706c4c34a16891f84e7b', 'ismael.jpg', 'Administrador', 'Futbol', '2001-05-01', 'Chia', 'Masculino', 'Habilitado', ''),
(28, 292631422, 'Angelica Galeano', 'angelica@galeano.com', '827ccb0eea8a706c4c34a16891f84e7b', '292631422.jpg', 'Hunter', 'Patinaje', '2021-11-11', 'Charalá', 'Femenino', 'Habilitado', ''),
(3, 345678912, 'Esteban Lizaraso', 'esteban@lizaraso.com', '827ccb0eea8a706c4c34a16891f84e7b', 'esteban.jpg', 'Administrador', 'Futbol', '2002-09-30', 'Chia', 'Masculino', 'Habilitado', ''),
(33, 398050141, 'Sergio camilo', 'sergiio@melo.com', 'dcddb75469b4b4875094e14561e573d8', '398050141.jpg', 'Hunter', 'futbol', '2021-11-15', 'Albania', 'Masculino', 'basketball', ''),
(22, 400032779, 'Daniela Cifuentes', 'daniela@cifuentes.com', '827ccb0eea8a706c4c34a16891f84e7b', '400032779.jpg', 'Deportista', 'Voleyball', '2021-11-13', 'Cómbita', 'Femenino', 'Habilitado', ''),
(29, 408472678, 'Andres Sanabria', 'andres@sanabria.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user.jpg', 'Deportista', 'Futbol', '2021-11-06', 'Bello', 'Masculino', 'Habilitado', ''),
(27, 661187208, 'juan pablo', 'jp@cifuentes.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user.jpg', 'Deportista', 'futbol', '2021-11-20', 'Albán', 'Masculino', 'Habilitado', ''),
(32, 713815612, 'estebitan melo', 'estebitan@melo.com', '827ccb0eea8a706c4c34a16891f84e7b', '713815612.jpg', 'Deportista', 'futbol', '2021-11-15', 'Albania', 'Masculino', 'Habilitado', ''),
(35, 784562652, 'Ismael Marin', 'michsel@garnica.com', '827ccb0eea8a706c4c34a16891f84e7b', '784562652.jpg', 'Deportista', 'basketball', '2021-11-16', 'Albania', 'Femenino', 'Habilitado', ''),
(31, 848176667, 'zapato Andres', 'zapato@Andres.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user.jpg', 'Deportista', 'futbol', '2021-11-17', 'Albán', 'Masculino', 'Habilitado', ''),
(34, 908725800, 'michel garnica', 'michel@garnica.com', 'dcddb75469b4b4875094e14561e573d8', '908725800.jpg', 'Hunter', 'futbol', '2021-11-18', 'Albán', 'Femenino', 'Inhabilitado', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentoshunters`
--
ALTER TABLE `documentoshunters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tablaprofile`
--
ALTER TABLE `tablaprofile`
  ADD PRIMARY KEY (`unique_Id`);

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
-- AUTO_INCREMENT de la tabla `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentoshunters`
--
ALTER TABLE `documentoshunters`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tablaseguimiento`
--
ALTER TABLE `tablaseguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
