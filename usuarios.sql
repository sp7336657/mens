-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2020 a las 05:42:54
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_mens`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `clave`) VALUES
(1, 'sebastian', 'sebas@gmail.com', '1234'),
(4, '', '', '$2y$10$zmzaQM6ZPv6/j.5HF8qkuulA4AHJh.bCZ2T.eOOrUY24FDe5hGQ1K'),
(5, '', '', '$2y$10$sU8tJ5Q/oZfzpD3ift3srOzyjtSxgDFnAz2uCFNeA9TbCkdW.yJAa'),
(6, '', '', '$2y$10$h9yWt4U9I7R46HiSiBVOburjAnVjrl.kE.s0WUfcW0vagbhYbv3EK'),
(7, 'juan', 'sebas@gmail.com', 'aaaa'),
(8, 'juan', 'sebas@gmail.com', 'aaaa'),
(9, '', '', '$2y$10$zZ516lZUQ.m5cTM14GuLcuux1v78rm.0aeURPfgK4HaGIwKaC8E46'),
(10, '', '', '$2y$10$whlwQUGqulCd0RFz/5yAmupLCKskn.0zBAkHWckD5GZkEs0Xj5qby'),
(11, 'sebas', '', '$2y$10$W/extXWlcunDn2K8xk2GQuPZpCL5tn9TMa8KdJJ9XwtnEg44XmnAS'),
(12, 'sed', 'seb@gmail.com', '$2y$10$SkLsCsG0uQh8ocsnbYIWD.fd0qUhyAPFNMWM2mKFhzyMVG99o17Ky'),
(13, 'dester', 'dester@gmail.com', '$2y$10$FkE8qir9FWo6nEKrDD4AKOSvJR75bViUf7gAEl7GR9bVI3wUBRQ3m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
