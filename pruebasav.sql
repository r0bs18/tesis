-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 04:05:57
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebasav`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `idEspecies` int(11) NOT NULL,
  `Nombre_Especie` varchar(45) NOT NULL,
  `Descripcion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `idHistoria` int(11) NOT NULL,
  `Tratamiento` longtext,
  `Sugerencias` longtext,
  `Mascota_idMascota` int(11) NOT NULL,
  `Mascota_Num_RFID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `Num_RFID` varchar(45) NOT NULL,
  `Nombre_Masco` varchar(20) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Color` varchar(45) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Microchip` varchar(50) DEFAULT NULL,
  `Especies_idEspecies` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Usuario_CI_Usuario` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivoconsulta`
--

CREATE TABLE `motivoconsulta` (
  `idMotivoConsulta` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivoconsulta_has_historia`
--

CREATE TABLE `motivoconsulta_has_historia` (
  `MotivoConsulta_idMotivoConsulta` int(11) NOT NULL,
  `Historia_idHistoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `idRazas` int(11) NOT NULL,
  `Nombre_Raza` varchar(45) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Especies_idEspecies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `Nombre_Status` varchar(45) NOT NULL,
  `Descripcion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `CI_Usuario` varchar(14) NOT NULL,
  `Nombre_Usu` varchar(40) NOT NULL,
  `Apellido_Usu` varchar(50) NOT NULL,
  `Telef_Usu` varchar(12) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Localidad` longtext NOT NULL,
  `MSDS` varchar(8) DEFAULT NULL,
  `CMVL` varchar(6) DEFAULT NULL,
  `INSAI` varchar(18) DEFAULT NULL,
  `Nivel_Permisologia` int(11) NOT NULL,
  `Alias_Usuario` varchar(12) NOT NULL,
  `Clave_Usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `CI_Usuario`, `Nombre_Usu`, `Apellido_Usu`, `Telef_Usu`, `Email`, `Localidad`, `MSDS`, `CMVL`, `INSAI`, `Nivel_Permisologia`, `Alias_Usuario`, `Clave_Usuario`) VALUES
(1, 'V-19.780.897', 'Robert ', 'Sanchez', '0412-1729141', 'bore1890@gmail.com', 'Barquisimeto', NULL, NULL, NULL, 0, 'rsav', '12345'),
(2, '19780890', 'eduardo', 'silva', '04245129516', 'robert18_90@gmail.com', 'baqrusieemto', NULL, NULL, NULL, 0, 'qwerty', '1234567890'),
(3, '12345678', 'erd', 'arte', '1232-4537689', 'yhuju34@gmail.com', 'bartggg, tjytyhgyh, ', '123122', '12342', '', 0, 'qazxsw', '0987654321'),
(4, '13565645', 'sgd', 'bxcbvnhg', '123465574257', 'vfhgt@yhg.c', 'hdmkoutifuhg', NULL, NULL, NULL, 1, 'qrfdgg', 'rgdrfhbgtr'),
(5, '34424545', 'fgjhfdhn', 'hnv mjbj', '234567787767', 'gfngfnfg@jdf.c', 'rhtffdffggfh', '23078676', '314431', '', 2, 'ssddsdsd', 'wqwerert'),
(6, '46374411', 'shshgsghsfjnfgn', 'gfsngfg', '565663437665', 'bnh@jhfd.c', 'etydjmiioutiotiiy', NULL, NULL, NULL, 4, 'qwerwer', '1234567'),
(7, '13546789', 'dgjnbnjd', 'ryhjdmkyhmdtgy', '234567898765', 'xdghnxfdgn@kj.c', 'sdtghsdfjggsjs', NULL, NULL, NULL, 3, 'shshgshsihbi', '451617890'),
(8, '35625356', 'fgnb', 'tgbyyfgd', '414431542262', 'hdnfsnrt@2jk.c', 'sgnfn rsnhsrt', NULL, NULL, NULL, 1, 'rtgn,ii', '325ergr554');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacuna`
--

CREATE TABLE `vacuna` (
  `idVacuna` int(11) NOT NULL,
  `Nombre_Vacuna` varchar(45) NOT NULL,
  `Lote_Vacuna` varchar(45) NOT NULL,
  `Marca_Vacuna` varchar(45) NOT NULL,
  `Fecha_Vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`idEspecies`),
  ADD UNIQUE KEY `idEspecies_UNIQUE` (`idEspecies`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idHistoria`),
  ADD UNIQUE KEY `idHistoria_UNIQUE` (`idHistoria`),
  ADD KEY `fk_Historia_Mascota1_idx` (`Mascota_idMascota`,`Mascota_Num_RFID`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`,`Num_RFID`),
  ADD UNIQUE KEY `idMascota_UNIQUE` (`idMascota`),
  ADD UNIQUE KEY `Num_RFID_UNIQUE` (`Num_RFID`),
  ADD UNIQUE KEY `Microchip_UNIQUE` (`Microchip`),
  ADD KEY `fk_Mascota_Especies1_idx` (`Especies_idEspecies`),
  ADD KEY `fk_Mascota_Usuario1_idx` (`Usuario_idUsuario`,`Usuario_CI_Usuario`);

--
-- Indices de la tabla `motivoconsulta`
--
ALTER TABLE `motivoconsulta`
  ADD PRIMARY KEY (`idMotivoConsulta`),
  ADD UNIQUE KEY `idMotivoConsulta_UNIQUE` (`idMotivoConsulta`);

--
-- Indices de la tabla `motivoconsulta_has_historia`
--
ALTER TABLE `motivoconsulta_has_historia`
  ADD PRIMARY KEY (`MotivoConsulta_idMotivoConsulta`,`Historia_idHistoria`),
  ADD KEY `fk_MotivoConsulta_has_Historia_Historia1_idx` (`Historia_idHistoria`),
  ADD KEY `fk_MotivoConsulta_has_Historia_MotivoConsulta1_idx` (`MotivoConsulta_idMotivoConsulta`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`idRazas`),
  ADD UNIQUE KEY `idRazas_UNIQUE` (`idRazas`),
  ADD KEY `fk_Razas_Especies1_idx` (`Especies_idEspecies`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`),
  ADD UNIQUE KEY `idStatus_UNIQUE` (`idStatus`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`,`CI_Usuario`),
  ADD UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`),
  ADD UNIQUE KEY `CI_Usuario_UNIQUE` (`CI_Usuario`);

--
-- Indices de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  ADD PRIMARY KEY (`idVacuna`),
  ADD UNIQUE KEY `idVacuna_UNIQUE` (`idVacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `idEspecies` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `idHistoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `motivoconsulta`
--
ALTER TABLE `motivoconsulta`
  MODIFY `idMotivoConsulta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `idRazas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `vacuna`
--
ALTER TABLE `vacuna`
  MODIFY `idVacuna` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historia`
--
ALTER TABLE `historia`
  ADD CONSTRAINT `fk_Historia_Mascota1` FOREIGN KEY (`Mascota_idMascota`,`Mascota_Num_RFID`) REFERENCES `mascota` (`idMascota`, `Num_RFID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_Mascota_Especies1` FOREIGN KEY (`Especies_idEspecies`) REFERENCES `especies` (`idEspecies`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Mascota_Usuario1` FOREIGN KEY (`Usuario_idUsuario`,`Usuario_CI_Usuario`) REFERENCES `usuario` (`idUsuario`, `CI_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `motivoconsulta_has_historia`
--
ALTER TABLE `motivoconsulta_has_historia`
  ADD CONSTRAINT `fk_MotivoConsulta_has_Historia_Historia1` FOREIGN KEY (`Historia_idHistoria`) REFERENCES `historia` (`idHistoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_MotivoConsulta_has_Historia_MotivoConsulta1` FOREIGN KEY (`MotivoConsulta_idMotivoConsulta`) REFERENCES `motivoconsulta` (`idMotivoConsulta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `razas`
--
ALTER TABLE `razas`
  ADD CONSTRAINT `fk_Razas_Especies1` FOREIGN KEY (`Especies_idEspecies`) REFERENCES `especies` (`idEspecies`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
