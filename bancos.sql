-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2022 a las 17:15:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `n_cuenta` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `dni` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`n_cuenta`, `nombre`, `apellido`, `dni`) VALUES
(1001, 'DANIEL', 'VEGA', '25805514'),
(1002, 'CECILIA', 'PORTAL', '09903285'),
(1003, 'MARIA', 'RUIZ', '34567832'),
(1004, 'OSCAR', 'RUIZ', '77300147');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `cod_dep` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `depositos`
--

INSERT INTO `depositos` (`cod_dep`, `fecha`, `monto`, `cliente`) VALUES
(310, '2022-02-02', 500, 1001),
(311, '2022-02-02', 1000, 1002),
(312, '2022-02-02', 700, 1001),
(313, '2022-02-02', 500, 1002),
(321, '2022-02-02', 500, 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `password`) VALUES
(1, 'OBRERO', 'OBRE'),
(2, 'EMPLEADO', 'EMPLE'),
(21, 'PROGRAMADOR', 'PROGRA'),
(25, 'PROFESOR', '123'),
(26, 'ALUMNO', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_servicios`
--

CREATE TABLE `pago_servicios` (
  `cod_pag` int(11) NOT NULL,
  `concepto` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `monto` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago_servicios`
--

INSERT INTO `pago_servicios` (`cod_pag`, `concepto`, `fecha`, `monto`, `cliente`) VALUES
(1, 'pago de telefono', '2017-02-20', 75, 1001),
(2, 'pago del agua', '2017-02-27', 95, 1002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiros`
--

CREATE TABLE `retiros` (
  `cod_ret` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `retiros`
--

INSERT INTO `retiros` (`cod_ret`, `fecha`, `monto`, `cliente`) VALUES
(1, '2017-02-18', 100, 1001),
(2, '2017-02-25', 100, 1001),
(3, '2017-02-18', 500, 1002),
(4, '2017-02-25', 100, 1002);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'obrero', 'obre'),
(2, 'empleado', 'emple'),
(3, 'daniel', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`n_cuenta`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`cod_dep`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `cliente_2` (`cliente`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `pago_servicios`
--
ALTER TABLE `pago_servicios`
  ADD PRIMARY KEY (`cod_pag`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD PRIMARY KEY (`cod_ret`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `cliente_2` (`cliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `cod_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pago_servicios`
--
ALTER TABLE `pago_servicios`
  MODIFY `cod_pag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `retiros`
--
ALTER TABLE `retiros`
  MODIFY `cod_ret` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD CONSTRAINT `depositos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`n_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago_servicios`
--
ALTER TABLE `pago_servicios`
  ADD CONSTRAINT `pago_servicios_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`n_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `retiros`
--
ALTER TABLE `retiros`
  ADD CONSTRAINT `retiros_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`n_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
