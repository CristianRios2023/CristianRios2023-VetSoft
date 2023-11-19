-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2023 a las 02:35:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdvetsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(7) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `fk_estado` int(7) DEFAULT NULL,
  `fk_tipo_usuario` int(7) DEFAULT 3,
  `fk_especialidad` int(7) DEFAULT NULL,
  `fk_localidad` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `contraseña`, `direccion`, `email`, `usuario`, `telefono`, `fk_estado`, `fk_tipo_usuario`, `fk_especialidad`, `fk_localidad`) VALUES
(417, 'Cris', 'Rios', '123', 'la paz 123', 'cris@gmail.com', 'cris', NULL, 1, NULL, NULL, 17),
(418, 'asdasd', 'cristian', '123', 'Paso 129', 'rcris@hotmail.com', 'rios', 0, 418, 418, 0, 17),
(419, 'diana', 'Reyes', '123', 'Salvigny 1641', 'diana@gmail.com', 'Reyes123', 2147483647, 419, 419, 7, 10),
(420, 'Milena', 'Cordova', '123', 'La Habana 532', 'mile@gmail.com', 'Mile123', NULL, 1, 2, 11, 20),
(421, 'Eva', 'Huertas', '123', 'Cerro de Pasco 2345', 'eva@gmail.com', 'eva123', NULL, 1, 2, 10, 20),
(422, 'Estela', 'Caceres', '123', 'Pierola 556', 'estela@gmail.com', 'estela123', NULL, 1, 2, 5, 17),
(423, 'Walter', 'Huertas', '123', 'Las Americas 235', 'walter@gmail.com', 'walter123', NULL, 1, 2, 5, 9),
(424, 'Miguel', 'Chafloque', '456', 'Ventanilla 1298', 'miguel456@gmail.com', 'miguel456', 2147483647, 424, 424, 0, 5),
(425, 'Johana', 'Flores', '789', 'Psj. Miron 753', 'johana@gmail.com', 'johana789', 2147483647, 425, 425, 0, 12),
(426, 'Eduardo ', 'Huertas', '123', 'Tucuman 2951', 'eduardo123@gmail.com', 'eduardo123', NULL, 1, 1, NULL, 6),
(427, 'Raul', 'Monzon', 'monzon', 'Belgrano 123', 'raulM@hotmail.com', 'Rau', NULL, NULL, 3, NULL, 27),
(429, 'Cristian Erik', 'Rios', 'asdasd', NULL, 'rios_crist2794@hotmail.com', 'asdasd', NULL, NULL, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_especialidad` int(11) NOT NULL,
  `nombre_especialidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_especialidad`, `nombre_especialidad`) VALUES
(1, 'Cirugía'),
(2, 'Dermatología'),
(3, 'Cardiología'),
(4, 'Neurología'),
(5, 'Oftalmología'),
(6, 'Oncología'),
(7, 'Ortopedia'),
(8, 'Odontología'),
(9, 'Endocrinología'),
(10, 'Gastroenterología'),
(11, 'Nefrología'),
(12, 'Urología'),
(13, 'Ginecología'),
(14, 'Obstetricia'),
(15, 'Pediatria'),
(16, 'Anestesiología'),
(17, 'Vacunas'),
(19, 'Guardia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(7) NOT NULL,
  `referencia_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `referencia_estado`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'eliminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiales`
--

CREATE TABLE `historiales` (
  `id_historial` int(11) NOT NULL,
  `fk_id_cliente` int(7) NOT NULL,
  `fk_id_especialista` int(7) NOT NULL,
  `fk_id_turno` int(7) NOT NULL,
  `fk_id_mascota` int(7) NOT NULL,
  `conclusiones` longtext NOT NULL,
  `fk_fecha_turno` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(7) NOT NULL,
  `nombre_localidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `nombre_localidad`) VALUES
(1, 'Agronomía'),
(2, 'Almagro'),
(3, 'Balvanera'),
(4, 'Barracas'),
(5, 'Belgrano'),
(6, 'Boedo'),
(7, 'Caballito'),
(8, 'Chacarita'),
(9, 'Coghlan'),
(10, 'Colegiales'),
(11, 'Constitución'),
(12, 'Flores'),
(13, 'Floresta'),
(14, 'La Paternal'),
(15, 'Liniers'),
(16, 'Mataderos'),
(17, 'Monserrat'),
(18, 'Monte Castro'),
(19, 'Nueva Pompeya'),
(20, 'Núñez'),
(21, 'Palermo'),
(22, 'Parque Avellaneda'),
(23, 'Parque Chacabuco'),
(24, 'Parque Patricios'),
(26, 'Recoleta'),
(27, 'Retiro'),
(28, 'Saavedra'),
(29, 'San Cristóbal'),
(30, 'San Nicolás');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(7) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `tamaño` varchar(50) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `fk_id_cliente` int(7) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `nombre`, `raza`, `tamaño`, `especie`, `fecha`, `fk_id_cliente`) VALUES
(1, 'bobby', 'canimo', 'medio', '', '0000-00-00', 0),
(2, 'Michi1', 'Felino', 'Medio', '', '0000-00-00', 0),
(3, 'boby', 'gato', 'chico', 'felino', '0000-00-00', 0),
(4, 'Fufu', 'Pastor Aleman', 'Grande', 'Canino', '0000-00-00', 0),
(5, 'fufu', 'caniche', 'chico', 'canino', '0000-00-00', 418),
(6, 'boby', 'Pitbul', 'pequeño', 'Canino', '2015-10-16', 414),
(7, 'Sombra', 'Siames', 'mediano', 'Felino', '2019-01-18', 414),
(8, 'Rufus', 'chiguagua', 'chico', 'Camino', '2021-06-24', 414),
(11, 'eduardo', 'siames', 'Chico', 'Canino', '2023-11-17', 418),
(13, 'Fufu', 'Caniche', 'Chico', 'Canino', '2023-11-14', 427);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_usurio` int(7) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_usurio`, `tipo_usuario`) VALUES
(1, 'administrador'),
(2, 'especialista'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(7) NOT NULL,
  `motivo_turno` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `fk_mascota` int(7) NOT NULL,
  `fk_id_cliente` int(7) NOT NULL,
  `fk_id_especialista` int(7) NOT NULL,
  `Observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `motivo_turno`, `fecha`, `fk_mascota`, `fk_id_cliente`, `fk_id_especialista`, `Observaciones`) VALUES
(8, 'Guardia', '2023-11-24', 13, 427, 422, 'nada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `historiales`
--
ALTER TABLE `historiales`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`),
  ADD KEY `id_2` (`fk_id_cliente`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_usurio`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historiales`
--
ALTER TABLE `historiales`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_usurio` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
