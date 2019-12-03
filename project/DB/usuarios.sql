-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2019 a las 03:50:25
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
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos2`
--

CREATE TABLE `datos2` (
  `usuario` varchar(50) NOT NULL,
  `Edad` int(5) DEFAULT NULL,
  `Nacionalidad` text,
  `Descrip` text,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `TC` text NOT NULL,
  `NumExams` int(50) DEFAULT NULL,
  `CaliMax` double NOT NULL,
  `CaliMin` double NOT NULL,
  `NotaIntro` double NOT NULL,
  `intro` double DEFAULT NULL,
  `totalExams` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos2`
--

INSERT INTO `datos2` (`usuario`, `Edad`, `Nacionalidad`, `Descrip`, `email`, `pass`, `TC`, `NumExams`, `CaliMax`, `CaliMin`, `NotaIntro`, `intro`, `totalExams`) VALUES
('Admin', 18, 'Colombia', 'Hola me llamo Kevin', 'kevin100orrego@gmail.com', '01d926979aaf4eb39ef574b13a2c426e', 'on', 1, 5.6, 5.6, 5.6, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos2`
--
ALTER TABLE `datos2`
  ADD PRIMARY KEY (`usuario`(30));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
