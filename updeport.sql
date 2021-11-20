-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2021 a las 20:12:50
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
  `f_Publicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `likes` int(9) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `unique_Id`, `descripcion`, `des_Video`, `img1`, `img2`, `img3`, `f_Publicacion`, `likes`, `estado`) VALUES
(41, 123456789, 'En este curso vamos a ver el procedimiento para crear una red social con el lenguaje de programación php y un gestor de base de datos como lo es mysql , también veremos como estructurar nuestra aplicación con html y dar estilos con css y el framework de css bootstrap  En este vídeo vamos a ver como ', 'https://www.youtube.com/watch?v=UcZTq8w4Ojc&list=PLFE4xF86y6sAlMCA-rml_imQWmnc849U-&index=12', '784922176img1.jpg', '784922176img2.jpg', '784922176img3.jpg', '2021-11-20 06:32:45', 0, 'Habilitado'),
(42, 292631422, 'Este video esta editado por \"HE\" Con licencia de The Orchard Music (en representación de VP Records Corp/Dimelo Vi) todos los derechos reservados', 'https://www.youtube.com/watch?v=ApNg9df1c_E', 'none', '951742013img2.jpg', 'none', '2021-11-20 07:06:16', 0, 'Habilitado'),
(43, 400032779, 'Porque todo tiene que ser confuso Desde el principio fuiste tú la que impuso Que lo dejáramos así El alma y la mente en un duelo  Forcejando pa\' quedarte aquí Haciéndolo está muy adelanta\' la nena Seca con los demás y conmigo en humedad  Que cuando te vas más ganas me da Por algo será que no cambio ', 'https://www.youtube.com/watch?v=mLugzKRTf-0', '694918871img1.jpg', 'none', '694918871img3.jpg', '2021-11-20 19:07:14', 1, 'Habilitado'),
(44, 713815612, 'Asi será  No hemos empezao\' y odio cuando tú te vas  Solo hemos hablao\' y te siento muy humeda La vida es muy frágil mira, que fácil se va  Así, una mujer como tú yo quiero Quédate que yo te necesito Pueden regalarme el mundo entero  No te cambiaría, eso es un mito, ma\' ', 'none', 'none', '164490566img2.jpg', 'none', '2021-11-20 19:12:07', 1, 'Habilitado'),
(45, 123456789, 'none', 'http://localhost/UpDeportProyect/views/Admin/profile.php', 'none', 'none', 'none', '2021-11-20 21:04:44', 0, 'Habilitado'),
(46, 345678912, 'ocalhost/UpDeportProyect/views/Admin/profile.php', 'none', 'none', 'none', 'none', '2021-11-20 19:11:25', 1, 'Habilitado'),
(47, 784562652, 'none', 'none', '221524030img1.jpg', 'none', 'none', '2021-11-20 18:58:10', 1, 'Habilitado'),
(48, 784562652, 'none', 'Proyect/views/Admin/profile.php?id_user2=784562652', 'none', '836651125img2.jpg', 'none', '2021-11-20 18:57:50', 2, 'Habilitado'),
(49, 784562652, 'dar estilos con css y el framework de css bootstrap En este vídeo vamos a ver como', 'none', 'none', 'none', 'none', '2021-11-20 18:57:11', 2, 'Habilitado'),
(50, 123456789, '784562652', 'none', 'none', 'none', 'none', '2021-11-20 19:07:05', 1, 'Habilitado'),
(51, 123456789, 'none', 'user2=292631422#activity', '474378425img1.jpg', 'none', 'none', '2021-11-20 18:56:29', 2, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablalikes`
--

CREATE TABLE `tablalikes` (
  `id` int(15) NOT NULL,
  `unique_IdA` int(9) NOT NULL,
  `idP` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablalikes`
--

INSERT INTO `tablalikes` (`id`, `unique_IdA`, `idP`) VALUES
(13, 234567891, 49),
(14, 234567891, 51),
(15, 234567891, 48),
(16, 123456789, 51),
(17, 123456789, 49),
(18, 123456789, 48),
(19, 123456789, 47),
(20, 123456789, 50),
(21, 123456789, 43),
(22, 123456789, 46),
(23, 123456789, 44);

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
(345678912, 1, 3, 'Me gusta el desarrollo de sistemas :D', 'soy uno de los mejores y soy bien crack aguebo :D', 'me gusta todo el mundo de la programacion'),
(398050141, 0, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
(400032779, 1, 0, 'Escribe sobre tu desarrollo', 'Relaciona acá tus reconocimientos', 'Escribe acá una pequeña descripción para que todos puedan conocerte'),
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
(3, 345678912, 'Esteban Lizarazo', 'esteban@lizarazo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'esteban.jpg', 'Administrador', 'Futbol', '2002-09-30', 'Chia', 'Masculino', 'Habilitado', ''),
(33, 398050141, 'Sergio camilo', 'sergiio@melo.com', '827ccb0eea8a706c4c34a16891f84e7b', '398050141.jpg', 'Hunter', 'futbol', '2021-11-15', 'Albania', 'Masculino', 'basketball', ''),
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
-- Indices de la tabla `tablalikes`
--
ALTER TABLE `tablalikes`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `tablalikes`
--
ALTER TABLE `tablalikes`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
