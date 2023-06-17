-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 00:28:26
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_umc`
--
CREATE DATABASE IF NOT EXISTS `usuarios_umc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `usuarios_umc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatares`
--

CREATE TABLE `avatares` (
  `id_avatares` int(11) NOT NULL,
  `id_perfiles` int(11) NOT NULL,
  `avatar_url` text NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `avatares`
--

INSERT INTO `avatares` (`id_avatares`, `id_perfiles`, `avatar_url`, `creado`) VALUES
(1, 0, '<li><img src=\"../public/img/avatares/mujer-1.svg\" alt=\"Avatar 1\" class=\"avatar\"></li>', '2023-06-06 22:54:57'),
(2, 0, '<li><img src=\"../public/img/avatares/mujer-2.svg\" alt=\"Avatar 2\" class=\"avatar\"></li>', '2023-06-06 22:54:57'),
(3, 0, '../public/img/avatares/hombre-1.svg', '2023-06-06 22:54:57'),
(4, 0, '../public/img/avatares/hombre-2.svg', '2023-06-06 22:54:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `biografia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(11) NOT NULL,
  `categorias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `categorias`) VALUES
(1, 'comestibles'),
(2, 'vestimentas'),
(3, 'entretenimiento'),
(4, 'tecnologias'),
(5, 'educacion'),
(6, 'servicios'),
(7, 'residencias'),
(8, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `id_publicaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `id_usuarios`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `id_publicaciones` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagenprod` longblob NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publicaciones` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `id_likes` int(11) NOT NULL,
  `id_perfiles` int(11) NOT NULL,
  `fecha_publicacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `id_login`, `roles`) VALUES
(1, 0, 'admin'),
(2, 0, 'superuser'),
(3, 0, 'normales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `biografia` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `apellido`, `usuario`, `cedula`, `password`, `telefono`, `biografia`, `created_at`) VALUES
(1, 'aisaac', 'hung', '27042470ISAAC', '27042470', '$2y$10$PO5YDomAceR1P9lJxC8IDuKWD8QjR8wKFmdfMQdzwn3dvFqLK1lUK', '04143974576', '', '2023-06-07 22:08:56'),
(2, 'liz ', 'ovallez', '28132505liz', '2813250', '$2y$10$LooKBBmZOq6UMs22MGlU0Oqonuh85exjOVKknx94/bM5ascDZq0e6', '11111111111', '', '2023-06-07 22:20:24'),
(3, 'anthony', 'goncalvez', '28447447anthony', '28447447', '$2y$10$Gp/0k6Q2tarespjFBIkL8OJLqY9w5ss8RgjWkd3SMRBsSIZx3vnhS', '22222222222', '', '2023-06-07 22:21:06'),
(4, 'carlos ', 'gonzalez', '28305519Carlos', '28305519', '$2y$10$nZd.7rDs/rzENZjwnaMw3.BPbUg9o6vlUGr0K973Nw2HGgnax8qqG', '33333333333', '', '2023-06-07 22:21:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatares`
--
ALTER TABLE `avatares`
  ADD PRIMARY KEY (`id_avatares`),
  ADD KEY `id_perfiles` (`id_perfiles`);

--
-- Indices de la tabla `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_publicaciones` (`id_publicaciones`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `id_publicaciones` (`id_publicaciones`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publicaciones`),
  ADD KEY `id_categorias` (`id_categorias`),
  ADD KEY `id_productos` (`id_productos`),
  ADD KEY `id_likes` (`id_likes`),
  ADD KEY `id_perfiles` (`id_perfiles`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`),
  ADD KEY `id_login` (`id_login`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatares`
--
ALTER TABLE `avatares`
  MODIFY `id_avatares` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publicaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `roles` (`id_login`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD CONSTRAINT `perfiles_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_publicaciones`) REFERENCES `publicaciones` (`id_publicaciones`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_3` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publicaciones_ibfk_5` FOREIGN KEY (`id_likes`) REFERENCES `likes` (`id_like`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `publicaciones_ibfk_6` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
