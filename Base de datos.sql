-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2024 a las 09:08:37
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produc_chat`
--
CREATE DATABASE IF NOT EXISTS `produc_chat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `produc_chat`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `cuenta` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `cuenta`, `contrasena`, `link`) VALUES
(1, 'ventas@produccionesleon.com', 'Colombia2024?', 'Instagram'),
(10, 'ventas@produccionesleon.com', 'Colombia2024?', 'Faceboock'),
(11, 'produccionesleoncompania@gmail.com', 'colombia2024*', 'Gmail [ventas]'),
(12, 'produc', 'SoldadoLeon2024*', 'Cpanel www.produccionesleon.com/cpanel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `message` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `militar`
--

CREATE TABLE `militar` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categorias` varchar(255) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `imagen3` varchar(255) DEFAULT NULL,
  `imagen4` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `tipo` varchar(100) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `precio` text,
  `precio2` text,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `militar`
--

INSERT INTO `militar` (`id_producto`, `nombre`, `categorias`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `descripcion`, `tipo`, `lugar`, `precio`, `precio2`, `estado`) VALUES
(16, 'Bolso militar, Bolsa de Viaje o tula', 'bolsos', '/1pagina militar/sitios/productoMilitar/bolso (3).png', '/1pagina militar/sitios/productoMilitar/bolso (3).png', '/1pagina militar/sitios/productoMilitar/bolso (4).png', '/1pagina militar/sitios/productoMilitar/bolso (1).png', '\"\"\"Esta gran bolsa de deporte militar estÃ¡ hecha de tela de poliÃ©ster 600D resistente con cremallera resistente n.Âº 10 y hebillas de calidad en toda la bolsa para su uso en condiciones difÃ­ciles. Ideal como bolsa de deporte, bolsa de despliegue, bolsa de carga tÃ¡ctica, bolsa de carga, bolsa de viaje. para hombres, etc...\r\n\r\nEsta enorme bolsa de viaje de estilo militar puede satisfacer todas sus necesidades de viajes, deportes o actividades al aire libre. Un compartimento principal de carga superior con cremallera y 6 bolsillos externos para un acceso rÃ¡pido. El compartimento principal es de aproximadamente 82L. 6 bolsillos exteriores aproximadamente 6 L. Dimensiones totales: 94 cm de ancho x 38 cm de profundidad x 28 cm de altura.\r\n\r\nLas asas de transporte estÃ¡n hechas de todas las correas resistentes de 5 cm o de uso duradero y de transporte cÃ³modo. 2 asas grandes reforzadas en cada lado para transportar y mover cargas pesadas. O dos personas mueven la bolsa pesada agarrando cada mango. Parte inferior de cuero artificial duradera y fÃ¡cil de limpiar con patas de goma.\r\n\r\nCorreas acolchadas extraÃ­bles estilo mochila y panel superior para un transporte cÃ³modo. Cuando las correas estÃ¡n sueltas, mÃ¡s cÃ³modo de usar y llevar como bolsa de deporte.\r\nEsta gran mochila de estilo militar tiene el equilibrio adecuado entre calidad y dinero. En caso de insatisfacciÃ³n, puede devolverlo en cualquier momento.\"\"\r\n\"\r\n', 'Bolso militar', 'Sede Principal', '160.00', '90.00', ''),
(17, 'Pava tÃ¡ctica - Malla CamaleÃ³n ', 'pavas', '/1pagina militar/sitios/productoMilitar/pavas (3).png', '/1pagina militar/sitios/productoMilitar/pavas (3).png', '/1pagina militar/sitios/productoMilitar/pavas (2).png', '/1pagina militar/sitios/productoMilitar/pavas (1).png', 'pava tÃ¡ctica con camuflado camaleÃ³n\r\n', 'pava', 'Sede Principal', NULL, NULL, ''),
(18, 'LÃ¡mpara Led TÃ¡ctica Camuflaje ', 'acesorio', '/1pagina militar/sitios/productoMilitar/lampara (2).png', '/1pagina militar/sitios/productoMilitar/lampara (2).png', '/1pagina militar/sitios/productoMilitar/lampara (1).png', '/1pagina militar/sitios/productoMilitar/lampara (3).png', '\"LÃ¡mpara Led TÃ¡ctica 2000 Lumens Recargable\r\n\r\nMODELO : DT- 808-1M\r\nMATERIAL: AleaciÃ³n de aluminio\r\nMEDIDAS: 9.5 cm largo x 2.5 cm de diÃ¡metro\r\nTipo de carga: baterÃ­a recargable, cable para corriente y auto\r\nModos de Luz: alta, media , baja, estroboscÃ³pica. estroboscÃ³pica media\r\nLuz blanca\r\nA prueba de agua\r\n\"\r\n', 'LÃ¡mpara ', 'Sede Principal', NULL, NULL, ''),
(19, 'Casco Tactico De Asalto Camaleon ', 'casco', '/1pagina militar/sitios/productoMilitar/casco3.png', '/1pagina militar/sitios/productoMilitar/casco3.png', '/1pagina militar/sitios/productoMilitar/casco1.png', '/1pagina militar/sitios/productoMilitar/casco2.png', '\"El casco de asalto rÃ¡pido corto,  es una de las mejores elecciones si lo que busca es un casco ligero para utilizar durante largas sesiones.\r\n\r\n\r\nGracias a sus materiales de construcciÃ³n y a sus revestimientos internos se adaptarÃ¡ perfectamente a su cabeza, es Ãºtil para una gran multitud de actividades como: Airsoft, Paintball, combates, caza o para ir en bicicleta.\r\n\r\n\r\nPero sin duda su objetivo es acompaÃ±ar y servir en operaciones tÃ¡cticas a los policÃ­as y militares porque brindan seguridad y defensa al crÃ¡neo mientras trabajan, ademÃ¡s cuenta con rieles para ubicar sistemas de comunicaciÃ³n y iluminaciÃ³n.\"\r\n', 'casco', 'Sede Principal', NULL, NULL, ''),
(20, 'gorra con Camuflaje camaleon ', 'gorras', '/1pagina militar/sitios/productoMilitar/Sin tÃ­tulo-11.png', '/1pagina militar/sitios/productoMilitar/Sin tÃ­tulo-11.png', '/1pagina militar/sitios/productoMilitar/Sin tÃ­tulo-1.png', '/1pagina militar/sitios/productoMilitar/2.png', 'gorra con Camuflaje camaleon ', 'Gorra', 'Sede Principal', '', '', ''),
(21, 'Chaqueta pixelada tÃ©rmica ', 'busos', '/1pagina militar/sitios/productoMilitar/buso camaleonsss (1).png', '/1pagina militar/sitios/productoMilitar/buso camaleonsss (1).png', '/1pagina militar/sitios/productoMilitar/buso camaleonsss (2).png', '/1pagina militar/sitios/productoMilitar/buso camaleonsss (3).png', '...', 'Chaqueta ', 'Sede Principal', '', '', ''),
(22, 'Bandana tactica negra', 'gorras', '/1pagina militar/sitios/productoMilitar/D_NQ_NP_749994-CBT70534482848_072023-O.png', '/1pagina militar/sitios/productoMilitar/D_NQ_NP_749994-CBT70534482848_072023-O.png', '/1pagina militar/sitios/productoMilitar/538401D.png', '/1pagina militar/sitios/productoMilitar/538401D (1).png', '', 'Bandana', 'Sede Principal', '', '', ''),
(23, 'Gorra negra veterano', 'gorras', '/1pagina militar/sitios/productoMilitar/DSC_0555.png', '/1pagina militar/sitios/productoMilitar/DSC_0555.png', '/1pagina militar/sitios/productoMilitar/gorra veterano estampado (2).png', '/1pagina militar/sitios/productoMilitar/gorra veterano estampado (1).png', 'GORRA NEGRA VETERANO \r\nBORDADOS\r\n\r\n', 'Gorra', 'Sede Principal', '', '', ''),
(24, 'Gorra de Colombia', 'gorras', '/1pagina militar/sitios/productoMilitar/DSC_0548.png', '/1pagina militar/sitios/productoMilitar/DSC_0548.png', '/1pagina militar/sitios/productoMilitar/DSC_0549.png', '/1pagina militar/sitios/productoMilitar/538401D (1).png', 'Gorra negra con estampado de colombia', 'Gorra', 'Sede Principal', '', '', ''),
(25, 'Coderas Negra', 'acesorios', '/1pagina militar/sitios/productoMilitar/protector negro (2).png', '/1pagina militar/sitios/productoMilitar/protector negro (2).png', '/1pagina militar/sitios/productoMilitar/protector negro (3).png', '/1pagina militar/sitios/productoMilitar/protector negro (1).png', 'Rodilleras Tacticas Black', 'Rodilleras ', 'Sede Principal', NULL, NULL, ''),
(26, 'Camibuso de manga larga amarilla', 'camibusos,ropa', '/1pagina militar/sitios/productoMilitar/camisa1amarilla (2).png', '/1pagina militar/sitios/productoMilitar/camisa1amarilla (2).png', '/1pagina militar/sitios/productoMilitar/camisa1amarilla (1).png', '/1pagina militar/sitios/productoMilitar/camisa1amarilla (3).png', 'Camibuso de manga larga ', 'Camibuso', 'Sede Principal', '', '', ''),
(27, 'Camibuso de manga larga negro', 'camibusos', '/1pagina militar/sitios/productoMilitar/negro camisa (1).png', '/1pagina militar/sitios/productoMilitar/negro camisa (1).png', '/1pagina militar/sitios/productoMilitar/negro camisa (3).png', '/1pagina militar/sitios/productoMilitar/camisa3-down.png', '...', 'Camibuso', 'Sede Principal', NULL, NULL, ''),
(28, 'Camibuso de manga larga rojo ', 'camibusos', '/1pagina militar/sitios/productoMilitar/camisa roja  (1).png', '/1pagina militar/sitios/productoMilitar/camisa roja  (1).png', '/1pagina militar/sitios/productoMilitar/camisa roja  (2).png', '/1pagina militar/sitios/productoMilitar/538401D (1).png', '...', 'Camibuso', 'Sede Principal', NULL, NULL, ''),
(29, 'Insignias, Parche militar ', 'acesorios', '/1pagina militar/sitios/productoMilitar/bordado1.png', '/1pagina militar/sitios/productoMilitar/bordado1.png', '/1pagina militar/sitios/productoMilitar/bordado12.png', '/1pagina militar/sitios/productoMilitar/bordado13.png', 'militar', 'Bordado, Parche, Insignia', 'Sede Principal', NULL, NULL, ''),
(30, 'Bota tÃ¡ctica militar negra', 'tennis', '/1pagina militar/sitios/productoMilitar/botas (1).png', '/1pagina militar/sitios/productoMilitar/botas (1).png', '/1pagina militar/sitios/productoMilitar/botas (3).png', '/1pagina militar/sitios/productoMilitar/botas (2).png', '...', 'Botas, Zapatos', 'Sede Principal', NULL, NULL, ''),
(32, 'Carpa campaÃ±a bipersonal', 'acesorios', '/1pagina militar/sitios/productoMilitar/CARPA CAMPAÃ‘A BIPERSONAL_56.png', NULL, '/1pagina militar/sitios/productoMilitar/CARPA CAMPAÃ‘A BIPERSONAL_23.png', '/1pagina militar/sitios/productoMilitar/CARPA CAMPAÃ‘A BIPERSONAL_57.png', 'CARPA CAMPAÃ‘A BIPERSONAL NTMD0019 A5 CAMUFLADO DIGITAL A4\r\n', 'Carpa, Acesorio', 'Sede Principal', '', '', ''),
(33, 'Carpa bipersonal', 'acesorios', '/1pagina militar/sitios/productoMilitar/CARPA BIPERSONAL_30.png', '/1pagina militar/sitios/productoMilitar/CARPA BIPERSONAL_13.png', '/1pagina militar/sitios/productoMilitar/CARPA BIPERSONAL_86.png', '/1pagina militar/sitios/productoMilitar/CARPA BIPERSONAL_69.png', 'CARPA BIPERSONAL TIPO IGLU ETPN-114 VERDE MANZANA', 'Carpa, Acesorio', 'Sede Principal', '', '', ''),
(34, 'Cantimplora plastica', 'acesorios', '/1pagina militar/sitios/productoMilitar/imagen_reducida (3).png', '/1pagina militar/sitios/productoMilitar/imagen_reducida (3).png', '/1pagina militar/sitios/productoMilitar/CANTIMPLORA PLASTICA_14.png', '/1pagina militar/sitios/productoMilitar/CANTIMPLORA PLASTICA_51.png', 'CANTIMPLORA PLASTICA USA VERDE\r\nOLIVA 1 L', 'Acesorio', 'Sede Principal', '', '', ''),
(35, 'Porta cantimplora tipo us camuflado', 'acesorios', '/1pagina militar/sitios/productoMilitar/imagen_reducida (4).png', '/1pagina militar/sitios/productoMilitar/imagen_reducida (4).png', '/1pagina militar/sitios/productoMilitar/imagen_reducida (5).png', '/1pagina militar/sitios/productoMilitar/PORTA CANTIMPLORA TIPO US CAMUFLADO_43.png', 'KIT PORTA CANTIMPLORA TIPO US\r\nCAMUFLADO SELVA GANCHO DE\r\nCARGA PLASTICO', 'Porta Cantimplora, Acesorio', 'Sede Principal', '', '', ''),
(36, 'Bufanda negra', 'acesorios', '/1pagina militar/sitios/productoMilitar/BUFANDA NEGRA_28.png', '/1pagina militar/sitios/productoMilitar/BUFANDA NEGRA_96.png', '/1pagina militar/sitios/productoMilitar/BUFANDA NEGRA_39.png', '/1pagina militar/sitios/productoMilitar/BUFANDA NEGRA_64.png', 'BUFANDA DE LANA NEGRA', 'Bufanda', 'Sede Principal', '', '', ''),
(37, 'bufanda verde oliva', 'acesorios', '/1pagina militar/sitios/productoMilitar/BUFANDA VERDE OLIVA_15.png', '/1pagina militar/sitios/productoMilitar/BUFANDA VERDE OLIVA_43.png', '/1pagina militar/sitios/productoMilitar/BUFANDA VERDE OLIVA_54.png', '/1pagina militar/sitios/productoMilitar/BUFANDA VERDE OLIVA_77.png', 'BUFANDA DE LANA VERDE OLIVA', 'Bufanda', 'Sede Principal', '', '', ''),
(38, 'bandolera camuflado selva', 'acesorios', '/1pagina militar/sitios/productoMilitar/BANDOLERA CAMUFLADO SELVA_78.png', '/1pagina militar/sitios/productoMilitar/BANDOLERA CAMUFLADO SELVA_96.png', '/1pagina militar/sitios/productoMilitar/538401D (1).png', '/1pagina militar/sitios/productoMilitar/BANDOLERA CAMUFLADO SELVA_93.png', 'BANDOLERA TACTICA OFFICIAL\r\nCAMUFLADO DIGITAL SELVA ', 'Bandolera', 'Sede Principal', '', '', ''),
(40, 'Tapa para cantimplora', 'acesorios', '/1pagina militar/sitios/productoMilitar/TAPA PARA CANTIMPLORA_72.png', '/1pagina militar/sitios/productoMilitar/TAPA PARA CANTIMPLORA_51.png', '/1pagina militar/sitios/productoMilitar/TAPA PARA CANTIMPLORA_62.png', '/1pagina militar/sitios/productoMilitar/TAPA PARA CANTIMPLORA_80.png', 'KIT TAPA PARA CANTIMPLORA TIPO\r\nUS VERDE SEQUIA', 'Compremento, Cantimplora', 'Sede Principal', '', '', ''),
(41, 'Camiseta camuflado', 'camisas', '/1pagina militar/sitios/productoMilitar/CAMISETA CAMUFLADO_36.png', '/1pagina militar/sitios/productoMilitar/CAMISETA CAMUFLADO_70.png', '/1pagina militar/sitios/productoMilitar/CAMISETA CAMUFLADO_44.png', '/1pagina militar/sitios/productoMilitar/CAMISETA CAMUFLADO_43.png', 'CAMISETA ALGODON CAMUFLADO\r\nDIGITAL SELVA 4 HOMBRE', 'Camiseta', 'Sede Principal', '', '', ''),
(42, 'Crossbody - Bolso pequeÃ±o camuflado', 'bolsos', '/1pagina militar/sitios/productoMilitar/Crossbody - Bolso pequeÃ±o camuflado_97.png', '/1pagina militar/sitios/productoMilitar/Crossbody - Bolso pequeÃ±o camuflado_16.png', '/1pagina militar/sitios/productoMilitar/cxcdfdfdfdf.png', '/1pagina militar/sitios/productoMilitar/Capa 9.png', '', 'bolso pequeÃ±o', 'Sede Principal', '', '', ''),
(43, 'Libreta militar ', 'acesorios', '/1pagina militar/sitios/productoMilitar/Libreta militar _64.png', '/1pagina militar/sitios/productoMilitar/Libreta militar _84.png', '/1pagina militar/sitios/productoMilitar/Libreta militar _49.png', '/1pagina militar/sitios/productoMilitar/Libreta militar _93.png', 'Libreta militar para anotar y o tener algunos datos ', 'libro', 'Sede Principal', '', '', ''),
(44, 'Crema Repelente De Insectos', 'acesorios', '/1pagina militar/sitios/productoMilitar/Crema Repelente De Insectos_14.png', '/1pagina militar/sitios/productoMilitar/Crema Repelente De Insectos_47.png', '/1pagina militar/sitios/productoMilitar/Crema Repelente De Insectos_76.png', '/1pagina militar/sitios/productoMilitar/Crema Repelente De Insectos_43.png', 'Repelente De Insectos En Crema Larga DuraciÃ³n Pastor 34 Familiar X 57 Gr', 'Crema', 'Sede Principal', '', '', ''),
(45, 'Guantes negro de lana', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes negro de lana_34.png', '/1pagina militar/sitios/productoMilitar/Guantes negro de lana_20.png', '/1pagina militar/sitios/productoMilitar/Guantes negro de lana_95.png', '/1pagina militar/sitios/productoMilitar/Guantes negro de lana_25.png', 'GUANTES NEGROS DE LANA POR DENTRO', 'Guantes', 'Sede Principal', '', '', ''),
(46, 'Guantes de protecciÃ³n - Medio dedo', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes de protecciÃ³n - Medio dedo_15.png', '/1pagina militar/sitios/productoMilitar/Guantes de protecciÃ³n - Medio dedo_35.png', '/1pagina militar/sitios/productoMilitar/Guantes de protecciÃ³n - Medio dedo_92.png', '/1pagina militar/sitios/productoMilitar/Guantes de protecciÃ³n - Medio dedo_18.png', 'Ejercito Guantes de protecciÃ³n de muÃ±eca - Medio dedo', 'Guantes', 'Sede Principal', '', '', ''),
(47, 'Estuche para Cantimplora camaleÃ³n', 'acesorios', '/1pagina militar/sitios/productoMilitar/Estuche para Cantimplora camaleÃ³n_52.png', '/1pagina militar/sitios/productoMilitar/Estuche para Cantimplora camaleÃ³n_65.png', '/1pagina militar/sitios/productoMilitar/Estuche para Cantimplora camaleÃ³n_98.png', '', '', 'Estuche', 'Sede Principal', '', '', 'nuevo'),
(52, 'Estuche cantimplora verde U.S', 'acesorios', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora verde U.S_84.png', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora verde U.S_31.png', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora verde U.S_16.png', '', '', 'Estuche', 'Sede Principal', '', '', ''),
(53, 'Estuche cantimplora naranja U.S', 'acesorios', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora naranja U.S_29.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora naranja U.S_72.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora naranja U.S_17.webp', '', '', 'Estuche', 'Sede Principal', '', '', ''),
(54, 'Estuche cantimplora camuflado U.S', 'acesorios', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado U.S_66.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado U.S_98.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado U.S_99.webp', '', '', 'Estuche', 'Sede Principal', '', '', ''),
(55, 'Estuche cantimplora camuflado verde', 'acesorios', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado verde_75.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado verde_38.webp', '/1pagina militar/sitios/productoMilitar/Estuche cantimplora camuflado verde_57.webp', '', '', 'Estuche', 'Sede Principal', '', '', ''),
(56, 'Mochila mediana negra policia nacional', 'bolsos', '/1pagina militar/sitios/productoMilitar/Mochila mediana negra policia nacional_86.webp', '/1pagina militar/sitios/productoMilitar/Mochila mediana negra policia nacional_99.webp', '/1pagina militar/sitios/productoMilitar/Mochila mediana negra policia nacional_36.webp', '/1pagina militar/sitios/productoMilitar/Mochila mediana negra policia nacional_66.webp', '', 'Mochila', 'Sede Principal', '', '', ''),
(57, 'Porta proveedor para 9mm', 'acesorios', '/1pagina militar/sitios/productoMilitar/Porta proveedor para 9mm_55.webp', '/1pagina militar/sitios/productoMilitar/Porta proveedor para 9mm_16.webp', '/1pagina militar/sitios/productoMilitar/Porta proveedor para 9mm_36.webp', '', '', 'Porta, Acesorio', 'Sede Principal', '', '', ''),
(59, 'Silla TÃ¡ctica Militar', 'rescate', '/1pagina militar/sitios/productoMilitar/Silla TÃ¡ctica Militar_59.webp', '/1pagina militar/sitios/productoMilitar/Silla TÃ¡ctica Militar_70.webp', '/1pagina militar/sitios/productoMilitar/Silla TÃ¡ctica Militar_99.webp', '', 'Silla TÃ¡ctica Militar Base En Hierro Plegable Camping Verde\r\n', 'Silla', 'Sede Principal', '', '', ''),
(60, 'Forro de silla tÃ¡ctica militar', 'rescate', '/1pagina militar/sitios/productoMilitar/Forro de silla tÃ¡ctica militar_35.webp', '/1pagina militar/sitios/productoMilitar/Forro de silla tÃ¡ctica militar_86.webp', '/1pagina militar/sitios/productoMilitar/Forro de silla tÃ¡ctica militar_58.webp', '/1pagina militar/sitios/productoMilitar/Forro de silla tÃ¡ctica militar_19.webp', 'Silla TÃ¡ctica Militar Base En Hierro Plegable Camping Verde\r\n', 'Forro', 'Sede Principal', '', '', ''),
(61, 'Guantes marrones con textura', 'policia', '/1pagina militar/sitios/productoMilitar/Guantes marrones con textura_39.png', '/1pagina militar/sitios/productoMilitar/Guantes marrones con textura_52.png', '/1pagina militar/sitios/productoMilitar/Guantes marrones con textura_98.png', '', '', 'Guantes', 'Sede Principal', '', '', ''),
(62, 'Guantes bullet BT-270 RT', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes bullet BT-270 RT_90.webp', '/1pagina militar/sitios/productoMilitar/Guantes bullet BT-270 RT_69.webp', '/1pagina militar/sitios/productoMilitar/Guantes bullet BT-270 RT_46.webp', '/1pagina militar/sitios/productoMilitar/Guantes bullet BT-270 RT_24.webp', 'GUANTES BULLET BT-270 RT', 'Guantes', 'Sede Principal', '', '', ''),
(63, 'Fosforo impermeable', 'rescate', '/1pagina militar/sitios/productoMilitar/Fosforo impermeable_22.webp', '/1pagina militar/sitios/productoMilitar/Fosforo impermeable_74.webp', '', '', '', 'Foforo', 'Sede Principal', '', '', ''),
(64, 'Candado DQ', 'privada', '/1pagina militar/sitios/productoMilitar/Candado DQ_90.webp', '/1pagina militar/sitios/productoMilitar/Candado DQ_19.webp', '/1pagina militar/sitios/productoMilitar/Candado DQ_89.webp', '', '', 'Candado', 'Sede Principal', '', '', ''),
(65, 'Binoculares tÃ¡cticos', 'policia', '/1pagina militar/sitios/productoMilitar/Binoculares tÃ¡cticos_35.webp', '/1pagina militar/sitios/productoMilitar/Binoculares tÃ¡cticos_70.webp', '/1pagina militar/sitios/productoMilitar/Binoculares tÃ¡cticos_62.webp', '', 'Binoculares TÃ¡cticos Zoom 7 X 50 Con Marcajes Camping', 'Binoculares', 'Sede Principal', '', '', ''),
(66, 'Billetera para kit  de reglamiento', 'policia', '/1pagina militar/sitios/productoMilitar/Billetera para kit  de reglamiento_28.webp', '/1pagina militar/sitios/productoMilitar/Billetera para kit  de reglamiento_96.webp', '/1pagina militar/sitios/productoMilitar/Billetera para kit  de reglamiento_12.webp', '', '', 'Billetera', 'Sede Principal', '', '', ''),
(67, 'Billetera camufrada para kit de reglamiento ', 'policia', '/1pagina militar/sitios/productoMilitar/Billetera camufrada para kit de reglamiento _60.webp', '/1pagina militar/sitios/productoMilitar/Billetera camufrada para kit de reglamiento _13.webp', '/1pagina militar/sitios/productoMilitar/Billetera camufrada para kit de reglamiento _30.webp', '', '', 'Billetera', 'Sede Principal', '', '', ''),
(68, 'Tabano Autodefensa De Aturdimiento Y Linterna', 'privada', '/1pagina militar/sitios/productoMilitar/Tabano Autodefensa De Aturdimiento Y Linterna_88.webp', '/1pagina militar/sitios/productoMilitar/Tabano Autodefensa De Aturdimiento Y Linterna_84.webp', '/1pagina militar/sitios/productoMilitar/Tabano Autodefensa De Aturdimiento Y Linterna_66.webp', '', '', 'Defenza', 'Sede Principal', '', '', ''),
(69, 'Guantes negros ', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes negros _44.webp', '/1pagina militar/sitios/productoMilitar/Guantes negros _36.webp', '/1pagina militar/sitios/productoMilitar/Guantes negros _77.webp', '/1pagina militar/sitios/productoMilitar/Guantes negros _53.webp', '', 'Guantes', 'Sede Principal', '', '', ''),
(70, 'Parche de operador identificativo', 'insignias', '/1pagina militar/sitios/productoMilitar/Parche de operador identificativo_14.webp', '/1pagina militar/sitios/productoMilitar/Parche de operador identificativo_16.webp', '/1pagina militar/sitios/productoMilitar/Parche de operador identificativo_10.webp', '/1pagina militar/sitios/productoMilitar/Parche de operador identificativo_92.webp', 'Parche de operador identificativo personalizado', 'Parche', 'Sede Principal', '', '', ''),
(71, 'Gorra negra con bordado ', 'gorras', '/1pagina militar/sitios/productoMilitar/Gorra negra con bordado _22.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con bordado _86.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con bordado _45.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con bordado _95.webp', '', 'Gorra', 'Sede Principal', '', '', ''),
(72, 'Casco policia militar', 'casco', '/1pagina militar/sitios/productoMilitar/Casco policia militar_51.webp', '/1pagina militar/sitios/productoMilitar/Casco policia militar_13.webp', '/1pagina militar/sitios/productoMilitar/Casco policia militar_60.webp', '/1pagina militar/sitios/productoMilitar/Casco policia militar_81.webp', '', 'Casco', 'Sede Principal', '', '', ''),
(73, 'Casco Sosega Thor', 'casco', '/1pagina militar/sitios/productoMilitar/Casco Sosega Thor_31.webp', '/1pagina militar/sitios/productoMilitar/Casco Sosega Thor_84.webp', '/1pagina militar/sitios/productoMilitar/Casco Sosega Thor_63.webp', '/1pagina militar/sitios/productoMilitar/Casco Sosega Thor_12.webp', '', 'Casco', 'Sede Principal', '', '', ''),
(74, 'Sombrero para el oficiales de ejercito', 'gorras', '/1pagina militar/sitios/productoMilitar/Sombrero para el oficiales de ejercito_24.webp', '/1pagina militar/sitios/productoMilitar/Sombrero para el oficiales de ejercito_21.webp', '/1pagina militar/sitios/productoMilitar/Sombrero para el oficiales de ejercito_47.webp', '/1pagina militar/sitios/productoMilitar/Sombrero para el oficiales de ejercito_49.webp', '', 'Sombrero', 'Sede Principal', '', '', ''),
(75, 'Guantes de lana verdes', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes de lana verdes_87.webp', '/1pagina militar/sitios/productoMilitar/Guantes de lana verdes_42.webp', '/1pagina militar/sitios/productoMilitar/Guantes de lana verdes_40.webp', '', '', 'Guantes', 'Sede Principal', '', '', ''),
(76, 'Vaso de acero para cantimplora', 'policia', '/1pagina militar/sitios/productoMilitar/Vaso de acero para cantimplora_73.webp', '/1pagina militar/sitios/productoMilitar/Vaso de acero para cantimplora_73.webp', '/1pagina militar/sitios/productoMilitar/Vaso de acero para cantimplora_96.webp', '', '', 'Cantimplora, Kit', 'Sede Principal', '', '', ''),
(77, 'Stainless Steel Alcohol Lamp', 'policia', '/1pagina militar/sitios/productoMilitar/Stainless Steel Alcohol Lamp_21.webp', '/1pagina militar/sitios/productoMilitar/Stainless Steel Alcohol Lamp_97.webp', '', '', '', 'Stainless ', 'Sede Principal', '', '', ''),
(78, 'Guantes tactÃ­cos con camuflado', 'acesorios', '/1pagina militar/sitios/productoMilitar/Guantes tactÃ­cos con camuflado_25.webp', '/1pagina militar/sitios/productoMilitar/Guantes tactÃ­cos con camuflado_42.webp', '/1pagina militar/sitios/productoMilitar/Guantes tactÃ­cos con camuflado_73.webp', '', '', 'Guantes', 'Sede Principal', '', '', ''),
(79, 'PasamontaÃ±a balaclava en lana', 'casco', '/1pagina militar/sitios/productoMilitar/PasamontaÃ±a balaclava en lana_54.webp', '/1pagina militar/sitios/productoMilitar/PasamontaÃ±a balaclava en lana_36.webp', '/1pagina militar/sitios/productoMilitar/PasamontaÃ±a balaclava en lana_58.webp', '', '', 'PasamontaÃ±a', 'Sede Principal', '', '', ''),
(80, 'Gorra negra con estampado alcalde', 'gorras', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado alcalde_92.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado alcalde_16.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado alcalde_52.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado alcalde_31.webp', '', 'Gorra', 'Sede Principal', '', '', ''),
(82, 'Gorra negra con estampado policÃ­a', 'gorras', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado policÃ­a_66.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado policÃ­a_50.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado policÃ­a_25.webp', '/1pagina militar/sitios/productoMilitar/Gorra negra con estampado policÃ­a_90.webp', '', 'Gorra', 'Sede Principal', '', '', ''),
(83, 'Diario militar', 'acesorios', '/1pagina militar/sitios/productoMilitar/Diario militar_76.webp', '', '', '', '', 'Libro', 'Sede Principal', '', '', ''),
(84, 'S.S Mug', 'acesorios', '/1pagina militar/sitios/productoMilitar/S.S Mug_26.png', '', '', '', '', 'Acesorio', 'Sede Principal', '', '', ''),
(85, 'kits militares, lonchera para soldados', 'policia', '/1pagina militar/sitios/productoMilitar/kits militares, lonchera para soldados_75.png', '/1pagina militar/sitios/productoMilitar/kits militares, lonchera para soldados_94.png', '/1pagina militar/sitios/productoMilitar/kits militares, lonchera para soldados_40.webp', '', 'ReproducciÃ³n del kit de comedor de un soldado estadounidense de la Segunda Guerra Mundial y la Segunda Guerra Mundial \r\n\r\nJuego de vajilla fabricado con material inoxidable de calidad alimentaria.\r\n\r\nTamaÃ±o exterior 8,6 x 7 x 2,3 pulgadas, peso pesado 500 g\r\nExcelente opciÃ³n para su colecciÃ³n de la Segunda Guerra Mundial, deportes al aire libre, utensilios de cocina, etc.\r\n', 'Kits', 'Sede Principal', '', '', ''),
(86, 'Mini bolso militar', 'boinas', '/1pagina militar/sitios/productoMilitar/Mini bolso militar_61.png', '/1pagina militar/sitios/productoMilitar/Mini bolso militar_85.png', '/1pagina militar/sitios/productoMilitar/Mini bolso militar_63.png', '', '', 'Bolso', 'Sede Principal', '', '', ''),
(87, 'Vaso de acero inoxidable', 'policia', '/1pagina militar/sitios/productoMilitar/Vaso de acero inoxidable_91.webp', '/1pagina militar/sitios/productoMilitar/Vaso de acero inoxidable_63.webp', '', '', 'Vaso de acero inoxidable, Juego de vasos ', 'Acesorio', 'Sede Principal', '', '', ''),
(88, 'Chaleco de seguridad reflectante', 'policia', '/1pagina militar/sitios/productoMilitar/Chaleco de seguridad reflectante_97.webp', '/1pagina militar/sitios/productoMilitar/Chaleco de seguridad reflectante_71.webp', '/1pagina militar/sitios/productoMilitar/Chaleco de seguridad reflectante_41.webp', '', '', 'Chaleco', 'Sede Principal', '', '', ''),
(89, 'Poncho de lluvia con camuflaje militar', 'policia', '/1pagina militar/sitios/productoMilitar/Poncho de lluvia con camuflaje militar_64.webp', '/1pagina militar/sitios/productoMilitar/Poncho de lluvia con camuflaje militar_69.webp', '/1pagina militar/sitios/productoMilitar/Poncho de lluvia con camuflaje militar_78.webp', '/1pagina militar/sitios/productoMilitar/Poncho de lluvia con camuflaje militar_12.webp', 'Poncho de lluvia con camuflaje militar LOOGU, impermeable, con capucha, multiusos, para acampar, cazar, senderismo y pesca', 'Capucha', 'Sede Principal', '', '', ''),
(90, 'Uniforme deportivo militar - chaquta', 'busos', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar - chaquta_37.webp', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar - chaquta_83.webp', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar - chaquta_82.webp', '', '', 'Chaqueta ', 'Sede Principal', '', '', 'nuevo'),
(91, 'Uniforme deportivo militar Dante', 'camisa, ropa', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar_82.webp', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar_81.webp', '/1pagina militar/sitios/productoMilitar/Uniforme deportivo militar_28.webp', '', '', 'Uniforme', 'Sede Principal', '', '', ''),
(92, 'Gorra roja', 'gorras', '/1pagina militar/sitios/productoMilitar/Gorra roja_13.webp', '/1pagina militar/sitios/productoMilitar/Gorra roja_36.webp', '/1pagina militar/sitios/productoMilitar/Gorra roja_94.webp', '/1pagina militar/sitios/productoMilitar/Gorra roja_16.webp', '', 'Gorra', 'Sede Principal', '', '', ''),
(93, 'Camisa azul oscuro', 'camisas,ropa', '/1pagina militar/sitios/productoMilitar/Camisa azul oscuro_46.webp', '/1pagina militar/sitios/productoMilitar/Camisa azul oscuro_76.webp', '/1pagina militar/sitios/productoMilitar/Camisa azul oscuro_14.webp', '', '', 'Camisa', 'Sede Principal', '', '', ''),
(94, 'Chaleco tÃ¡ctico militar', 'policia', '/1pagina militar/sitios/productoMilitar/DSC_0755.webp', '/1pagina militar/sitios/productoMilitar/DSC_0755.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico militar_54.webp', '', '', 'Chaleco', 'Sede Principal', '', '', ''),
(95, 'Chaleco de drill reflectante', 'privada', '/1pagina militar/sitios/productoMilitar/Chaleco de drill reflectante_46.webp', '/1pagina militar/sitios/productoMilitar/Chaleco de drill reflectante_89.webp', '/1pagina militar/sitios/productoMilitar/Chaleco de drill reflectante_81.webp', '', '', 'Chaleco', 'Sede Principal', '', '', ''),
(96, 'Chaleco tÃ¡ctico \"Tank\" verde militar', 'policia', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico \"Tank\" verde militar_71.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico \"Tank\" verde militar_31.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico \"Tank\" verde militar_19.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico \"Tank\" verde militar_45.webp', '', 'Chaleco', 'Sede Principal', '', '', ''),
(97, 'Chaleco tÃ¡ctico de seguridad', 'privada', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico de seguridad_47.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico de seguridad_51.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico de seguridad_46.webp', '/1pagina militar/sitios/productoMilitar/Chaleco tÃ¡ctico de seguridad_77.webp', '', 'Chaleco', 'Sede Principal', '', '', ''),
(98, 'Botas TÃ¡cticas Cremallera Tipo Militar', 'tennis', '/1pagina militar/sitios/productoMilitar/Botas TÃ¡cticas Cremallera Tipo Militar_20.webp', '/1pagina militar/sitios/productoMilitar/Botas TÃ¡cticas Cremallera Tipo Militar_51.webp', '', '', '', 'Botas, Zapatos', 'Sede Principal', '', '', ''),
(99, 'Botas militar - cuero negro', 'tennis', '/1pagina militar/sitios/productoMilitar/Botas militar - cuero negro_84.webp', '/1pagina militar/sitios/productoMilitar/Botas militar - cuero negro_13.webp', '/1pagina militar/sitios/productoMilitar/Botas militar - cuero negro_49.webp', '', 'Negro de cuero autÃ©ntico botas de combate militar', 'Botas, Zapatos', 'Sede Principal', '', '', ''),
(100, 'Botas militares - color negro', 'tennis', '/1pagina militar/sitios/productoMilitar/Botas militares - color negro_77.webp', '/1pagina militar/sitios/productoMilitar/Botas militares - color negro_59.webp', '/1pagina militar/sitios/productoMilitar/Botas militares - color negro_84.webp', '/1pagina militar/sitios/productoMilitar/Botas militares - color negro_19.webp', 'Botas militares para hombre, botas tÃ¡cticas altas de las fuerzas especiales, antideslizantes, resistentes al desgaste, transpirables, botas de combate, color negro \r\n', 'Botas, Zapatos', 'Sede Principal', '', '', ''),
(101, 'Bota tÃ¡ctica militar - Tenis cuero', 'tennis', '/1pagina militar/sitios/productoMilitar/Bota tÃ¡ctica militar - Tenis cuero_64.webp', '/1pagina militar/sitios/productoMilitar/Bota tÃ¡ctica militar - Tenis cuero_54.webp', '/1pagina militar/sitios/productoMilitar/Bota tÃ¡ctica militar - Tenis cuero_79.webp', '/1pagina militar/sitios/productoMilitar/Bota tÃ¡ctica militar - Tenis cuero_11.webp', 'Bota TÃ¡ctica Militar Modelo Tenis Cuero 100% Genuino Black', 'Botas, Zapatos', 'Sede Principal', '', '', 'destacado'),
(102, 'Cartuchera nacional X unidad', 'policia', '/1pagina militar/sitios/productoMilitar/Cartuchera nacional X unidad_31.png', '/1pagina militar/sitios/productoMilitar/Cartuchera nacional X unidad_67.png', '/1pagina militar/sitios/productoMilitar/Cartuchera nacional X unidad_69.webp', '', '', 'Acesorio', 'Sede Principal', '', '', ''),
(103, 'Bolsa multiusos camuflaje', 'policia', '/1pagina militar/sitios/productoMilitar/Bolsa multiusos camuflaje_48.webp', '/1pagina militar/sitios/productoMilitar/Bolsa multiusos camuflaje_36.webp', '/1pagina militar/sitios/productoMilitar/Bolsa multiusos camuflaje_37.webp', '', 'Bolsa multiusos pequeÃ±a Molle con camuflaje digital', 'bolsa', 'Sede Principal', '', '', ''),
(104, 'Molle-Bolsa de recargador tÃ¡ctico', 'policia', '/1pagina militar/sitios/productoMilitar/Molle-Bolsa de recargador tÃ¡ctico, cinturÃ³n de caza, accesorio de cintura, negro, bronceado, verde, bolsas de tiro de herramientas_16.webp', '/1pagina militar/sitios/productoMilitar/Molle-Bolsa de recargador tÃ¡ctico, cinturÃ³n de caza, accesorio de cintura, negro, bronceado, verde, bolsas de tiro de herramientas_85.webp', '/1pagina militar/sitios/productoMilitar/Molle-Bolsa de recargador tÃ¡ctico, cinturÃ³n de caza, accesorio de cintura, negro, bronceado, verde, bolsas de tiro de herramientas_33.webp', '', 'Molle-Bolsa de recargador tÃ¡ctico, cinturÃ³n de caza, accesorio de cintura, negro, bronceado, verde, bolsas de tiro de herramientas', 'bolsa', 'Sede Principal', '', '', ''),
(105, 'Funda de nailon', 'acesorios', '/1pagina militar/sitios/productoMilitar/Funda de nailon_77.webp', '/1pagina militar/sitios/productoMilitar/Funda de nailon_19.webp', '/1pagina militar/sitios/productoMilitar/Funda de nailon_66.webp', '', '', 'Funda', 'Sede Principal', '', '', ''),
(106, 'Pistolera de cinturÃ³n tÃ¡ctico', 'policia', '/1pagina militar/sitios/productoMilitar/Pistolera de cinturÃ³n tÃ¡ctico_57.webp', '/1pagina militar/sitios/productoMilitar/Pistolera de cinturÃ³n tÃ¡ctico_35.webp', '/1pagina militar/sitios/productoMilitar/Pistolera de cinturÃ³n tÃ¡ctico_80.webp', '', 'Pistolera de cinturÃ³n tÃ¡ctico intercambiable derecha e izquierda, pistolera de mano con soporte de ranura para revista, accesorios de caza', 'Pistolera ', 'Sede Principal', '', '', 'destacado'),
(107, 'Bolsa para cargador', 'acesorios', '/1pagina militar/sitios/productoMilitar/Bolsa para cargador_49.webp', '/1pagina militar/sitios/productoMilitar/Bolsa para cargador_24.webp', '/1pagina militar/sitios/productoMilitar/Bolsa para cargador_44.webp', '', '', 'bolsa', 'Sede Principal', '', '', ''),
(108, 'Bolso azul simple', 'bolsos', '/1pagina militar/sitios/productoMilitar/Bolso azul simple_89.webp', '/1pagina militar/sitios/productoMilitar/Bolso azul simple_40.webp', '/1pagina militar/sitios/productoMilitar/Bolso azul simple_75.webp', '/1pagina militar/sitios/productoMilitar/Bolso azul simple_70.webp', '', 'Bolso', 'Sede Principal', '', '', ''),
(109, 'Bolso con camuflado militar', 'bolsos', '/1pagina militar/sitios/productoMilitar/Bolso con camuflado militar_51.webp', '/1pagina militar/sitios/productoMilitar/Bolso con camuflado militar_44.webp', '/1pagina militar/sitios/productoMilitar/Bolso con camuflado militar_72.webp', '/1pagina militar/sitios/productoMilitar/Bolso con camuflado militar_18.webp', '', 'Bolso', 'Sede Principal', '', '', ''),
(110, 'Botas de Hombre negras', 'tennis', '/1pagina militar/sitios/productoMilitar/Botas de Hombre negras_83.webp', '/1pagina militar/sitios/productoMilitar/Botas de Hombre negras_27.webp', '/1pagina militar/sitios/productoMilitar/Botas de Hombre negras_33.webp', '', '', 'Botas, Zapatos', 'Sede Principal', '', '', ''),
(111, 'Gorra blaca de mallas', 'gorras', '/1pagina militar/sitios/productoMilitar/Gorra blaca de mallas_88.webp', '/1pagina militar/sitios/productoMilitar/Gorra blaca de mallas_38.webp', '', '', '', 'Gorra', 'Sede Principal', '', '', ''),
(112, 'Impermeable para moto', 'acesorios', '/1pagina militar/sitios/productoMilitar/Impermeable para moto_30.webp', '/1pagina militar/sitios/productoMilitar/Impermeable para moto_12.webp', '/1pagina militar/sitios/productoMilitar/Impermeable para moto_68.webp', '/1pagina militar/sitios/productoMilitar/Impermeable para moto_88.png', '', 'Impermeable ', 'Sede Principal', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categorias` varchar(255) DEFAULT NULL,
  `imagen1` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `imagen3` varchar(255) DEFAULT NULL,
  `imagen4` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `tipo` varchar(100) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  `precio` text,
  `precio2` text,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `categorias`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `descripcion`, `tipo`, `lugar`, `precio`, `precio2`, `estado`) VALUES
(11, 'Camisa deportiva', 'camisas', '/1pagina civil/sitios/productoCivil/00000 (1).png', '/1pagina civil/sitios/productoCivil/00000 (1).png', '/1pagina civil/sitios/productoCivil/00000 (2).png', '/1pagina civil/sitios/productoCivil/00000 (3).png', 'Camisa personalizada sublimada en tela colmena', 'naranja, camisa', 'Sede Principal', NULL, NULL, 'nuevo'),
(12, 'BalÃ³n FÃºtbol Golty', 'acesorios', '/1pagina civil/sitios/productoCivil/1234567 (2).png', '/1pagina civil/sitios/productoCivil/1234567 (2).png', '/1pagina civil/sitios/productoCivil/1234567 (1).png', '/1pagina civil/sitios/productoCivil/1234567 (1).JPG', 'Fabricado con una cubierta de PU que proporciona una suavidad excepcional al tacto, asegurando una alta resistencia a la abrasiÃ³n. Utiliza la Â¡tecnologÃ­a Thermobonded! para ofrecer ventajas como una mayor estabilidad en la trayectoria, una impermeabilidad superior y una esfericidad total sin pÃ©rdida de aire, lo que lo hace mÃ¡s aerodinÃ¡mico. Su Â¡construcciÃ³n sin costuras! y sellada al calor garantiza una durabilidad excepcional. La parte interna estÃ¡ compuesta por una cÃ¡mara de butilo de dos capas para garantizar la conservaciÃ³n de su forma durante mÃ¡s tiempo. Su diseÃ±o presenta grÃ¡ficos de la marca en varios colores y el logo de Golty estampado, otorgÃ¡ndole un estilo Ãºnico al balÃ³n. TamaÃ±o: #4, Peso: 350 a 400 g, Circunferencia: 63.5 a 66 cm, Rebote: 110 a 135 cm.\r\n\r\n', 'Balon', 'Sede Principal', NULL, NULL, ''),
(14, 'Camiseta deportiva personalizada', 'camisas', '/1pagina civil/sitios/productoCivil/camiseta de boleibol de guardalupe (2).png', '/1pagina civil/sitios/productoCivil/camiseta de boleibol de guardalupe (2).png', '/1pagina civil/sitios/productoCivil/camiseta de boleibol de guardalupe (1).png', '/1pagina civil/sitios/productoCivil/camiseta de boleibol de guardalupe.png', 'Camiseta deportiva personalizada', 'camiseta', 'Sede Principal', NULL, NULL, 'nuevo'),
(15, 'Camisa deportiva verde', 'camisas', '/1pagina civil/sitios/productoCivil/camiseta de fulbol.png', '/1pagina civil/sitios/productoCivil/camiseta de fulbol.png', '/1pagina civil/sitios/productoCivil/f7untitled.png', '/1pagina civil/sitios/productoCivil/7untitled.png', 'Camisa de futbol verde personalizada', 'Camisa', 'Sede Principal', NULL, NULL, ''),
(16, 'Gorra negra', 'gorras', '/1pagina civil/sitios/productoCivil/gorra negra (3).png', '/1pagina civil/sitios/productoCivil/gorra negra (3).png', '/1pagina civil/sitios/productoCivil/gorra negra (1).png', '/1pagina civil/sitios/productoCivil/gorra negra (2).png', 'gorra negra', 'Gorra', 'Sede Principal', NULL, NULL, ''),
(17, 'LINTERNA METALICA  ', 'acesorios', '/1pagina civil/sitios/productoCivil/linterna 2 (2).png', '/1pagina civil/sitios/productoCivil/linterna 2 (2).png', '/1pagina civil/sitios/productoCivil/linterna 2 (1).png', '/1pagina civil/sitios/productoCivil/linterna 2 (3).png', 'LINTERNA METALICA OFFICIAL\r\nTACTICA S.O.S CON ZOOM NEGRA', 'Linterna', 'Sede Principal', NULL, NULL, ''),
(18, 'Camiseta negra de Futbol Colombia 2024', 'camisas', '/1pagina civil/sitios/productoCivil/Camiseta negra de Futbol Colombia 2024_33.png', '/1pagina civil/sitios/productoCivil/Camiseta negra de Futbol Colombia 2024_69.png', '/1pagina civil/sitios/productoCivil/Camiseta negra de Futbol Colombia 2024_73.png', '/1pagina civil/sitios/productoCivil/Camiseta negra de Futbol Colombia 2024_75.png', 'Â¡Celebra el fÃºtbol colombiano con nuestra Camiseta de FÃºtbol Colombia 2024, disponible en nuestra tienda online como una muestra de apoyo y admiraciÃ³n hacia la selecciÃ³n nacional! Esta camiseta no solo es una prenda deportiva; es un sÃ­mbolo de orgullo y pasiÃ³n por el fÃºtbol en Colombia.\r\n\r\nInspirada en el diseÃ±o utilizado por la selecciÃ³n colombiana en el aÃ±o 2024, esta camiseta refleja la esencia y el estilo del equipo nacional. Fabricada con materiales de alta calidad y con atenciÃ³n al detalle, esta camiseta brinda comodidad y estilo para los aficionados que desean lucir los colores de su selecciÃ³n favorita.\r\n\r\nYa sea reviviendo momentos inolvidables en el campo o mostrando apoyo durante los emocionantes encuentros, esta camiseta es una forma Ãºnica de expresar tu amor por el fÃºtbol colombiano. Su inclusiÃ³n en nuestra colecciÃ³n demuestra nuestro compromiso con el deporte y la emociÃ³n de los aficionados de todas las edades.\r\n\r\nÂ¡Hazte con esta camiseta en nuestra tienda online y lleva contigo el espÃ­ritu y la emociÃ³n del fÃºtbol colombiano! Â¡Apoya a tu selecciÃ³n y lleva el orgullo nacional a donde vayas con nuestra Camiseta de FÃºtbol Colombia 2024!', 'Camiseta ', 'Sede Principal', NULL, NULL, 'nuevo'),
(19, 'Camisa amarilla', 'camisas,ropa', '/1pagina civil/sitios/productoCivil/Camisa amarilla_68.png', '/1pagina civil/sitios/productoCivil/Camisa amarilla_86.png', '/1pagina civil/sitios/productoCivil/Camisa amarilla_26.png', '', '', 'Camisa', 'Sede Principal', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'aguerrerosolaez@gmail.com', '4c53ec2b08fd1f0f5c2a3c1f0f8c41e8467ea1fd372177795fc09a042bfe67d6'),
(4, 'produc', '392878efb84a7e79643d9b333fb55a11bf4fffafd89be050d0b2a6bb363ac128');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `militar`
--
ALTER TABLE `militar`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `militar`
--
ALTER TABLE `militar`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
