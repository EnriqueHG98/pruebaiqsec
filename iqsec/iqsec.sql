-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2023 a las 01:56:46
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iqsec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--

CREATE TABLE `beneficios` (
  `id` int(10) NOT NULL,
  `beneficio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`id`, `beneficio`) VALUES
(1, 'Proporcionar la protección efectiva de la información de los titulares de tarjetas.	'),
(2, 'Minimizar el riesgo de posibles intrusiones no autorizadas o compromiso de la información de tarjetas.'),
(3, 'Incrementar la confianza de los titulares de tarjetas en las transacciones realizadas con las mismas.'),
(4, 'Combatir la suplantación de identidad y otros fraudes que se producen en Internet.'),
(5, 'Proteger la reputación de la Organización.'),
(6, 'Disminución de los riesgos de incumplimiento como las pérdidas financieras.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientebeneficio`
--

CREATE TABLE `clientebeneficio` (
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `idBeneficio` int(20) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientebeneficio`
--

INSERT INTO `clientebeneficio` (`idCliente`, `idBeneficio`, `updated_at`, `created_at`) VALUES
(1, 2, '2023-04-20', '2023-04-20'),
(2, 1, '2023-04-20', '2023-04-20'),
(5, 2, '2023-04-20', '2023-04-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `nombre`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'prueba@bb.com', 'prueba100', '$2y$10$Jxnyr.3wO0o72J64sqagPOqV1Kd97SmtjZf6a9Ef/OOPAVZLTFX5.', NULL, NULL, '2023-04-20 12:11:07', '2023-04-20 12:11:07'),
(2, 'enrique98isc@gmail.com', 'Enrique Prueba', '$2y$10$vimyVV.d1RGjAldZD/fDJeUfOfkWbdwbyDcJvvqILSiuQpoPTvaMS', NULL, NULL, '2023-04-20 12:12:30', '2023-04-20 12:12:30'),
(3, 'prueba20@gmail.com', 'Prueba20', '$2y$10$KIpZdZpwLeTtVePObOPWyeZDn9Xv2LeapPVo2hH9SpoJD/ghU9Z7W', NULL, NULL, '2023-04-20 12:58:31', '2023-04-20 12:58:31'),
(4, 'prueba23@gmail.com', 'Test', '$2y$10$zq51TaX2htzsCFcM675Wc.fSN8Pi5lt3kzCr2ylRF8JHR3OBYKiAG', NULL, NULL, '2023-04-21 00:54:01', '2023-04-21 00:54:01'),
(5, 'prueba@gmail.com', 'IQSEC', '$2y$10$HLrATFDBvzIP2lHrD2vEh.SlOP29hMUfn.zzDyNWTorgpxKwop21G', NULL, NULL, '2023-04-21 05:17:07', '2023-04-21 05:17:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `nombre`, `contraseña`, `updated_at`, `created_at`) VALUES
(1, 'carlos', 'carlossd', 'yugkjjoñkl', '2023-04-19', '2023-04-19'),
(2, 'rfgthjklñ', 'ghjkl', 'ghjklñ{', '2023-04-19', '2023-04-19'),
(3, 'lisa50@example.com', 'prueba', 'password1', '2023-04-19', '2023-04-19'),
(4, 'solrac512@gmail.com', 'pruebanwdihl', 'password1', '2023-04-19', '2023-04-19'),
(5, 'soac512@gmail.com', 'pruebanwdihl', 'carlos', '2023-04-19', '2023-04-19'),
(6, 'soaedc512@gmail.com', 'wedh', 'hhhhhas', '2023-04-19', '2023-04-19'),
(7, 'so512@gmail.com', 'wedh', 'pass512', '2023-04-19', '2023-04-19'),
(8, 'fghjk@gmail.com', 'wedh', 'hola52', '2023-04-19', '2023-04-19'),
(9, 'enrique98isc@gmail.com', 'Juan Enrique', 'password23', '2023-04-19', '2023-04-19'),
(10, 'enrique98isc@gmail.com', 'Juan Herrera', '$2y$10$XET0wQx9FVPeFhilayh3quRZUjqxUyiPB18JMRybgXAw9vZL.c8fm', '2023-04-20', '2023-04-20'),
(11, 'check@gmail.com', 'Prueba', '$2y$10$0W0fPHoHj6UMPhE/lnvrIOmN7FAK4pXq0TACOTxaUdL0AxdY1yPEW', '2023-04-20', '2023-04-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientebeneficio`
--
ALTER TABLE `clientebeneficio`
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idBeneficio` (`idBeneficio`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_correo_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficios`
--
ALTER TABLE `beneficios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientebeneficio`
--
ALTER TABLE `clientebeneficio`
  ADD CONSTRAINT `clientebeneficio_ibfk_1` FOREIGN KEY (`idBeneficio`) REFERENCES `beneficios` (`id`),
  ADD CONSTRAINT `clientebeneficio_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
