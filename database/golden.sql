-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2019 a las 15:22:44
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `golden`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_hd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `language_id`, `name`, `img`, `img_hd`, `description`, `status`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 1, 'aventura', 'jpg', '', 'Aventura', 'A', 'aventura', NULL, '2019-02-12 21:38:17', '2019-02-12 21:38:17'),
(15, 1, 'mistico', 'jpg', '', 'místico', 'A', 'montana', NULL, '2019-02-19 20:06:20', '2019-02-21 02:54:53'),
(16, 1, 'tradicional', 'jpg', '', 'Tradicional', 'A', 'tradicional', NULL, '2019-02-21 02:55:21', '2019-02-21 02:55:21'),
(17, 1, 'vivencial', 'jpg', '', 'Vivencial', 'A', 'vivencial', NULL, '2019-02-21 02:55:46', '2019-02-21 02:55:46'),
(18, 2, 'adventure', 'jpg', '', 'Adventure', 'A', 'adventure', NULL, '2019-02-27 20:51:00', '2019-02-27 20:51:27'),
(19, 2, 'mystical', 'jpg', '', 'Mystical', 'A', 'mystical', NULL, '2019-02-27 20:53:16', '2019-02-27 20:53:16'),
(20, 2, 'traditional', 'jpg', '', 'Traditional', 'A', 'traditional', NULL, '2019-02-27 20:54:57', '2019-02-27 20:54:57'),
(22, 2, 'experiential', 'jpg', '', 'Experiential', 'A', 'experiential', NULL, '2019-02-27 20:55:36', '2019-02-27 20:55:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories_has_tours`
--

CREATE TABLE `categories_has_tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories_has_tours`
--

INSERT INTO `categories_has_tours` (`id`, `categorie_id`, `tour_id`, `created_at`, `updated_at`) VALUES
(10, 14, 36, NULL, NULL),
(30, 14, 35, NULL, NULL),
(31, 15, 38, NULL, NULL),
(32, 16, 39, NULL, NULL),
(33, 17, 40, NULL, NULL),
(34, 15, 41, NULL, NULL),
(36, 14, 37, NULL, NULL),
(37, 18, 42, NULL, NULL),
(38, 18, 43, NULL, NULL),
(39, 18, 44, NULL, NULL),
(40, 20, 45, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icons`
--

CREATE TABLE `icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `multimedia_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `multimedia_id`, `name`, `path`, `size`, `created_at`, `updated_at`) VALUES
(142, 40, '1549989657.maras-moray.jpg', 'admin/uploads/1549989657.maras-moray.jpg', '167271', '2019-02-12 21:40:57', '2019-02-12 21:40:57'),
(143, 40, '1549989657.marasmoray-cusco.jpg', 'admin/uploads/1549989657.marasmoray-cusco.jpg', '166168', '2019-02-12 21:40:57', '2019-02-12 21:40:57'),
(144, 40, '1549989657.tour-bicicleta-maras-moray.jpg', 'admin/uploads/1549989657.tour-bicicleta-maras-moray.jpg', '170896', '2019-02-12 21:40:57', '2019-02-12 21:40:57'),
(145, 41, '1550499209.bungee-cusco.jpg', 'admin/uploads/1550499209.bungee-cusco.jpg', '102289', '2019-02-18 19:13:29', '2019-02-18 19:13:29'),
(146, 41, '1550499209.bungee-jump.jpg', 'admin/uploads/1550499209.bungee-jump.jpg', '183457', '2019-02-18 19:13:29', '2019-02-18 19:13:29'),
(147, 41, '1550499209.jumping-cusco.jpg', 'admin/uploads/1550499209.jumping-cusco.jpg', '289292', '2019-02-18 19:13:29', '2019-02-18 19:13:29'),
(148, 40, '1550527680.maras-moray.jpg', 'admin/uploads/1550527680.maras-moray.jpg', '167271', '2019-02-19 03:08:00', '2019-02-19 03:08:00'),
(149, 40, '1550527686.maras-moray.jpg', 'admin/uploads/1550527686.maras-moray.jpg', '167271', '2019-02-19 03:08:06', '2019-02-19 03:08:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img`
--

CREATE TABLE `img` (
  `id` int(10) UNSIGNED NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itineraries`
--

CREATE TABLE `itineraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `day` int(11) NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `altitud` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitud` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitud` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `itineraries`
--

INSERT INTO `itineraries` (`id`, `tour_id`, `name`, `description`, `day`, `department`, `province`, `district`, `altitud`, `latitud`, `longitud`, `icono`, `photo`, `created_at`, `updated_at`) VALUES
(50, 35, 'qwe michael', 'qwesss michael', 1, 'cusco', 'wqe', 'wqe', 'wqe', 'ewqewe', NULL, NULL, 'admin/uploads/itinerario/1550507982.tour-maras-bicicleta-1.jpg', NULL, '2019-02-18 21:40:32'),
(51, 35, 'qweasdas sad sadas mi9chael', 'qweqw', 2, 'qwe', 'qwe', 'qwe', 'qwe', 'wqe', NULL, NULL, 'admin/uploads/itinerario/1550507951.marasmoray-cusco.jpg', NULL, '2019-02-18 21:39:11'),
(52, 35, 'asd', 'asd', 3, 'asd', 'asd', 'asd', 'asd', 'asddas asd asd', NULL, NULL, 'admin/uploads/itinerario/1550527501.tour-maras-bicicleta-1.jpg', NULL, '2019-02-19 03:05:01'),
(53, 35, 'asd', 'asd', 4, 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, 'admin/uploads/itinerario/1550509538.tour-bicicleta-maras-moray.jpg', NULL, NULL),
(55, 35, 'asd', 'asd', 5, 'asd', 'asd', 'asd', 'asd', 'asdasd', NULL, NULL, 'admin/uploads/itinerario/1550524952.marasmoray-cusco.jpg', NULL, NULL),
(63, 36, 'ad', 'asd', 1, 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, 'admin/uploads/itinerario/1550526117.maras-moray.jpg', NULL, NULL),
(65, 36, 'ASDasd', 'asdfasd', 2, 'sdf', 'sdf', 'sdf', 'sdff', 'sdf', NULL, NULL, 'admin/uploads/itinerario/1550526409.maras-moray.jpg', NULL, NULL),
(66, 36, 'sad', 'asd', 3, 'asd', 'sad', 'asd', 'sad', 'sad', NULL, NULL, 'admin/uploads/itinerario/1550526462.maras-moray.jpg', NULL, NULL),
(67, 35, 'ASDasd', 'asd', 6, 'asd', 'sad', 'asd', 'sad', 'asdsad', NULL, NULL, 'admin/uploads/itinerario/1550526520.maras-moray.jpg', NULL, NULL),
(68, 35, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin/uploads/itinerario/1550527312.maras-moray.jpg', NULL, NULL),
(69, 35, 'ASD', 'asd', 8, 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, 'admin/uploads/itinerario/1550527346.maras-moray.jpg', NULL, NULL),
(70, 35, 'zxc', 'zxc', 9, 'zxc', 'zxc', 'zxc', 'zxc', 'zxc', NULL, NULL, 'admin/uploads/itinerario/1550587863.maras-moray.jpg', NULL, NULL),
(71, 35, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin/uploads/itinerario/1550780503.tour-bicicleta-maras-moray.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbr` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `name`, `abbr`, `flag`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'español', 'es', 'sa', '1', NULL, NULL, NULL),
(2, 'ingles', 'en', 'en', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_24_161436_create_languages_table', 1),
(4, '2018_07_24_161508_create_categories_table', 1),
(5, '2018_07_26_091818_create_multimedia_table', 1),
(6, '2018_07_26_102743_create_images_table', 1),
(7, '2018_07_26_102803_create_videos_table', 1),
(8, '2018_07_26_160543_create_tours_table', 1),
(9, '2018_07_26_160726_create_itineraries_table', 1),
(10, '2018_07_27_160542_create_categories_has_tours_table', 1),
(11, '2018_08_02_153953_create_series_controller', 1),
(12, '2018_08_04_104154_create_icons_table', 1),
(13, '2018_08_06_110143_create_events_table', 1),
(14, '2018_08_07_094636_create_prices_table', 1),
(15, '2018_08_21_152434_create_testimonials_table', 1),
(16, '2018_08_22_154532_create_img_table', 1),
(17, '2018_09_19_152752_create_paises_table', 1),
(18, '2018_09_19_172904_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `multimedia`
--

INSERT INTO `multimedia` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(40, 'Tour en Bicicleta Maras Moray', 'Para iniciar el tour en Bicicleta Maras Moray primeramente le recogeremos de su hotel, a las 09:00 hrs. aproximadamente  para dirigirnos a Chancadora (Chinchero) en nuestra movilidad.', '2019-02-12 21:39:18', '2019-02-12 21:39:18'),
(41, 'Tours a Machu Picchu, Tours en Cusco, Paquetes Machupicchu', 'Tours a Machu Picchu, Tours en Cusco, Paquetes Machupicchu', '2019-02-18 19:13:23', '2019-02-18 19:13:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `range_first` int(11) NOT NULL,
  `range_end` int(11) NOT NULL,
  `monto` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `travel_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberPersonas` int(11) DEFAULT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guide_service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `tour_id` int(10) UNSIGNED NOT NULL,
  `cant_person` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `nationality` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impresion_global` int(11) DEFAULT NULL,
  `ig_comentario` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_organizacion` int(11) DEFAULT NULL,
  `i_transporte` int(11) DEFAULT NULL,
  `i_chofer` int(11) DEFAULT NULL,
  `i_comentario` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_conocimiento` int(11) DEFAULT NULL,
  `g_simpatia` int(11) DEFAULT NULL,
  `g_eficacia` int(11) DEFAULT NULL,
  `g_comunicacion` int(11) DEFAULT NULL,
  `c_comentario` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alojamiento_limpieza` int(11) DEFAULT NULL,
  `alojamiento_servicio` int(11) DEFAULT NULL,
  `alojamiento_comentario` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comida_calidad` int(11) DEFAULT NULL,
  `comida_servicio` int(11) DEFAULT NULL,
  `comida_comentario` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `le_gusta` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_le_gusta` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recomendaria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactarnos` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo_viaje` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acompanante` varchar(1050) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_short` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_complete` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_tour` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multimedia_id` int(10) UNSIGNED DEFAULT NULL,
  `lugar` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `name`, `img`, `description_short`, `description_complete`, `organization`, `meta_description`, `meta_keywords`, `status`, `principal`, `price`, `slug`, `tipo_tour`, `multimedia_id`, `lugar`, `created_at`, `updated_at`) VALUES
(35, 'Tour en Bicicleta Maras Moray', 'admin/uploads/tour/1550869852.tour-370x370-1.jpg', 'En el tour en Bicicleta Maras Moray usted podrá disfrutar del hermoso paisaje de la zona', 'En el tour en Bicicleta Maras Moray usted podrá disfrutar del hermoso paisaje de la zona alto andina de la sierra del Cusco con vistas impresionantes de Nevados, valles.', '<p>&nbsp;</p>\r\n\r\n<ul class=\"list-ok\">\r\n	<li>Impermeable para lluvia</li>\r\n	<li>Bloqueador solar</li>\r\n	<li>Agua personal</li>\r\n	<li>Mochila peque&ntilde;+</li>\r\n	<li>rtf</li>\r\n</ul>', NULL, NULL, 'A', 1, 500.00, 'Tour-en-Bicicleta-Maras-Moray', 'uno_dia', 40, 'cusco', '2019-02-12 21:42:34', '2019-02-23 02:10:52'),
(36, 'Bungee Jumping en Cusco', 'admin/uploads/tour/1550869865.tour-370x370-5.jpg', 'Si te gusta el deporte extremo y eres amante de las alturas entonces el Bungee Jumping en Cusco Poroy es para ti.', 'Si te gusta el deporte extremo y eres amante de las alturas entonces el Bungee Jumping en Cusco Poroy es para ti. ara realizar el Bungee Jumping en Cusco, debemos dirigirnos hasta Poroy ubicado a 15 minutos de Cusco, Perú a 3,600 mts sobre el nivel del mar siendo el más alto a nivel de Sudamérica, motivo por el cual experimentaran mucha adrenalina con este deporte de aventura.', '<h2>Itinerario Bungee Jumping en Cusco</h2>\r\n\r\n<ul>\r\n	<li>El personal encargado les recoger&aacute; del hotel para dirigirlos hasta Poroy unicado a 15 minutos de la ciudad de Cusco, aqui daremos inicio a la adrenalina pura.</li>\r\n	<li>Recibiremos una breve informaci&oacute;n sobre como realizar Bungee Jumping en Cusco Poroy y luego subiremos preparados.</li>\r\n	<li>Llegaremos hasta los 122 metros de altura, el personal le asegurar&aacute; con todos los implementos especiales que se usa en este deporte de aventura, arneses en tobillos, cuerda el&aacute;stica, arneses con cinta de seguridad sujetada a la liga.&nbsp;( la cinta de seguridad tiene una longitud de estiramiento m&aacute;ximo de 107 metros y una capacidad de resistencia de 2 toneladas de peso).</li>\r\n	<li>Habiendo llegado al l&iacute;mite de saltos desechamos la cuerda, cort&aacute;ndola en pedazos con la finalidad de asegurarnos de no volverlas a usar para garantizar al turista que los equipos empleados se encuentren en &oacute;ptimas condiciones.</li>\r\n	<li>Duraci&oacute;n del ascenso y descenso: El programa se ejecuta entre 12 y 16 minutos, Esta actividad de los cuales 4 minutos de subida de la caseta hasta los 122 metros y el restante es de salto y descenso.</li>\r\n</ul>\r\n\r\n<p><strong>FRECUENCIA DE SALIDA:</strong></p>\r\n\r\n<p>De Domingo a Viernes de 09:00hrs &ndash; 17:00 hrs.</p>\r\n\r\n<p><strong>COSTO DEL PROGRAMA:</strong></p>\r\n\r\n<p>USD 82 D&oacute;lares americanos por persona.</p>', NULL, NULL, 'A', 1, 1200.00, 'Bungee-Jumping-en-Cusco', 'uno_dia', 40, 'cusco', '2019-02-12 22:39:50', '2019-02-23 02:11:05'),
(37, 'hjgh fghfg', 'admin/uploads/tour/1550869875.tour-370x370-7.jpg', 'Posteriormentes durante el Tour 4 dias 3 noches en Cusco y', 'fgh', '<p>Posteriormentes durante el Tour 4 dias 3 noches en Cusco y&nbsp;Posteriormentes durante el Tour 4 dias 3 noches en Cusco y</p>', NULL, NULL, 'A', 1, 3000.00, 'hjgh-fghfg', 'uno_dia', 40, 'puno', '2019-02-19 20:44:44', '2019-02-23 21:02:07'),
(38, 'Tour Cusco 4 dias 3 noches Extranjeros By Car', 'admin/uploads/tour/1550869970.tour-370x370-6.jpg', 'machuPicchu Posteriormente en el Tour Cusco 4 dias 3 noches Extranjeros se realizara un viaje en bus hasta la población de Hidroeléctric', 'Posteriormente en el Tour Cusco 4 dias 3 noches Extranjeros se realizara un viaje en bus hasta la población de Hidroeléctrica y finalmente visitar la maravilla del Mundo Machu Picchu,', '<ul>\r\n	<li>Pasaporte original y tarjeta de migraci&oacute;n (TAM)</li>\r\n	<li>Ropa de abrigo (t&eacute;rmicas, guantes, bufandas, calcetines de algod&oacute;n, gorro de lana, camisetas, impermeable y/o poncho para lluvia)</li>\r\n	<li>C&aacute;mara y bater&iacute;a o pilas de repuesto</li>\r\n	<li>Protector solar, sombrero y gafas de sol</li>\r\n	<li>Kit m&eacute;dico personal</li>\r\n	<li>Papel higi&eacute;nico</li>\r\n	<li>Toalla peque&ntilde;a</li>\r\n	<li>Dinero extra para bebida propinas y recuerdos</li>\r\n	<li>Ropa de ba&ntilde;o (opcional)</li>\r\n	<li>Botella de agua</li>\r\n</ul>', NULL, NULL, 'A', 1, 232.00, 'Tour-Cusco-4-dias-3-noches-Extranjeros-By-Car', 'uno_dia', 41, 'arequipa', '2019-02-23 02:12:44', '2019-02-23 02:12:50'),
(39, 'our 4 dias 3 noches Cusco y MachuPicchu en Tren', 'admin/uploads/tour/1550870037.tour-370x370-9.jpg', 'Posteriormentes durante el Tour 4 dias 3 noches en Cusco y MachuPicchu visitaremos el Valle Sagrado de los Incas', 'Posteriormentes durante el Tour 4 dias 3 noches en Cusco y MachuPicchu visitaremos el Valle Sagrado de los Incas y los centros arqueológicos de Pisaq y Ollantaytambo para Finalmente disfrutar de la maravilla del Mundo MachuPicchu.', '<ul>\r\n	<li>Pasaporte original y tarjeta de migraci&oacute;n (TAM)</li>\r\n	<li>Ropa de abrigo (t&eacute;rmicas, guantes, bufandas, calcetines de algod&oacute;n, gorro de lana, camisetas, impermeable y/o poncho para lluvia)</li>\r\n	<li>C&aacute;mara y bater&iacute;a o pilas de repuesto</li>\r\n	<li>Protector solar, sombrero y gafas de sol</li>\r\n	<li>Kit m&eacute;dico personal</li>\r\n	<li>Papel higi&eacute;nico</li>\r\n	<li>Toalla peque&ntilde;a</li>\r\n	<li>Dinero extra para bebida propinas y recuerdos</li>\r\n	<li>Ropa de ba&ntilde;o (opcional)</li>\r\n	<li>Botella de agua</li>\r\n</ul>', NULL, NULL, 'A', 0, 2000.00, 'our-4-dias-3-noches-Cusco-y-MachuPicchu-en-Tren', 'uno_dia', 40, 'lima', '2019-02-23 02:13:53', '2019-02-23 02:13:57'),
(40, 'Cusco Clasico 5 días 4 noches Extranjeros en Tren', 'admin/uploads/tour/1550870102.tour-370x370-8.jpg', 'En esta aventura de 05 días visitaremos la capital del Imperio de los Incas Cusco, El Qoricancha, Sacsayhuaman; disfrutaremos de Maras, Moray centro de investigación agrícola, las minas de sal en salineras.', 'En esta aventura de 05 días visitaremos la capital del Imperio de los Incas Cusco, El Qoricancha, Sacsayhuaman; disfrutaremos de Maras, Moray centro de investigación agrícola, las minas de sal en salineras.', '<ul>\r\n	<li>Pasaporte original y tarjeta de migraci&oacute;n (TAM)</li>\r\n	<li>Ropa de abrigo (t&eacute;rmicas, guantes, bufandas, calcetines de algod&oacute;n, gorro de lana, camisetas, impermeable y/o poncho para lluvia)</li>\r\n	<li>C&aacute;mara y bater&iacute;a o pilas de repuesto</li>\r\n	<li>Protector solar, sombrero y gafas de sol</li>\r\n	<li>Kit m&eacute;dico personal</li>\r\n	<li>Papel higi&eacute;nico</li>\r\n	<li>Toalla peque&ntilde;a</li>\r\n	<li>Dinero extra para bebida propinas y recuerdos</li>\r\n	<li>Ropa de ba&ntilde;o (opcional)</li>\r\n	<li>Botella de agua</li>\r\n</ul>', NULL, NULL, 'A', 0, 1000.00, 'Cusco-Clasico-5-días-4-noches-Extranjeros-en-Tren', 'uno_dia', 41, 'nazca', '2019-02-23 02:14:56', '2019-02-23 02:15:02'),
(41, 'City Tour en Lima – Ciudad de Reyess', 'admin/uploads/tour/1550933854.tour-370x370-4.jpg', 'City Tour en Lima – Ciudad de Reyes', 'City Tour en Lima – Ciudad de Reyes', '<h1>City Tour en Lima &ndash; Ciudad de Reyes&nbsp;City Tour en Lima &ndash; Ciudad de ReyesCity Tour en Lima &ndash; Ciudad de ReyesCity Tour en Lima &ndash; Ciudad de ReyesCity Tour en Lima &ndash; Ciudad de ReyesCity Tour en Lima &ndash; Ciudad de ReyesCity Tour en Lima &ndash; Ciudad de Reyes</h1>', NULL, NULL, 'A', NULL, 1233.00, 'City-Tour-en-Lima-–-Ciudad-de-Reyess', 'varios_dias', 40, 'cusco', '2019-02-23 19:57:29', '2019-02-23 19:57:35'),
(42, 'pimentel palominio michael alexander', 'admin/uploads/tour/1551287886.tour-370x370-4.jpg', 'asd', 'asd', '<p>asd</p>', NULL, NULL, 'A', 0, 23.00, 'pimentel-palominio-michael-alexander', 'uno_dia', 40, 'puno', '2019-02-27 22:17:10', '2019-02-27 22:18:06'),
(43, 'Cusco Cl', 'admin/uploads/tour/1551289074.tour-370x370-9.jpg', 'Pasaporte original y tarjeta de migración', 'Pasaporte original y tarjeta de migración (TAM) Ropa de abrigo', '<p>asd</p>', NULL, NULL, 'A', 0, 123.00, 'cusco-cl', 'uno_dia', 40, 'lima', '2019-02-27 22:24:12', '2019-02-27 22:37:54'),
(44, 'Cusco Clasico 5 dias 4 noches Extranjeros en Trenn', 'admin/uploads/tour/1551289088.tour-370x370-8.jpg', 'Pasaporte original y tarjeta de migración', 'Pasaporte original y tarjeta de migración (TAM) Ropa de abrigo', '<p>asd</p>', NULL, NULL, 'A', 0, 123.00, 'cusco-clasico-5-dias-4-noches-extranjeros-en-trenn', 'uno_dia', 40, 'lima', '2019-02-27 22:24:32', '2019-02-27 22:38:08'),
(45, 'Cusco Clasico 5 días 4 noches Extranjeros en Trenxx', 'admin/uploads/tour/1551288992.tour-370x370-8.jpg', 'En esta aventura de 05 días visitaremos la capital del Imperio de los Incas Cusco, El Qoricancha, Sacsayhuaman; disfrutaremos de Maras, Moray centro de investigación agrícola, las minas de sal en salineras.', 'En esta aventura de 05 días visitaremos la capital del Imperio de los Incas Cusco, El Qoricancha, Sacsayhuaman; disfrutaremos de Maras, Moray centro de investigación agrícola, las minas de sal en salineras.', '<ul>\r\n	<li>Pasaporte original y tarjeta de migraci&oacute;n (TAM)</li>\r\n	<li>Ropa de abrigo (t&eacute;rmicas, guantes, bufandas, calcetines de algod&oacute;n, gorro de lana, camisetas, impermeable y/o poncho para lluvia)</li>\r\n	<li>C&aacute;mara y bater&iacute;a o pilas de repuesto</li>\r\n	<li>Protector solar, sombrero y gafas de sol</li>\r\n	<li>Kit m&eacute;dico personal</li>\r\n	<li>Papel higi&eacute;nico</li>\r\n	<li>Toalla peque&ntilde;a</li>\r\n	<li>Dinero extra para bebida propinas y recuerdos</li>\r\n	<li>Ropa de ba&ntilde;o (opcional)</li>\r\n	<li>Botella de agua</li>\r\n</ul>', NULL, NULL, 'A', 1, 23.00, 'cusco-clasico-5-dias-4-noches-extranjeros-en-trenxx', 'uno_dia', 41, 'puno', '2019-02-27 22:36:27', '2019-02-27 22:36:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `privilege` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `privilege`, `name`, `email`, `language_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'admin', 'admin@gmail.com', 2, NULL, '$2y$10$dtjJ9QYBhdLk49kjRiYLiOA/2L6hPVQas.S0P7PuROjGrcF1DZhGa', 'gI70nQpiFU0IJKIrMLaeEWDebHEhPAyDd0LeHNNyLRlA89Tds0zqoCoUxvLu', '2019-02-06 03:15:26', '2019-02-07 00:38:31'),
(9, 'admin', 'pimentel palominio michael alexander', 'michael101136@gmail.com', 1, NULL, '$2y$10$bwWR3R345L0kBAPUtDSMteQOEMUW6vJ9I0CtbyEPXtFW0EWMWEou.', 'o9MfqhNsV7sOy9IVQ1Ikcr7B8NjdifwYF5BZ1aukIMO7iJhtEOf0Xg3Qzfn1', '2019-02-18 22:11:56', '2019-02-27 21:31:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `multimedia_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_language_id_foreign` (`language_id`);

--
-- Indices de la tabla `categories_has_tours`
--
ALTER TABLE `categories_has_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_has_tours_categorie_id_foreign` (`categorie_id`),
  ADD KEY `categories_has_tours_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_multimedia_id_foreign` (`multimedia_id`);

--
-- Indices de la tabla `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itineraries_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tours_slug_unique` (`slug`),
  ADD KEY `tours_multimedia_id_foreign` (`multimedia_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_multimedia_id_foreign` (`multimedia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `categories_has_tours`
--
ALTER TABLE `categories_has_tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de la tabla `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `categories_has_tours`
--
ALTER TABLE `categories_has_tours`
  ADD CONSTRAINT `categories_has_tours_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `categories_has_tours_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_multimedia_id_foreign` FOREIGN KEY (`multimedia_id`) REFERENCES `multimedia` (`id`);

--
-- Filtros para la tabla `itineraries`
--
ALTER TABLE `itineraries`
  ADD CONSTRAINT `itineraries_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Filtros para la tabla `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_multimedia_id_foreign` FOREIGN KEY (`multimedia_id`) REFERENCES `multimedia` (`id`);

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_multimedia_id_foreign` FOREIGN KEY (`multimedia_id`) REFERENCES `multimedia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
