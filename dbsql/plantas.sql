-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2020 a las 17:23:38
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plantas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  `id_planta` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `ci_cliente` int(11) NOT NULL,
  `fecha_factura` int(11) NOT NULL,
  `subtotal_factura` int(11) NOT NULL,
  `iva_factura` int(11) NOT NULL,
  `total_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `id_planta` int(11) NOT NULL,
  `nombre_planta` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `precio_planta` int(11) NOT NULL,
  `fecha_compra` int(11) NOT NULL,
  `vida_util` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `cantidad_compra` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` int(11) NOT NULL,
  `ruc_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id_tipo_pago` int(11) NOT NULL,
  `nombre_tipo_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_planta`
--

CREATE TABLE `tipo_planta` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authKey` varchar(250) NOT NULL,
  `accessToken` varchar(250) NOT NULL,
  `activate` tinyint(1) NOT NULL DEFAULT 0,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ci` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `authKey`, `accessToken`, `activate`, `telefono`, `direccion`, `ci`) VALUES
(5, 'dav', 'davidmineplay@gmail.com', 'fsbqobwqC.aMo', 'bac494e7c274e80b168a588d0c2f403e7e90f0c259d81b63f91fe669c29d33df9c1bc10aaac7e8dc90012f0718d5b1ad9017b1ff8fd7877f1b747ade46747ef21b124ea3c9de34dde9c13e02f2d266b2cc9032583bf0b1ca3cb95497489d7c9563a07217', 'dd1e5f6180696a0b33ad54aba404a5301016431f54904fb0ac56f9595a2b34e606c5232222c3cfb91c9a5fe4743022cd579e301464a46cab5a13e59ccb8bad4b504983a5b0f2679b0ffa530364880e409de9adcdf9c3a2497897cef7e94d4d529fd22bab', 0, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD UNIQUE KEY `id_detalle` (`id_detalle`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`id_planta`),
  ADD UNIQUE KEY `id_planta` (`id_planta`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id_tipo_pago`),
  ADD UNIQUE KEY `id_tipo_pago` (`id_tipo_pago`);

--
-- Indices de la tabla `tipo_planta`
--
ALTER TABLE `tipo_planta`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `id_planta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id_tipo_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_planta`
--
ALTER TABLE `tipo_planta`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
