-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-07-2017 a las 14:29:47
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Asist_Policial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ciudadanos`
--

CREATE TABLE `Ciudadanos` (
  `cedula` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `l_nacimiento` varchar(64) NOT NULL,
  `f_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ciudadanos`
--

INSERT INTO `Ciudadanos` (`cedula`, `nombre`, `apellido`, `l_nacimiento`, `f_nacimiento`) VALUES
(20000001, 'Ramon', 'Rojas', 'Maracay', '2010-12-18'),
(20000002, 'Pedro', 'Rojas', 'Yaracuy', '2009-11-09'),
(20000003, 'Ramon', 'Perez', 'Cumana', '2008-10-05'),
(20000004, 'Julio', 'Quiroga', 'Maracaibo', '2007-09-23'),
(20000005, 'Claudio', 'Quintana', 'Trujillo', '2006-08-24'),
(20000006, 'Ricardo', 'Rivas', 'Barinas', '2005-07-11'),
(20000007, 'Alan', 'Brito', 'Bolivar', '2004-06-22'),
(20000008, 'Elver', 'Andrade', 'Sucre', '2003-05-13'),
(20000009, 'Jonas', 'Jones', 'Merida', '2002-04-04'),
(20000010, 'Diego', 'Parra', 'Valencia', '2001-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Crimenes`
--

CREATE TABLE `Crimenes` (
  `expediente` int(10) UNSIGNED NOT NULL,
  `delito` varchar(64) NOT NULL,
  `solicitado` tinyint(1) NOT NULL,
  `cedula_c` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Crimenes`
--

INSERT INTO `Crimenes` (`expediente`, `delito`, `solicitado`, `cedula_c`) VALUES
(1, 'robo', 0, 20000001),
(2, 'extorcion', 1, 20000002),
(3, 'clonacion de tarjetas', 0, 20000003),
(4, 'ilicito cambiario', 1, 20000004),
(5, 'daño a propiedad publica', 0, 20000005),
(6, 'homicidio', 1, 20000006),
(7, 'cicariato', 0, 20000007),
(8, 'falsificacion', 1, 20000008),
(9, 'evacion de impuestos', 0, 20000009),
(10, 'estafa', 1, 20000010);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `Criminales`
--
CREATE TABLE `Criminales` (
`cedula` int(10) unsigned
,`nombre` varchar(64)
,`apellido` varchar(64)
,`delito` varchar(64)
,`solicitado` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `Info_Cri`
--
CREATE TABLE `Info_Cri` (
`expediente` int(10) unsigned
,`delito` varchar(64)
,`solicitado` tinyint(1)
,`cedula_c` int(10) unsigned
,`id_lc` int(10) unsigned
,`estado_lc` varchar(64)
,`municipio_lc` varchar(64)
,`calle_lc` varchar(64)
,`lugar_lc` varchar(64)
,`expediente_lc` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Lugar_Crimenes`
--

CREATE TABLE `Lugar_Crimenes` (
  `id_lc` int(10) UNSIGNED NOT NULL,
  `estado_lc` varchar(64) NOT NULL,
  `municipio_lc` varchar(64) NOT NULL,
  `calle_lc` varchar(64) NOT NULL,
  `lugar_lc` varchar(64) NOT NULL,
  `expediente_lc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Lugar_Crimenes`
--

INSERT INTO `Lugar_Crimenes` (`id_lc`, `estado_lc`, `municipio_lc`, `calle_lc`, `lugar_lc`, `expediente_lc`) VALUES
(1, 'Nueva Esparta', 'Antolin del campo', 'clara', 'edif. bajito', 1),
(2, 'Nueva Esparta', 'Antolin del campo', 'oscura', 'casa 12-c', 2),
(3, 'Nueva Esparta', 'Gracia', 'luigi', 'mancion-23', 3),
(4, 'Nueva Esparta', 'Garcia', 'mario', 'nientiendo64', 4),
(5, 'Nueva Esparta', 'Macanao', 'Narnia', 'magey', 5),
(6, 'Nueva Esparta', 'Macanao', 'La marina', 'Museo Marino', 6),
(7, 'Nueva Esparta', 'Tubores', 'Grandes', 'conferry', 7),
(8, 'Nueva Esparta', 'Mariño', '4 de mayo', 'media naranja', 8),
(9, 'Nueva Esparta', 'Maneiro', 'Ave. Jovito Villalba', 'Canodromo', 9),
(10, 'Nueva Esparta', 'Maneiro', 'coll', 'central madeirence', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ubicacion_Ciudadanos`
--

CREATE TABLE `Ubicacion_Ciudadanos` (
  `id_uc` int(10) UNSIGNED NOT NULL,
  `cedula_uc` int(10) UNSIGNED NOT NULL,
  `estado_uc` varchar(64) NOT NULL,
  `municipio_uc` varchar(64) NOT NULL,
  `calle_uc` varchar(64) NOT NULL,
  `vivienda_uc` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Ubicacion_Ciudadanos`
--

INSERT INTO `Ubicacion_Ciudadanos` (`id_uc`, `cedula_uc`, `estado_uc`, `municipio_uc`, `calle_uc`, `vivienda_uc`) VALUES
(1, 20000001, 'Nueva Esparta', 'Antolin del campo', 'Ruiz', '14'),
(2, 20000002, 'Nueva Esparta', 'Maneiro', 'Miranda', 'C-22'),
(3, 20000003, 'Nueva Esparta', 'Mariño', 'Zamora', 'D-7'),
(4, 20000004, 'Nueva Esparta', 'Mariño', 'Marina', 'Edif. Alai - Apt.12'),
(5, 20000005, 'Nueva Esparta', 'Marcano', 'Marina', '23-B'),
(6, 20000006, 'Nueva Esparta', 'Marcano', 'Marcano', '14'),
(7, 20000007, 'Nueva Esparta', 'Antolin del campo', 'Diaz', '20-9'),
(8, 20000008, 'Nueva Esparta', 'Macanao', 'Trujillo', '5-B'),
(9, 20000009, 'Nueva Esparta', 'Tubores', 'Juana', '15-C'),
(10, 20000010, 'Nueva Esparta', 'Gomez', 'Ave.Santa Ana', '124-D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_usuario` varchar(32) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `nombre_u` varchar(32) NOT NULL,
  `apellido_u` varchar(32) NOT NULL,
  `cedula_u` int(10) UNSIGNED NOT NULL,
  `privilegio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `clave`, `nombre_u`, `apellido_u`, `cedula_u`, `privilegio`) VALUES
('sudo', '123', 'Samy', 'Mahmod', 17847186, 0),
('user', '123', 'Victoria', 'Borras', 24598590, 1);

-- --------------------------------------------------------

--
-- Estructura para la vista `Criminales`
--
DROP TABLE IF EXISTS `Criminales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Criminales`  AS  select `Ciudadanos`.`cedula` AS `cedula`,`Ciudadanos`.`nombre` AS `nombre`,`Ciudadanos`.`apellido` AS `apellido`,`Crimenes`.`delito` AS `delito`,`Crimenes`.`solicitado` AS `solicitado` from (`Ciudadanos` join `Crimenes` on(((`Crimenes`.`cedula_c` = `Ciudadanos`.`cedula`) and (`Crimenes`.`solicitado` = 1)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `Info_Cri`
--
DROP TABLE IF EXISTS `Info_Cri`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Info_Cri`  AS  select `Crimenes`.`expediente` AS `expediente`,`Crimenes`.`delito` AS `delito`,`Crimenes`.`solicitado` AS `solicitado`,`Crimenes`.`cedula_c` AS `cedula_c`,`Lugar_Crimenes`.`id_lc` AS `id_lc`,`Lugar_Crimenes`.`estado_lc` AS `estado_lc`,`Lugar_Crimenes`.`municipio_lc` AS `municipio_lc`,`Lugar_Crimenes`.`calle_lc` AS `calle_lc`,`Lugar_Crimenes`.`lugar_lc` AS `lugar_lc`,`Lugar_Crimenes`.`expediente_lc` AS `expediente_lc` from (`Crimenes` join `Lugar_Crimenes` on((`Crimenes`.`expediente` = `Lugar_Crimenes`.`expediente_lc`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Ciudadanos`
--
ALTER TABLE `Ciudadanos`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `Crimenes`
--
ALTER TABLE `Crimenes`
  ADD PRIMARY KEY (`expediente`),
  ADD KEY `C_FK1` (`cedula_c`);

--
-- Indices de la tabla `Lugar_Crimenes`
--
ALTER TABLE `Lugar_Crimenes`
  ADD PRIMARY KEY (`id_lc`),
  ADD KEY `LC_FK1` (`expediente_lc`);

--
-- Indices de la tabla `Ubicacion_Ciudadanos`
--
ALTER TABLE `Ubicacion_Ciudadanos`
  ADD PRIMARY KEY (`id_uc`),
  ADD KEY `UC_FK1` (`cedula_uc`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Lugar_Crimenes`
--
ALTER TABLE `Lugar_Crimenes`
  MODIFY `id_lc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `Ubicacion_Ciudadanos`
--
ALTER TABLE `Ubicacion_Ciudadanos`
  MODIFY `id_uc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Crimenes`
--
ALTER TABLE `Crimenes`
  ADD CONSTRAINT `Crimenes_ibfk_1` FOREIGN KEY (`cedula_c`) REFERENCES `Ciudadanos` (`cedula`);

--
-- Filtros para la tabla `Lugar_Crimenes`
--
ALTER TABLE `Lugar_Crimenes`
  ADD CONSTRAINT `Lugar_Crimenes_ibfk_1` FOREIGN KEY (`expediente_lc`) REFERENCES `Crimenes` (`expediente`);

--
-- Filtros para la tabla `Ubicacion_Ciudadanos`
--
ALTER TABLE `Ubicacion_Ciudadanos`
  ADD CONSTRAINT `Ubicacion_Ciudadanos_ibfk_1` FOREIGN KEY (`cedula_uc`) REFERENCES `Ciudadanos` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
