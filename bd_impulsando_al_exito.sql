-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2016 a las 04:21:54
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_impulsando_al_exito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `cargo` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(65) NOT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` text,
  `descripcion` text NOT NULL,
  `redes_sociales` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `apellido`, `cargo`, `fecha_nacimiento`, `usuario`, `password`, `telefono`, `correo_electronico`, `direccion`, `descripcion`, `redes_sociales`) VALUES
(1, 'Administrador', 'Admin', 'Administrador dei sistema', '1920-03-08', 'Admin', '$2y$10$bs3YzxR9zkz4BpLpawVIcectzB7zDOm5Q9MwDPevsCXWhHpyem91O', '04245559689', 'admin@hotmail.com', 'Panel de administración\r\n', 'Esta es una cuenta de administrador\r\n', '["http:\\/\\/facebook.es\\/admin","http:\\/\\/twitter.es\\/admin","http:\\/\\/instagram.es\\/admin"]'),
(2, 'Armando', 'Amaya', 'Ingniero de sistemas', '1995-03-28', 'ArmJAXD', '$2y$10$qF7rSNntKht1JAdE9AwwPOjY.qqgRhI4PRKnX41audAkQCVVMP6Ni', '4246668289', 'armandoamaya@ocrend.com', 'sabaneta', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga mollitia, nemo optio magni, ratione beatae saepe quas sunt, qui esse odio hic repudiandae voluptatem nobis quos consequuntur aperiam pariatur.', '["https:\\/\\/www.facebook.com\\/armando.amaya.167","https:\\/\\/www.facebook.com\\/armando.amaya.167","https:\\/\\/www.facebook.com\\/armando.amaya.167"]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`) VALUES
(1, 'Marketing'),
(2, 'Regulados'),
(3, 'Hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencistas`
--

CREATE TABLE `conferencistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conferencistas`
--

INSERT INTO `conferencistas` (`id`, `nombre`, `correo`, `rol`, `facebook`, `twitter`, `instagram`, `descripcion`) VALUES
(1, 'Alex', '', 'Conferencista', 'https://www.facebook.com/arman', 'http://twitter.com/a', 'http://instagram.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing e'),
(2, 'Carlos', '', 'Conferencista', 'http://facebook.com/carlos', 'http://twitter.com/c', 'http://instagram.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing e'),
(3, 'Jokio', '', 'Conferencista', 'http://facebook.com/jokio', 'http://twitter.com/j', 'http://instagram.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing e'),
(4, 'Maxwell', '', 'Conferencista', 'http://facebook.com/maxwell', 'http://twitter.com/m', 'http://instagram.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_principal`
--

CREATE TABLE `config_principal` (
  `id` int(11) NOT NULL,
  `tconf` varchar(50) NOT NULL,
  `txtconf` text NOT NULL,
  `tvids` varchar(50) NOT NULL,
  `txtvids` text NOT NULL,
  `tcont` varchar(50) NOT NULL,
  `txtcont` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config_principal`
--

INSERT INTO `config_principal` (`id`, `tconf`, `txtconf`, `tvids`, `txtvids`, `tcont`, `txtcont`) VALUES
(1, 'CONFERENCISTAS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'VIDEOS RECIENTES', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam enim ad minim veniam.', 'INFORMACIÓN DE CONTACTO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_tienda`
--

CREATE TABLE `config_tienda` (
  `id` tinyint(1) NOT NULL,
  `tpresen` varchar(50) NOT NULL,
  `ppresen` text NOT NULL,
  `tprod` varchar(50) NOT NULL,
  `pprod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config_tienda`
--

INSERT INTO `config_tienda` (`id`, `tpresen`, `ppresen`, `tprod`, `pprod`) VALUES
(1, 'TIENDA - PRODUCTOS A LA VENTA ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'PRODUCTOS A LA VENTA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_videos`
--

CREATE TABLE `config_videos` (
  `id` tinyint(1) NOT NULL,
  `tpresen` varchar(50) NOT NULL,
  `ppresen` text NOT NULL,
  `tvids` varchar(50) NOT NULL,
  `pvids` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config_videos`
--

INSERT INTO `config_videos` (`id`, `tpresen`, `ppresen`, `tvids`, `pvids`) VALUES
(1, 'VIDEOS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'VIDEOS GENERALES ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `descripcion_producto` varchar(100) NOT NULL,
  `precio_producto` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) NOT NULL,
  `titulo_video` varchar(50) NOT NULL,
  `url_video` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `id_conferencista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo_video`, `url_video`, `descripcion`, `fecha_publicacion`, `id_conferencista`) VALUES
(1, 'Titulo video 1', 'https://www.youtube.com/embed/IzXK4IUyquQ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', '2016-12-11', 1),
(2, 'Título Video 2', 'https://www.youtube.com/embed/3FPFVquCdgc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', '2016-12-11', 2),
(3, 'Título video 3', 'https://www.youtube.com/embed/mLvDeS2PzOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut', '2016-12-11', 3),
(4, 'Titulo video 4', 'https://www.youtube.com/embed/7NpZOP3xO_U', 'Al sureste de Perú, se asentaba la cultura chiribaya. Esta cultura poco conocida es poco conocida, ya que a diferencia de otras culturas, no dejaron monumentos ni joyería de oro o piedras preciosas. Los conocemos gracias a las momias que se han encontrado en la región, debidas a circunstancias extraordinarias de preservación por momificación, en unos casos  en forma naturales inducida, en la que se secaba el cuerpo en el desierto, antes de que entrara en estado de descomposición. Esto permitió que se conservaran los materiales orgánicos, como los textiles y la comida, además de los propios cuerpos.', '2016-12-14', 4),
(5, 'Titulo video 5', 'https://www.youtube.com/embed/7NpZOP3xO_U', 'Al sureste de Perú, se asentaba la cultura chiribaya. Esta cultura poco conocida es poco conocida, ya que a diferencia de otras culturas, no dejaron monumentos ni joyería de oro o piedras preciosas. Los conocemos gracias a las momias que se han encontrado en la región, debidas a circunstancias extraordinarias de preservación por momificación, en unos casos  en forma naturales inducida, en la que se secaba el cuerpo en el desierto, antes de que entrara en estado de descomposición. Esto permitió que se conservaran los materiales orgánicos, como los textiles y la comida, además de los propios cuerpos.\r\n', '2016-12-14', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conferencistas`
--
ALTER TABLE `conferencistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_principal`
--
ALTER TABLE `config_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_tienda`
--
ALTER TABLE `config_tienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_videos`
--
ALTER TABLE `config_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_conferencista` (`id_conferencista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `conferencistas`
--
ALTER TABLE `conferencistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `config_principal`
--
ALTER TABLE `config_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `config_tienda`
--
ALTER TABLE `config_tienda`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `config_videos`
--
ALTER TABLE `config_videos`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_conferencista`) REFERENCES `conferencistas` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
