-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2017 a las 23:30:26
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminphs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datas`
--

CREATE TABLE `datas` (
  `data_id` int(11) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datas`
--

INSERT INTO `datas` (`data_id`, `position`, `state_id`, `template_id`, `content`, `page_id`) VALUES
(1, 1, 1, 1, 'Mi título|subtítulo|botón', 1),
(2, 2, 1, 2, 'Mi título|subtítulo|botón', 1),
(3, 2, 1, 2, 'Mi título|subtítulo|botón', 1),
(4, 2, 1, 2, 'Mi título|subtítulo|botón', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `state_id` int(11) DEFAULT '1',
  `position` int(11) DEFAULT '0',
  `page_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`page_id`, `name`, `url`, `state_id`, `position`, `page_type_id`) VALUES
(1, 'Inicio', 'inicio', 1, 1, 1),
(2, 'Nosotros', 'nosotros', 1, 3, 1),
(3, 'Servicios', 'servicios', 1, 4, 1),
(6, 'Contacto', 'contacto', 1, 5, 1),
(7, 'Prueba', 'prueba', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages_type`
--

CREATE TABLE `pages_type` (
  `page_type_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`state_id`, `name`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templates`
--

CREATE TABLE `templates` (
  `template_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `class` text,
  `templates_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `templates`
--

INSERT INTO `templates` (`template_id`, `state_id`, `name`, `class`, `templates_type`) VALUES
(1, 1, 'Plantilla 01', 'bg-grey btn-red', 1),
(2, 1, 'Plantilla 02', 'mi_clase clases02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templates_type`
--

CREATE TABLE `templates_type` (
  `templates_type` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `state_id` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `state_id`) VALUES
(0, '3', 'Alberto', 'administrador@phsmedia.pe', 1),
(1, 'Carlos Alexander', 'Chirito Romero', 'cchirito@phsperu.com', 1),
(2, 'Sheyla Alexandra', 'Chirito Romero', 'schirito@phsperu.com', 1),
(4, 'Jose', 'Ruiz', 'administrador@phsmedia.pes', 2),
(5, '', '', 'administrador@phsmedia.p2', 2),
(6, '', '', 'administrador@phsmedia.pc', 2),
(7, '', '', 'administrador@phsmedia.pcs', 2),
(8, '', '', 'administrador@phsmedia.pc3', 2),
(9, '', '', 'administrador@phsmedia.pc45', 2),
(10, '', '', 'administrador@phsmedia.pc45df', 2),
(11, '', '', 'administrador@phsmedia.pc45df343', 2),
(12, '', '', 'administrador@phsmedia.pc6', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`data_id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indices de la tabla `pages_type`
--
ALTER TABLE `pages_type`
  ADD PRIMARY KEY (`page_type_id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indices de la tabla `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`template_id`);

--
-- Indices de la tabla `templates_type`
--
ALTER TABLE `templates_type`
  ADD PRIMARY KEY (`templates_type`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datas`
--
ALTER TABLE `datas`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pages_type`
--
ALTER TABLE `pages_type`
  MODIFY `page_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `templates`
--
ALTER TABLE `templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `templates_type`
--
ALTER TABLE `templates_type`
  MODIFY `templates_type` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
