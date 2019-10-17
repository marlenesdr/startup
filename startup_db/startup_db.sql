-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2019 a las 08:42:58
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `startup_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_alumno`
--

CREATE TABLE `startup_alumno` (
  `Id_alumno` int(11) NOT NULL DEFAULT 0,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_contenido`
--

CREATE TABLE `startup_contenido` (
  `Id_contenido` int(11) NOT NULL DEFAULT 0,
  `Id_tema` int(11) NOT NULL DEFAULT 0,
  `Id_material` int(11) NOT NULL DEFAULT 0,
  `Id_evaluacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_docente`
--

CREATE TABLE `startup_docente` (
  `Id_docente` int(11) NOT NULL DEFAULT 0,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Celular` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_encuesta`
--

CREATE TABLE `startup_encuesta` (
  `Id_encuesta` int(11) NOT NULL DEFAULT 0,
  `Id_contenido` int(11) NOT NULL DEFAULT 0,
  `Estado` varchar(50) NOT NULL,
  `Cuestionario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_evaluacion`
--

CREATE TABLE `startup_evaluacion` (
  `Id_evaluacion` int(11) NOT NULL DEFAULT 0,
  `Id_tema` int(11) NOT NULL DEFAULT 0,
  `Id_docente` int(11) NOT NULL DEFAULT 0,
  `Estado` varchar(10) NOT NULL,
  `Revisor` varchar(10) NOT NULL,
  `Archivo` varchar(100) NOT NULL,
  `Observacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_gestion_calificacion`
--

CREATE TABLE `startup_gestion_calificacion` (
  `Id_calificacion` int(11) NOT NULL DEFAULT 0,
  `Id_alumno` varchar(10) NOT NULL,
  `Id_contenido` int(11) NOT NULL DEFAULT 0,
  `Id_revisor` int(11) NOT NULL DEFAULT 0,
  `Nota` double NOT NULL,
  `Fecha_evaluacion` date NOT NULL,
  `Tipo_evaluacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_gestion_tema`
--

CREATE TABLE `startup_gestion_tema` (
  `Id_tema` int(11) NOT NULL DEFAULT 0,
  `Id_tematico` int(11) NOT NULL DEFAULT 0,
  `Objetivos` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Duracion` varchar(50) NOT NULL,
  `Contenido` varchar(50) NOT NULL,
  `Criterio` varchar(50) NOT NULL,
  `Estructura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_gestion_tematico`
--

CREATE TABLE `startup_gestion_tematico` (
  `Id_tematico` int(11) NOT NULL DEFAULT 0,
  `Nombre` varchar(50) NOT NULL,
  `Perfil` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Objetivos` varchar(50) NOT NULL,
  `Unidades` varchar(50) NOT NULL,
  `Actividades` varchar(50) NOT NULL,
  `Duracion_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_marcador`
--

CREATE TABLE `startup_marcador` (
  `Id_marcador` int(11) NOT NULL DEFAULT 0,
  `Id_contenido` int(11) NOT NULL DEFAULT 0,
  `Id_alumino` int(11) NOT NULL DEFAULT 0,
  `Id_tematico` int(11) NOT NULL DEFAULT 0,
  `Id_evaluacion` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_material`
--

CREATE TABLE `startup_material` (
  `Id_material` int(11) NOT NULL DEFAULT 0,
  `Tipo` varchar(50) NOT NULL,
  `URL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_trabajo`
--

CREATE TABLE `startup_trabajo` (
  `Id_trabajo` int(11) NOT NULL DEFAULT 0,
  `Id_contenido` int(11) NOT NULL DEFAULT 0,
  `Id_docente` int(11) NOT NULL DEFAULT 0,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `startup_usuario`
--

CREATE TABLE `startup_usuario` (
  `Id_usuario` int(11) NOT NULL DEFAULT 0,
  `Nivel_1` int(11) NOT NULL,
  `Nivel_2` int(11) NOT NULL,
  `Nivel_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `startup_alumno`
--
ALTER TABLE `startup_alumno`
  ADD PRIMARY KEY (`Id_alumno`);

--
-- Indices de la tabla `startup_contenido`
--
ALTER TABLE `startup_contenido`
  ADD PRIMARY KEY (`Id_contenido`);

--
-- Indices de la tabla `startup_docente`
--
ALTER TABLE `startup_docente`
  ADD PRIMARY KEY (`Id_docente`);

--
-- Indices de la tabla `startup_encuesta`
--
ALTER TABLE `startup_encuesta`
  ADD PRIMARY KEY (`Id_encuesta`);

--
-- Indices de la tabla `startup_evaluacion`
--
ALTER TABLE `startup_evaluacion`
  ADD PRIMARY KEY (`Id_evaluacion`);

--
-- Indices de la tabla `startup_gestion_calificacion`
--
ALTER TABLE `startup_gestion_calificacion`
  ADD PRIMARY KEY (`Id_calificacion`);

--
-- Indices de la tabla `startup_gestion_tema`
--
ALTER TABLE `startup_gestion_tema`
  ADD PRIMARY KEY (`Id_tema`);

--
-- Indices de la tabla `startup_gestion_tematico`
--
ALTER TABLE `startup_gestion_tematico`
  ADD PRIMARY KEY (`Id_tematico`);

--
-- Indices de la tabla `startup_marcador`
--
ALTER TABLE `startup_marcador`
  ADD PRIMARY KEY (`Id_marcador`);

--
-- Indices de la tabla `startup_material`
--
ALTER TABLE `startup_material`
  ADD PRIMARY KEY (`Id_material`);

--
-- Indices de la tabla `startup_trabajo`
--
ALTER TABLE `startup_trabajo`
  ADD PRIMARY KEY (`Id_trabajo`);

--
-- Indices de la tabla `startup_usuario`
--
ALTER TABLE `startup_usuario`
  ADD PRIMARY KEY (`Id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
