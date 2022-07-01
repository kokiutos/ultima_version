-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2022 a las 03:02:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_propiedad` varchar(200) NOT NULL,
  `nombre_foto` varchar(200) NOT NULL,
  `id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_propiedad`, `nombre_foto`, `id`) VALUES
('7', '2774b6a9232639e6bc16ed1246e50f9523a542f0.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inmueble`
--

CREATE TABLE `tbl_inmueble` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `pisos` int(11) NOT NULL,
  `habitacion` int(11) NOT NULL,
  `banios` int(11) NOT NULL,
  `garage` varchar(2) DEFAULT 'NO',
  `precio` int(11) NOT NULL,
  `url_foto_principal` varchar(200) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` text NOT NULL,
  `estado` text NOT NULL,
  `nombre_propietario` text NOT NULL,
  `telefono_propietario` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_inmueble`
--

INSERT INTO `tbl_inmueble` (`id`, `identificacion`, `area`, `ciudad`, `pisos`, `habitacion`, `banios`, `garage`, `precio`, `url_foto_principal`, `titulo`, `descripcion`, `tipo`, `estado`, `nombre_propietario`, `telefono_propietario`) VALUES
(11, '32435908', 345, 'Bogota', 4, 4, 3, 'Si', 2147483647, '../build/img/img_inmuebles/property-3.jpg', 'Casa En Chapinero', 'Casa que queda en chapinero', '1', 'venta', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `identificacion` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(300) NOT NULL,
  `estado` varchar(100) DEFAULT 'activo',
  `rol` varchar(20) DEFAULT 'propietario',
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`identificacion`, `nombre`, `apellido`, `correo`, `clave`, `estado`, `rol`, `direccion`, `telefono`) VALUES
('1111', 's', 's', 'da@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'activo', 'propietario', 'a', 0),
('32435908', 'Sergio', 'Restrepo', 'sergio@gmail.com', '123', 'activo', 'propietario', 'Calle 23', 5235432),
('32482394801', 'Paulina', 'Otalvaro Tabares', 'pauli@gmai.com', '123', 'activo', 'propietario', 'Indigo', 423948),
('fjasdfasjl', 'Carlos', 'Ruiz', 'carlos@gmail.com', '123', 'activo', 'admin', '3523525', 4234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` varchar(30) NOT NULL,
  `nombre_tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre_tipo`) VALUES
('1', 'dep');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_inmueble`
--
ALTER TABLE `tbl_inmueble`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_cc` (`identificacion`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_inmueble`
--
ALTER TABLE `tbl_inmueble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_inmueble`
--
ALTER TABLE `tbl_inmueble`
  ADD CONSTRAINT `pk_cc` FOREIGN KEY (`identificacion`) REFERENCES `tbl_usuario` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
