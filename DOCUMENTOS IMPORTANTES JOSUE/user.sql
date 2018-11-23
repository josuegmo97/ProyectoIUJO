-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2018 a las 21:27:38
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoiujo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `copyDocument` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyBirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyNotes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyOpsu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `document`, `genre`, `birthday`, `copyDocument`, `copyBirth`, `copyTitle`, `copyNotes`, `copyOpsu`, `copyBackground`, `created_at`, `updated_at`) VALUES
(1, 'Josue', 'Marin', 26774668, 'Masculino', '1997-10-04', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(2, 'Andrea', 'Osuna', 25990089, 'Femenino', '1996-01-05', 'Si', 'No', 'Si', 'No', 'Si', 'No', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(3, 'Jesus', 'Marin', 6220075, 'Masculino', '1964-02-14', 'No', 'No', 'No', 'No', 'No', 'No', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(4, 'Georgina', 'Ortiz', 6926300, 'Femenino', '1996-10-02', 'No', 'Si', 'No', 'Si', 'No', 'Si', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(5, 'Sandra', 'Marin', 19255308, 'Femenino', '1991-07-07', 'Si', 'Si', 'Si', 'No', 'No', 'No', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(6, 'Patty', 'Mendez', 202369654, 'Femenino', '1991-12-12', 'Si', 'Si', 'Si', 'No', 'No', 'No', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(7, 'Pablo', 'Escobar', 191919, 'Masculino', '1980-01-07', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '2018-11-23 20:12:23', '2018-11-23 20:12:23'),
(8, 'Claudia', 'Rico', 12598789, 'Femenino', '1995-06-01', 'Si', 'Si', 'Si', 'No', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(9, 'Sandra', 'Marin', 19255108, 'Femenino', '1991-07-07', 'Si', 'Si', 'Si', 'No', 'No', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(10, 'David', 'Marin', 5696625, 'Masculino', '1997-01-10', 'Si', 'No', 'Si', 'No', 'No', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(11, 'Jeissica', 'Suarez', 10258963, 'Femenino', '1993-12-11', 'No', 'Si', 'Si', 'No', 'Si', 'Si', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(12, 'Elvio', 'Lao', 1020304, 'Otros', '1980-10-05', 'No', 'Si', 'Si', 'No', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(13, 'Pablo', 'Lucho', 16369251, 'Masculino', '1991-07-07', 'Si', 'Si', 'Si', 'No', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(14, 'Cesar', 'Trejo', 16369252, 'Masculino', '1991-07-07', 'Si', 'Si', 'Si', 'No', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(15, 'Poncio', 'Pilato', 1169251, 'Masculino', '1970-01-02', 'Si', 'No', 'No', 'No', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(16, 'Lucia', 'Gil', 10589478, 'Femenino', '1970-02-02', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(17, 'Samantha', 'Gil', 6896589, 'Femenino', '1972-03-02', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(18, 'Armando', 'Casas', 3256896, 'Masculino', '1970-02-09', 'Si', 'No', 'Si', 'Si', 'Si', 'No', '2018-11-23 20:12:24', '2018-11-23 20:12:24'),
(19, 'Petra', 'Caseres', 10258693, 'Femenino', '1996-02-10', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', '2018-11-23 20:15:20', '2018-11-23 20:15:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_document_unique` (`document`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
