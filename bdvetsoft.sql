-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 19:32:53
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
(1, 'Juan', 'Pérez', 'clave123', 'Calle 123', 'juan@example.com', 'juanito', 123456789, 1, 2, 5, 1),
(2, 'María', 'González', 'password', 'Avenida 456', 'maria@example.com', 'maria_g', 987654321, 1, 3, NULL, 8),
(3, 'Pedro', 'Sánchez', 'securepass', 'Calle Principal 789', 'pedro@example.com', 'pedrito', 456789123, 1, 2, 12, 3),
(4, 'Luisa', 'Martínez', '123456', 'Carrera 456', 'luisa@example.com', 'luisita', 741852963, 1, 3, NULL, 10),
(5, 'Ana', 'López', 'password123', 'Callejon 890', 'ana@example.com', 'ana_lo', 852369741, 1, 2, 8, 12),
(6, 'Carlos', 'Hernández', 'clave1234', 'Avenida Principal 567', 'carlos@example.com', 'carlitos', 369147258, 1, 3, NULL, 15),
(7, 'Laura', 'Díaz', 'qwerty', 'Calle Secundaria 234', 'laura@example.com', 'laurita', 951753852, 1, 2, 3, 18),
(8, 'Jorge', 'Gómez', 'pass123', 'Boulevard 789', 'jorge@example.com', 'jorge_g', 147258369, 1, 3, NULL, 20),
(9, 'Sofía', 'Ramírez', 'testpass', 'Calle 901', 'sofia@example.com', 'sofi', 258369147, 1, 2, 14, 22),
(10, 'Martín', 'Torres', 'martin123', 'Avenida Central 345', 'martin@example.com', 'martin_t', 369258147, 1, 3, NULL, 25),
(11, 'Fernanda', 'Suárez', 'pass1234', 'Calle Principal 678', 'fernanda@example.com', 'fer_su', 753951852, 1, 2, 6, 28),
(12, 'Diego', 'Jiménez', 'securepassword', 'Boulevard 912', 'diego@example.com', 'dieguito', 159357486, 1, 3, NULL, 30),
(13, 'Valentina', 'García', 'qwerty123', 'Calle 123', 'valentina@example.com', 'vale_g', 753159852, 1, 2, 9, 32),
(14, 'Mateo', 'Pérez', 'password1234', 'Avenida 456', 'mateo@example.com', 'mateo_p', 951753456, 1, 3, NULL, 35),
(15, 'Camila', 'Herrera', 'securepass123', 'Carrera 789', 'camila@example.com', 'cami_h', 357951846, 1, 2, 15, 38),
(16, 'Lucas', 'González', 'lucas123', 'Calle 890', 'lucas@example.com', 'lucas_g', 456123789, 1, 3, NULL, 40),
(17, 'Elena', 'Sánchez', 'pass321', 'Avenida Principal 123', 'elena@example.com', 'elena_s', 852963147, 1, 2, 10, 42),
(18, 'Simón', 'Fernández', 'simonpass', 'Carrera 234', 'simon@example.com', 'simon_f', 369852147, 1, 3, NULL, 45),
(19, 'Isabella', 'Martínez', 'password', 'Boulevard 567', 'isabella@example.com', 'isabella_m', 741258963, 1, 2, 16, 48),
(20, 'Emilio', 'Rodríguez', 'secure123', 'Callejon 890', 'emilio@example.com', 'emilio_r', 258369741, 1, 3, NULL, 50),
(21, 'Abril', 'López', 'pass1234', 'Avenida Principal 456', 'abril@example.com', 'abril_l', 789654123, 1, 2, 11, 52),
(22, 'Ian', 'Hernández', 'ian123', 'Calle 789', 'ian@example.com', 'ian_h', 123456789, 1, 3, NULL, 55),
(23, 'Mía', 'Díaz', 'mia123', 'Boulevard 012', 'mia@example.com', 'mia_d', 987654321, 1, 2, 17, 58),
(24, 'Benjamín', 'Gómez', 'ben123', 'Avenida 345', 'benjamin@example.com', 'benji_g', 654789123, 1, 3, NULL, 60),
(25, 'Emma', 'Ramírez', 'emma123', 'Calle Principal 678', 'emma@example.com', 'emma_r', 123654789, 1, 2, 1, 62),
(26, 'Matías', 'Torres', 'matias123', 'Carrera 901', 'matias@example.com', 'mati_t', 456789123, 1, 3, NULL, 65),
(27, 'Olivia', 'Suárez', 'olivia123', 'Calle 123', 'olivia@example.com', 'olivia_s', 987123654, 1, 2, 18, 68),
(28, 'Felipe', 'Jiménez', 'felipe123', 'Avenida 456', 'felipe@example.com', 'felipe_j', 654987321, 1, 3, NULL, 70),
(29, 'Constanza', 'García', 'constanza123', 'Carrera 789', 'constanza@example.com', 'constan_g', 321654987, 1, 2, 2, 72),
(30, 'Maximiliano', 'Pérez', 'max123', 'Calle 890', 'maximiliano@example.com', 'max_p', 987321654, 1, 3, NULL, 75),
(435, 'Administrador', NULL, '123', NULL, 'admin@gmail.com', 'admin123', NULL, 1, 1, NULL, NULL),
(436, 'Cristian Erik', 'Rios', '123', NULL, 'rios_crist2794@hotmail.com', 'cris123', NULL, NULL, 3, NULL, NULL);

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
(18, 'Guardia');

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
(1, 'Buddy', 'Labrador Retriever', 'Grande', 'Perro', '2023-01-15', 2),
(2, 'Luna', 'Persa', 'Pequeño', 'Gato', '2023-03-20', 4),
(3, 'Rocky', 'Bulldog Francés', 'Mediano', 'Perro', '2023-02-10', 6),
(4, 'Milo', 'Siames', 'Pequeño', 'Gato', '2023-04-05', 8),
(5, 'Coco', 'Chihuahua', 'Pequeño', 'Perro', '2023-06-18', 10),
(6, 'Simba', 'Maine Coon', 'Grande', 'Gato', '2023-08-22', 12),
(7, 'Bella', 'Golden Retriever', 'Grande', 'Perro', '2023-07-11', 14),
(8, 'Max', 'Sphynx', 'Mediano', 'Gato', '2023-09-30', 16),
(9, 'Daisy', 'Dálmata', 'Grande', 'Perro', '2023-11-05', 18),
(10, 'Mia', 'Ragdoll', 'Mediano', 'Gato', '2023-10-02', 20),
(11, 'Bailey', 'Pastor Alemán', 'Grande', 'Perro', '2023-12-25', 22),
(12, 'Oliver', 'British Shorthair', 'Mediano', 'Gato', '2023-11-30', 24),
(13, 'Sophie', 'Bichón Frisé', 'Pequeño', 'Perro', '2023-02-28', 26),
(14, 'Jack', 'Siamés', 'Pequeño', 'Gato', '2023-04-15', 28),
(15, 'Lola', 'Bulldog Inglés', 'Mediano', 'Perro', '2023-07-08', 30),
(16, 'Leo', 'Persa', 'Pequeño', 'Gato', '2023-05-10', 2),
(17, 'Lucy', 'Labrador Retriever', 'Grande', 'Perro', '2023-09-01', 4),
(18, 'Charlie', 'Maine Coon', 'Grande', 'Gato', '2023-10-18', 6),
(19, 'Molly', 'Bulldog Francés', 'Mediano', 'Perro', '2023-11-22', 8),
(20, 'Oscar', 'Sphynx', 'Mediano', 'Gato', '2023-12-10', 10),
(31, 'Lupita', 'Caniche', 'Chico', 'Canino', '2023-11-21', 436);

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
(8, 'Guardia', '2023-11-24', 13, 427, 422, 'nada'),
(10, 'Guardia', '2023-11-21', 13, 427, 422, '-------'),
(11, 'Vacunas', '2023-11-21', 31, 436, 29, '');

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
  MODIFY `id_cliente` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

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
  MODIFY `idMascota` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_usurio` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
