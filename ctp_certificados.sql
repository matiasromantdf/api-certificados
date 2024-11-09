-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2024 a las 14:19:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ctp_certificados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` int(8) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `dni`, `created_at`, `updated_at`) VALUES
(1, 'Belinda', 'Verbo', 94770994, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Aylen', 'Impa', 47268172, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Claribel', 'Vidal', 46809863, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sandi', 'Almendras', 47811590, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'matias', 'roman', 36516516, '2024-11-08 23:00:45', '2024-11-08 23:00:45'),
(6, 'juan alberto', 'perez', 51515, '2024-11-08 23:01:25', '2024-11-08 23:01:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_capacidades`
--

CREATE TABLE `alumnos_capacidades` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `capacidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos_capacidades`
--

INSERT INTO `alumnos_capacidades` (`id`, `alumno_id`, `capacidad_id`) VALUES
(1, 5, 1),
(2, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidades`
--

CREATE TABLE `capacidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `capacidades`
--

INSERT INTO `capacidades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Obtener, interpretar y procesar información oral y escrita', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Realizar la búsqueda de información utilizando diversidad de fuentes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Analizar e intterpretar catalogos, informes y/o publicaiones sobre intrumentos, herramientas y equipos, con el objetivo de utilizarlos en tareas de diagnóstico, mantenimiento y/o reparación de componentes específicos del sistema eléctrico del automotor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Comprender el principio de funcionamiento de los motores de combustión interna e identificar las características y funciones de sus componentes y sistemas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Comprender el principio e funcionamiento del sistema electrico del automotor y sus circuitos auxiliares', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Identificar los componentes específicos del sistema electrico e interpretar sus funciones', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Interpretar planos y circuitos electricos Simbologia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, ' Interpretar las inquietudes y necesidades del cliente relacionando la información obtenida con la situación actual del vehículo y el entorno', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Conocer y aplicar estrategias de atención al cliente', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Administrar la documentación comercial del vehículo, así como la documentación de las tareas diagnostico, mantenimiento y reparación', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Gestionar la adquisición de insumos y su almacenamiento', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Aplicar medidad de prevención de riesgo vinculados con la seguridad del operario, el equipamento, el herrametal y el vehículo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Organizar el espacio de trabajo para los procesos del diagnostico, mantenimiento y/o reparación, disponiendo del harramental y del equipamiento deacuerdo con el servicio a realizar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Interpretar, comparrar y controlar valores de acuerdo a parametros obtenidos por medición o pruebas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Formular hipotesis de falla interpretando: signos de mal funcionamiento y valores de mediciones confrontables con parametros específicos de la órden de trabajo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, ' Efectuar procedimientos de diagnóstico, mantenimiento y/o reparación de componentes electricos, considerando las especificaciones de la órden de trabajo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Verificar el funcionamiento del istema electrico vehicular mediante instrumentos de control', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Evaluar la calidad de los servicios profesionales brindados', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Registrar las tareas realizadas y sus resultados', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Gestión comercial impositiva-administrativa', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `alumnos_capacidades`
--
ALTER TABLE `alumnos_capacidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `capacidades`
--
ALTER TABLE `capacidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `alumnos_capacidades`
--
ALTER TABLE `alumnos_capacidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `capacidades`
--
ALTER TABLE `capacidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
