-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2021 a las 16:10:39
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_com350dietas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL,
  `id_tipoAlimentos` int(11) NOT NULL,
  `calorias` float(6,2) NOT NULL DEFAULT 0.00,
  `grasas` float(6,2) NOT NULL DEFAULT 0.00,
  `proteinas` float(6,2) NOT NULL DEFAULT 0.00,
  `carbohidratos` float(6,2) NOT NULL DEFAULT 0.00,
  `colesterol` float(6,2) NOT NULL DEFAULT 0.00,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `id_tipoAlimentos`, `calorias`, `grasas`, `proteinas`, `carbohidratos`, `colesterol`, `nombre`) VALUES
(1, 7, 8.84, 1.00, 0.00, 0.00, 0.00, 'aceite de girasol'),
(2, 7, 8.84, 1.00, 0.00, 0.00, 0.00, 'aceite de maiz'),
(3, 7, 7.17, 0.81, 0.01, 0.00, 2.15, 'mantequilla con sal'),
(4, 7, 7.17, 0.81, 0.00, 0.01, 0.00, 'margarina de maiz'),
(5, 9, 0.10, 0.00, 0.10, 0.00, 0.00, 'agua de grifo'),
(6, 9, 0.20, 0.00, 0.20, 0.50, 0.00, 'agua mineral'),
(7, 9, 3.15, 0.00, 0.12, 0.00, 0.76, 'cafe'),
(8, 9, 2.18, 0.00, 0.50, 0.00, 0.00, 'te'),
(9, 8, 3.00, 0.00, 0.00, 0.00, 0.00, 'aniz'),
(10, 8, 5.00, 0.00, 0.00, 1.00, 0.00, 'sodas'),
(11, 8, 4.00, 0.00, 0.00, 1.00, 0.00, 'sidra dulce'),
(12, 8, 2.00, 0.00, 0.00, 0.50, 0.00, 'limonada'),
(13, 2, 1.80, 0.10, 0.20, 0.00, 0.70, 'res'),
(14, 2, 1.21, 0.04, 0.21, 0.00, 0.87, 'pollo'),
(15, 2, 2.90, 0.25, 0.16, 0.00, 0.72, 'cerdo'),
(16, 2, 1.62, 0.08, 0.22, 0.00, 0.65, 'conejo'),
(17, 5, 2.07, 0.16, 0.02, 0.05, 0.00, 'palta'),
(18, 5, 0.36, 0.01, 0.01, 0.07, 0.00, 'frutilla'),
(19, 5, 0.57, 0.00, 0.01, 0.12, 0.00, 'mango'),
(20, 5, 0.52, 0.04, 0.03, 0.12, 0.00, 'manzana'),
(21, 4, 0.33, 0.01, 0.02, 0.05, 0.00, 'acelga'),
(22, 4, 0.32, 0.01, 0.03, 0.04, 0.00, 'espinacas'),
(23, 4, 0.18, 0.02, 0.08, 0.02, 0.00, 'lechuga'),
(24, 4, 0.26, 0.00, 0.02, 0.04, 0.00, 'arveja'),
(25, 1, 0.68, 0.04, 0.04, 0.05, 0.14, 'leche'),
(26, 1, 0.45, 0.01, 0.04, 0.05, 0.08, 'yogurt'),
(27, 1, 2.04, 0.10, 0.05, 0.25, 0.21, 'helados'),
(28, 1, 3.49, 0.25, 0.29, 0.02, 0.92, 'queso'),
(29, 6, 5.27, 0.32, 0.07, 0.56, 0.00, 'spagueti'),
(30, 6, 4.36, 0.14, 0.07, 0.74, 0.00, 'galletas'),
(31, 6, 4.69, 0.22, 0.06, 0.66, 1.30, 'madalenas'),
(33, 3, 4.22, 0.18, 0.35, 0.30, 0.00, 'soja'),
(34, 3, 3.36, 0.02, 0.24, 0.56, 0.00, 'lenteja'),
(35, 3, 6.60, 0.60, 0.15, 0.15, 0.00, 'nuez'),
(36, 3, 6.20, 0.54, 0.20, 0.17, 0.00, 'almendra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) DEFAULT NULL,
  `nombres` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(15) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `nivel` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre_completo`, `nombres`, `apellidos`, `celular`, `correo`, `contrasena`, `sexo`, `peso`, `altura`, `fecha_creacion`, `nivel`) VALUES
(1, 'user1 acebey', 'user1', 'acebey', '77', 'user1@gmail.com', '123', 'M', 64, 62, '2021-10-12', '0'),
(2, 'y', 'hernan 123', 'acebey ossio', '30', 'qwe@mal.com', '12345678', 'F', 15, 98, '2021-10-12', '0'),
(3, NULL, 'mul', 'Dolor laboris dolore', '69', 'pycafu@mailinat', 'Pa$$w0rd!', 'F', 100, 24, '2021-10-12', '0'),
(4, 'alexy', 'alexy sdenka', 'taboada', '5', 'alexy@mailinato', '12345678', 'F', 7, 87, '2021-10-12', '0'),
(5, 'pipo luu', '123213', 'luu', '96', 'daxisiq@mailina', 'Pa$$w0rd!', 'F', 69, 42, '2021-10-13', '0'),
(6, 'hernan acebey', 'hernan', 'acebey', '123456', 'h@gmail.com', '12', 'M', 60, 150, '2021-10-25', '0'),
(7, NULL, 'Qui sed atque volupt', 'Quam obcaecati cupid', '38', 'rymewihusi@mail', 'Pa$$w0rd!', 'M', 39, 3, '2021-10-26', '0'),
(9, NULL, 'Et id officiis nulla', 'Aliquam non aut duis', '95', 'bohote@mailinat', 'Pa$$w0rd!', 'M', 38, 73, '2021-11-03', '0'),
(10, NULL, 'Non corrupti vel es', 'Dolor debitis sint a', '99', 'meroki@mailinat', 'Pa$$w0rd!', 'M', 82, 39, '2021-11-03', '0'),
(11, 'In ', 'In ', 'Illo', '21', 'wizowanohe@mail', 'Pa$$w0rd!', 'F', 5, 15, '2021-11-03', '0'),
(12, NULL, 'Ullam occaecat velit', 'Cupiditate ad omnis ', '18', 'fykoliryx@maili', 'Pa$$w0rd!', 'F', 41, 58, '2021-11-03', '0'),
(13, NULL, 'Debitis ad neque in ', 'Ad aut non ea cumque', '68', 'fuxadeh@mailina', 'Pa$$w0rd!', 'M', 96, 22, '2021-11-03', '0'),
(14, NULL, 'Rerum est corporis ', 'Enim esse eum deseru', '54', 'donipahod@maili', 'Pa$$w0rd!', 'M', 10, 44, '2021-11-03', '0'),
(15, NULL, 'Cumque aliqua Nulla', 'Repudiandae unde cup', '77', 'fevypur@mailina', 'Pa$$w0rd!', 'F', 28, 79, '2021-11-10', '0'),
(16, NULL, 'Cumque aliqua Nulla', 'Repudiandae unde cup', '77', 'fevypur@mailina', 'Pa$$w0rd!', 'F', 28, 79, '2021-11-10', '0'),
(17, 'martin andres acebey laime', 'Martin', 'Acebey', '132', 'martin@martin.c', '123', 'M', 64, 163, '2021-11-14', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_pago`
--

CREATE TABLE `plan_pago` (
  `id` int(11) NOT NULL,
  `mensual` int(11) NOT NULL,
  `anual` int(11) NOT NULL,
  `quincenal` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plan_pago`
--

INSERT INTO `plan_pago` (`id`, `mensual`, `anual`, `quincenal`, `precio`, `duracion`, `descripcion`) VALUES
(1, 40, 400, 35, 300, 2, 'Por esta semana, tenemos la oferta de todo un año por tan solo 300bs, aproveche, valido hasta dos semanas'),
(2, 12, 14, 15, 12, 15, '17'),
(3, 12, 14, 15, 12, 15, '17'),
(4, 12, 14, 16, 13, 15, 'gdf'),
(5, 12, 15, 17, 13, 16, '20'),
(6, 30, 400, 40, 17, 1, 'Descuento por una semana'),
(7, 45, 400, 30, 12, 1, 'Semana libre'),
(8, 60, 500, 38, 13, 8, 'Descuent'),
(9, 13, 8, 0, 12, 15, 'al'),
(10, 30, 80, 20, 12, 1, 'hay mucho'),
(11, 30, 80, 20, 12, 1, 'hay mucho'),
(12, 30, 80, 20, 12, 1, 'mucho'),
(13, 30, 80, 20, 12, 1, 'por una semana'),
(14, 40, 80, 35, 12, 2, 'hola'),
(15, 47, 87, 37, 12, 2, 'hola'),
(16, 44, 88, 33, 12, 3, 'sde'),
(17, 44, 88, 35, 12, 1, 'sda'),
(18, 46, 86, 36, 15, 2, 'da'),
(19, 46, 67, 34, 12, 3, 'asf'),
(20, 78, 89, 67, 2, 5, 'hfgf'),
(21, 67, 78, 56, 2, 4, 'hgj'),
(22, 67, 78, 56, 2, 4, 'hgj'),
(23, 563, 312, 47, 22, 21, 'dfgdsgfhjk,mnhbvcx'),
(24, 0, 0, 0, 0, 0, ''),
(25, 55, 5, 5, 5, 5, '5'),
(26, 90, 900, 800, 91, 92, '93'),
(27, 5, 5, 5, 6, 6, '6'),
(28, 5, 5, 5, 6, 6, '6'),
(29, 444, 43, 44, 41, 423, '43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_alimento`
--

CREATE TABLE `registro_alimento` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 0,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `id_alimentos` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_alimento`
--

INSERT INTO `registro_alimento` (`id`, `cantidad`, `fecha_creacion`, `id_alimentos`, `Id_cliente`) VALUES
(1, 16, '2021-10-12', 1, 2),
(2, 78, '2021-10-12', 2, 2),
(3, 12, '2021-10-12', 1, 4),
(4, 4, '2021-10-13', 2, 5),
(5, 12, '2021-10-13', 4, 5),
(6, 12, '2021-10-13', 4, 5),
(9, 10, '2021-11-03', 13, 13),
(10, 10, '2021-11-03', 18, 14),
(11, 10, '2021-11-03', 24, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_alimentos`
--

CREATE TABLE `tipo_alimentos` (
  `id` int(11) NOT NULL,
  `nombre_alimento` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_alimentos`
--

INSERT INTO `tipo_alimentos` (`id`, `nombre_alimento`) VALUES
(1, 'lacteos'),
(2, 'carnes, huevos y pesacados'),
(3, 'tuberculos, legumbres y frutos secos'),
(4, 'hortalizas, verduras'),
(5, 'frutas'),
(6, 'pan, pasta, azucar y dulces'),
(7, 'aceites y grasas'),
(8, 'agua, bebidas no alcoholicas'),
(9, 'aguas minerales y bebidas caloricas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `id_profesional` int(11) NOT NULL,
  `tipo_tip` enum('P','A') NOT NULL DEFAULT 'P',
  `tip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id`, `id_profesional`, `tipo_tip`, `tip`) VALUES
(1, 1, 'P', 'Occaecat quo error a'),
(2, 1, 'A', 'Aspernatur doloribus'),
(3, 1, 'A', 'Dolorem ipsa explic'),
(5, 1, 'P', 'Laborum Rem consequ'),
(6, 1, 'A', '44\n5'),
(7, 1, 'A', '44\n5'),
(8, 1, 'A', 'mi tip martin'),
(18, 15, 'P', 'Ex non ut quo delect'),
(19, 15, 'P', 'Ex non ut quo delect'),
(20, 15, 'A', 'my 3er tip');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas_pagina`
--

CREATE TABLE `visitas_pagina` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visitas_pagina`
--

INSERT INTO `visitas_pagina` (`id`, `id_cliente`, `fecha`) VALUES
(1, 1, '2021-11-10'),
(2, 1, '2021-11-10'),
(3, 2, '2021-11-10'),
(4, 2, '2021-11-10'),
(5, 3, '2021-11-09'),
(6, 1, '2021-11-10'),
(7, 8, '2021-11-10'),
(8, 2, '2021-11-10'),
(9, 0, '2021-11-14'),
(10, 18, '2021-11-14'),
(11, 2, '2021-11-14'),
(12, 4, '2021-11-14'),
(13, 4, '2021-11-14'),
(14, 4, '2021-11-14'),
(15, 4, '2021-11-14'),
(16, 6, '2021-11-14'),
(17, 0, '2021-11-14'),
(18, 0, '2021-11-14'),
(19, 0, '2021-11-14'),
(20, 0, '2021-11-14'),
(21, 0, '2021-11-14'),
(22, 0, '2021-11-14'),
(23, 6, '2021-11-14'),
(24, 6, '2021-11-14'),
(25, 6, '2021-11-14'),
(26, 6, '2021-11-14'),
(27, 0, '2021-11-14'),
(28, 8, '2021-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_cv`
--

CREATE TABLE `_cv` (
  `id` int(11) NOT NULL,
  `perfil_profesional` text NOT NULL,
  `experiencia_laboral` text NOT NULL,
  `curso` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `nacionalidad` text NOT NULL,
  `colegio` text NOT NULL,
  `universidad` text NOT NULL,
  `titulo` text NOT NULL,
  `registro_profesional` text NOT NULL,
  `idioma` text NOT NULL,
  `ci` text NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `_cv`
--

INSERT INTO `_cv` (`id`, `perfil_profesional`, `experiencia_laboral`, `curso`, `nombre`, `apellido`, `nacionalidad`, `colegio`, `universidad`, `titulo`, `registro_profesional`, `idioma`, `ci`, `edad`) VALUES
(1, 'mucho', 'demasia', '6to', 'ciro', 'perez', 'boli', 'inma', 'usfx', 'doc', '123', 'ingles', '90', 34),
(2, 'asdf', 'jh', 'qwe', 'Carlos', 'Montellano', 'qwe', 'nb', 'c', 'd', 'v', 'dv', '9021156', 34),
(3, 'asdff', 'sdxc', 'axc', 'Carlos', 'Montellano', '1231', 'sad', 'fsd', 'ghf', 'adf', 'd', '9021156', 34),
(4, 'qwer', 'zx', 'xc', 'Carlos', 'Montellano', '2423', 'asd', 'asf', 'asf', 'df', 'df', '9021156', 56),
(5, 'asd', 'sd', 'fsd', 'Carlos', 'Montellano', 'asdaa', 'dfd', 'dfd', 'v', 'f', 'fgd', '9021156', 2),
(6, 'asd', 'sd', 'fsd', 'Carlos', 'Montellano', 'asdaa', 'dfd', 'dfd', 'v', 'f', 'fgd', '9021156', 2),
(7, 'asf', 'sfsd', 'fsd', 'carlos', 'Montellano', 'asda', 'fgd', 'ngf', 'werty', 'bgf', 'sgffd', '9021156', 12),
(8, 'Quasi necessitatibus', 'Eaque omnis neque co', 'Pariatur Ipsa do c', 'In nulla nobis dicta', 'Et ipsum aliquip sun', 'Nostrum facere dolor', 'Debitis reiciendis m', 'Vero praesentium sun', 'Quasi sunt aut incid', 'Eveniet duis vitae ', 'Ut eiusmod cupiditat', '13', 67),
(9, 'Et cillum excepturi ', 'Non fugiat est esse ', 'Sapiente sed a paria', 'Jose ', 'Ibarra paz', 'Libero voluptatem am', 'Anim quia eum laboru', 'Dolore et quas magna', 'Illum perspiciatis', 'Eius sunt qui suscip', 'Deserunt sunt magna', '75', 54),
(10, '', '', '', '', '', '', '', '', '', '', '', '', 0),
(11, 'Rem et consequatur ', 'Ullam eum commodi mi', 'Rerum voluptatem Cu', 'Earum atque magnam q', 'Voluptas sint culpa ', 'Dolorem excepteur in', 'Voluptatem et repreh', 'Nulla et delectus i', 'Quod quibusdam obcae', 'Enim aliquip nostrud', 'Nam debitis proident', '19', 58),
(12, 'Nulla ut ea mollitia', 'Omnis ducimus ut co', 'Dolor odit recusanda', 'Officia', 'Incidunt nostrud oc', 'Explicabo Laborum u', 'Ut aut voluptas pari', 'Cupidatat dolore vol', 'Velit voluptatum in ', 'Aut eos sit dolorem', 'Eiusmod nisi est nem', '67', 61),
(13, 'Reiciendis ipsum lib', 'Incididunt culpa sed', 'Numquam maxime omnis', 'Ut ', 'Proident ', 'Ut minus dolor aut m', 'Excepteur fuga Ipsu', 'Et ', 'Minima autem consect', 'A accusamus', 'Consequatur Neque s', '8', 61),
(14, 'programador', '45', 'todos', 'martin 132', 'acebey', 'aqui', 'montesorri', 'usfx', 'inge', '1234', 'todo', '132456', 20),
(15, 'designer web', '4', 'todos', 'alexy sdenka', 'taboada', 'aqui', 'alla', 'usfx', 'todos', '789', 'todos', '4565', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipoAlimentos` (`id_tipoAlimentos`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `plan_pago`
--
ALTER TABLE `plan_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_alimento`
--
ALTER TABLE `registro_alimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alimentos` (`id_alimentos`,`Id_cliente`),
  ADD KEY `id_alimentos_2` (`id_alimentos`,`Id_cliente`),
  ADD KEY `Id_cliente` (`Id_cliente`);

--
-- Indices de la tabla `tipo_alimentos`
--
ALTER TABLE `tipo_alimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_profesional` (`id_profesional`);

--
-- Indices de la tabla `visitas_pagina`
--
ALTER TABLE `visitas_pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `_cv`
--
ALTER TABLE `_cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `plan_pago`
--
ALTER TABLE `plan_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `registro_alimento`
--
ALTER TABLE `registro_alimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipo_alimentos`
--
ALTER TABLE `tipo_alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `visitas_pagina`
--
ALTER TABLE `visitas_pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `_cv`
--
ALTER TABLE `_cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD CONSTRAINT `alimentos_ibfk_1` FOREIGN KEY (`id_tipoAlimentos`) REFERENCES `tipo_alimentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro_alimento`
--
ALTER TABLE `registro_alimento`
  ADD CONSTRAINT `registro_alimento_ibfk_1` FOREIGN KEY (`Id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_alimento_ibfk_2` FOREIGN KEY (`id_alimentos`) REFERENCES `alimentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tips`
--
ALTER TABLE `tips`
  ADD CONSTRAINT `tips_ibfk_1` FOREIGN KEY (`id_profesional`) REFERENCES `_cv` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
