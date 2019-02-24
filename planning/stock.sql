-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 18:00:21
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `idproduct` int(11) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT 'N/A',
  `ref` varchar(10) NOT NULL DEFAULT 'N/A',
  `price` int(10) NOT NULL DEFAULT '0',
  `cost` int(10) NOT NULL DEFAULT '0',
  `units` int(4) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`idproduct`, `name`, `ref`, `price`, `cost`, `units`, `state`) VALUES
(1, 'Product 1', '1010101', 10000, 12000, 71, 1),
(2, 'Product 2', '2020202', 20000, 22000, 6, 1),
(3, 'Product 3', '3030303', 30000, 33000, 45, 1),
(4, 'Product 4', '4040404', 40000, 44000, 14, 1),
(5, 'Product 5', '5050505', 50000, 55000, 23, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproduct`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
