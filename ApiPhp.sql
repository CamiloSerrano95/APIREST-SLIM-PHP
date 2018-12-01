-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-12-2018 a las 14:09:37
-- Versión del servidor: 5.7.21-1
-- Versión de PHP: 7.0.29-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ApiPhp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudiantes`
--

CREATE TABLE `Estudiantes` (
  `id` int(10) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Estudiantes`
--

INSERT INTO `Estudiantes` (`id`, `cedula`, `nombres`, `apellidos`, `telefono`, `correo`) VALUES
(2, '16160220208', 'Zeus', 'Jameson White', '505', 'eu.nulla@lobortisquama.edu'),
(3, '16490810924', 'Kato', 'Indigo Carpenter', '36', 'justo@interdumNunc.co.uk'),
(4, '16440608947', 'Keefe', 'Yuri Fletcher', '147', 'lacus.vestibulum@cursus.com'),
(5, '16260406807', 'Trevor', 'Griffin Hensley', '109', 'ligula.Nullam.feugiat@anuncIn.co.uk'),
(6, '16060912254', 'Barry', 'Vanna Wagner', '181', 'orci@lorem.co.uk'),
(7, '16160528917', 'Knox', 'Magee Beasley', '722', 'ac.feugiat.non@eleifendnuncrisus.edu'),
(8, '16750520187', 'Hilel', 'Lucian Molina', '744', 'Sed@idmollisnec.ca'),
(9, '16951119669', 'Lev', 'Louis Hunter', '730', 'neque@eunequepellentesque.ca'),
(10, '1689010468', 'Jared', 'Hiram Duke', '27', 'Phasellus@portaelita.co.uk'),
(11, '1067943114', 'Camilo Antonio', 'Serrano Doria', '3006798974', 'serranocamilo95@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Estudiantes`
--
ALTER TABLE `Estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Estudiantes`
--
ALTER TABLE `Estudiantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
