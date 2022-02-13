-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2022 a las 22:39:07
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `contacto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `direccion`, `contacto`) VALUES
(1, 'Jesus', 'Carretera, Del Depto del Distrito Federal km 7.5, 52044 Santa María Atarasquillo, Méx.', '728 285 9552'),
(2, 'Damian', 'Mariano matamoros 30', '7293640963');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `nombreCliente` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipoProducto` varchar(255) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` double NOT NULL,
  `fechaOrden` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `cantidadAportada` int(11) NOT NULL,
  `tipoPago` varchar(255) COLLATE utf8_bin NOT NULL,
  `contactoCliente` varchar(255) COLLATE utf8_bin NOT NULL,
  `direccionCliente` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombreSuc` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `nombreCliente`, `tipoProducto`, `cantidad`, `total`, `fechaOrden`, `fechaEntrega`, `cantidadAportada`, `tipoPago`, `contactoCliente`, `direccionCliente`, `nombreSuc`) VALUES
(1, 'Jesus', 'Pastel', 2, 250, '2022-02-10', '2022-02-24', 600, 'tarjeta de debito', '728 285 9552', 'Carretera, Del Depto del Distrito Federal km 7.5, 52044 Santa María Atarasquillo, Méx.', 'Panaderia Sur'),
(2, 'Damian', 'pan\r\nleche', 3, 900, '2022-02-11', '2022-02-24', 1000, 'EFECTIVO', '728 285 9552', 'Carretera, Del Depto del Distrito Federal km 7.5, 52044 Santa María Atarasquillo, Méx.', 'Panaderia Metepec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(255) COLLATE utf8_bin NOT NULL,
  `caducidad` date NOT NULL,
  `fechaElaboracion` date NOT NULL,
  `tipoProducto` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `caducidad`, `fechaElaboracion`, `tipoProducto`, `marca`, `cantidad`) VALUES
(1, 'Pastel', '2022-04-30', '2022-02-01', 'pan\r\nleche', 'Bimbo', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `costo` double NOT NULL,
  `contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipoProducto` varchar(255) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `direcSucursal` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idproveedor`, `nombre`, `costo`, `contacto`, `tipoProducto`, `direccion`, `direcSucursal`) VALUES
(1, 'Bimbo', 250, '722 279 0405', 'pan\r\nleche', 'Industria Automotriz 2, Delegación Santa María Totoltepec, 50200 Toluca de Lerdo, Méx.', 'Carlos Hank Gonzales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idSucursal` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `productosV` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idSucursal`, `nombre`, `direccion`, `contacto`, `productosV`) VALUES
(1, 'Panaderia Sur', 'Carlos Hank Gonzales', '7221090131', 'Pastel de 3 pisos'),
(2, 'Panaderia Metepec', 'Metepec Edo. Mex', '7531856312', 'Pan dulce\r\npasteles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `idTrabajador` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `puesto` varchar(255) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(255) COLLATE utf8_bin NOT NULL,
  `edad` int(255) NOT NULL,
  `contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `salario` int(11) NOT NULL,
  `seguroSocial` int(11) NOT NULL,
  `nombreSucursal` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`idTrabajador`, `nombre`, `puesto`, `sexo`, `edad`, `contacto`, `salario`, `seguroSocial`, `nombreSucursal`) VALUES
(1, 'Edwin', 'Cagero', 'masculino', 28, '7221090131', 250, 222110833, 'Panaderia Sur'),
(2, 'Alin', 'Gerente', 'Femenino', 19, '722 839 4211', 2500, 123456789, 'Panaderia Sur');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `fkdireccionC` (`direccion`),
  ADD KEY `fknombreC` (`nombre`),
  ADD KEY `fkcontactoC` (`contacto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fkpedidosNC` (`nombreCliente`),
  ADD KEY `fkpedidosNS` (`nombreSuc`),
  ADD KEY `fkpedidosDC` (`direccionCliente`),
  ADD KEY `fkpedidosCC` (`contactoCliente`),
  ADD KEY `fkpedidosTP` (`tipoProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fkproductosNP` (`nombreProducto`),
  ADD KEY `fkproductosTP` (`tipoProducto`),
  ADD KEY `fkproductoM` (`marca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`),
  ADD KEY `fkproveedorDS` (`direcSucursal`),
  ADD KEY `fkproveedorTP` (`tipoProducto`),
  ADD KEY `fkproveedorN` (`nombre`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idSucursal`),
  ADD KEY `fksucursalN` (`nombre`),
  ADD KEY `fksucursalD` (`direccion`),
  ADD KEY `fksucursalPV` (`productosV`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`idTrabajador`),
  ADD KEY `fktrabajadoresNS` (`nombreSucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `idTrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
