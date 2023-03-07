-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 16:17:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_Administrador` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Identificacion` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id_Administrador`, `Nombres`, `Apellidos`, `Identificacion`, `Telefono`, `Correo`, `Contraseña`) VALUES
(1, 'Juan Pablo', 'Pisco Londoño', '1040871532', '3166556211', 'jppisco@misena.edu.co', '1040871532'),
(2, 'Valentina', 'Duque Castaño', '1040872503', '3023689294', 'vduque30@misena.edu.co', '1040872503'),
(3, 'Jose Manuel', 'Orozco Montes', '1040030417', '3196020432', 'jose.manuel@gmail.com', '1040030417'),
(4, 'Laura Isabel', 'Ramirez Flores', '1047964998', '3122475537', 'liflorez8@misena.edu.co', '1047964998');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id_Articulo` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Articulo` varchar(45) NOT NULL,
  `Precio_Entrada` int(20) NOT NULL,
  `Precio_Salida` int(20) NOT NULL,
  `Id_Proveedor` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`Id_Articulo`, `Id_Categoria`, `Articulo`, `Precio_Entrada`, `Precio_Salida`, `Id_Proveedor`, `Stock`, `Descripcion`, `Imagen`) VALUES
(1, 4, 'Accesorios', 3000, 9000, 1, 10, 'hola', NULL),
(4, 1, 'Mameluco', 2500, 3000, 1, 2, 'Tehidas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Nombre`, `Descripcion`) VALUES
(1, 'Bebe Niña ', 'Mamelucos, vestidos, pantalones y camisas'),
(2, 'Bebe Niño', 'Mamelucos, pantalones, conjuntos y camisas'),
(3, 'Calzado', 'Medias, chanclas y zapatos'),
(4, 'Accesorios', 'Gorros, toallas, cobijas y balacas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Identificacion` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_Cliente`, `Nombres`, `Apellidos`, `Identificacion`, `Telefono`, `Correo`, `Contraseña`) VALUES
(1, 'Juan David', 'Ceballos Gallego', '1036252301', '3122578799', 'juandacaballo@gmail.com', 'hola'),
(2, 'Yeidy Sorany', 'Garcia Cardona', '1036925880', '3226640261', 'yeidygarciac04@gmail.com', '1036925880'),
(3, 'Valentina', 'Duque Castaño', '1040871536', '3023689294', 'vduque30@misena.edu.co', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_Compra` int(11) NOT NULL,
  `Id_Articulo` int(11) NOT NULL,
  `Factura_Compra` varchar(50) NOT NULL,
  `Cantidad` int(20) NOT NULL,
  `Precio_Unitario` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_Proveedor` int(11) NOT NULL,
  `Iva` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id_Compra`, `Id_Articulo`, `Factura_Compra`, `Cantidad`, `Precio_Unitario`, `Total`, `Fecha`, `Id_Proveedor`, `Iva`) VALUES
(1, 1, '777', 3, 4500, 13500, '2022-09-07', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `Id_Facturacion` int(11) NOT NULL,
  `Id_Articulo` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  `Total_Venta` int(20) NOT NULL,
  `Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` int(11) NOT NULL,
  `Empresa` varchar(45) NOT NULL,
  `Titular` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_Proveedor`, `Empresa`, `Titular`, `Telefono`, `Observaciones`) VALUES
(1, 'Jaltech', 'Jaider ', '5565543', 'Distribuidor de algodones'),
(2, 'Texblux', 'Juan Carlos Lopez', '311 4653876', 'Materia primas'),
(3, 'Distritela', 'Luis Gomez', '3136517086', 'Importacion de telas para confección de ropa'),
(4, 'Babyacessorios', 'Laura perez', '3122475537', 'Distribuidor de accesorios '),
(5, 'calzadola89', 'Miguel Angel Gallego', '3023680294', 'Distribuidor de calzado ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_Ventas` int(11) NOT NULL,
  `Id_Articulo` int(11) NOT NULL,
  `Articulo` varchar(45) NOT NULL,
  `Cantidad` int(20) NOT NULL,
  `Precio_Venta` int(20) NOT NULL,
  `Total` int(30) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_Ventas`, `Id_Articulo`, `Articulo`, `Cantidad`, `Precio_Venta`, `Total`, `Fecha`) VALUES
(1, 1, 'accesorios', 10, 30000, 300000, '2022-09-04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_Administrador`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id_Articulo`),
  ADD KEY `Id_Categoria` (`Id_Categoria`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `Id_Articulo` (`Id_Articulo`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`Id_Facturacion`),
  ADD KEY `Id_Articulo` (`Id_Articulo`),
  ADD KEY `Id_Cliente` (`Id_Cliente`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_Ventas`),
  ADD KEY `Id_Articulo` (`Id_Articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Id_Administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id_Articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id_Compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  MODIFY `Id_Facturacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_Ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`),
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`);

--
-- Filtros para la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD CONSTRAINT `facturacion_ibfk_1` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`),
  ADD CONSTRAINT `facturacion_ibfk_2` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_CLiente`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
