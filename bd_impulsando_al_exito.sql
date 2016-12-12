-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2016 a las 15:42:35
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
  `id_admin` int(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_descripcion`
--

CREATE TABLE `admin_descripcion` (
  `id_descripcion` int(8) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_producto` int(8) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `descripcion_producto` varchar(100) NOT NULL,
  `precio_producto` float NOT NULL,
  `telefono_contacto` varchar(11) NOT NULL
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
  `id_conferencista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo_video`, `url_video`, `descripcion`, `id_conferencista`) VALUES
(1, 'Titulo video 1', 'https://www.youtube.com/embed/IzXK4IUyquQ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 1),
(2, 'Título Video 2', 'https://www.youtube.com/embed/3FPFVquCdgc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut', 2),
(3, 'Título video 3', 'https://www.youtube.com/embed/mLvDeS2PzOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  quis nostrud exercitation ullamco laboris nisi ut', 3),
(4, 'Titulo herramienta', 'http://localhost/OffCloud/aaa.html', 'adasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasdaadasda', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_conferencista` (`id_conferencista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_conferencista`) REFERENCES `conferencistas` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
