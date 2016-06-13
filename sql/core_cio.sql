-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2016 a las 05:32:46
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `core_cio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data00`
--

CREATE TABLE `data00` (
  `id` int(11) NOT NULL,
  `NombreSistema` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL,
  `Code` varchar(6) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contador de código',
  `MesaNumero` int(2) NOT NULL,
  `update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Nombre del sistema';

--
-- Volcado de datos para la tabla `data00`
--

INSERT INTO `data00` (`id`, `NombreSistema`, `Estado`, `Code`, `MesaNumero`, `update`) VALUES
(1, 'Restaurante CIO', 1, 'AA0003', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data01`
--

CREATE TABLE `data01` (
  `id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `NombreModulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Modulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Niveles` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Menú del sistema, se cargaran los módulos que se utilizaran.';

--
-- Volcado de datos para la tabla `data01`
--

INSERT INTO `data01` (`id`, `NombreModulo`, `Modulo`, `Niveles`) VALUES
('a00', '<span class="octicon octicon-home"></span> Inicio', '', 1),
('a0001', 'Bienvenido', 'Welcome.php', 2),
('a0002', 'Resumen', 'funcion00.php', 2),
('a0003', 'Pedidos', 'funcion01.php', 2),
('a01', '<span class="octicon octicon-list-unordered"></span> Menú', '', 1),
('a0101', 'Ordenar', 'funcion02.php', 2),
('a0102', 'Añadir', 'funcion03.php', 2),
('a0103', 'Editar', 'funcion04.php', 2),
('a0104', 'Mesas', 'funcion06.php', 2),
('a0105', 'Buscar Orden', 'funcion05.php', 2),
('w01', '<span class="octicon octicon-tasklist"></span> Inventario', '', 1),
('w0101', 'Ver Inventario', 'funcionIn.php', 2),
('w0102', 'Actualizar', 'funcionIn2.php', 2),
('w0103', 'Ingresar Producto', 'funcionIn3.php', 2),
('w0104', 'Modificar', 'funcionIn4.php', 2),
('w02', '<span class="octicon octicon-person"></span> Perfil de usuario', '', 1),
('w0201', 'Datos', 'funcionP01.php', 2),
('w0202', 'Resumen', 'funcionP02.php', 2),
('w020201', 'Diaro', 'funcionP0201.php', 3),
('w020202', 'Buscar', 'funcionP0202.php', 3),
('w0203', 'Registros', 'funcionP03.php', 2),
('w020301', 'Últimos 15', 'funcionP0301.php', 3),
('w020302', 'Buscar', 'funcionP0302.php', 3),
('x01', '<span class="octicon octicon-tools"></span> Configuración', '', 1),
('x0101', 'Usuarios', 'funcionB01.php', 2),
('x010101', 'Activos', 'funcionB0101.php', 3),
('x010102', 'Modificar', 'funcionB0102.php', 3),
('x010103', 'Ingresar', 'funcionB0103.php', 3),
('x0102', 'Roles', 'funcionB02.php', 2),
('x010201', 'Activos', 'funcionB0201.php', 3),
('x010202', 'Modificar', 'funcionB0202.php', 3),
('x010203', 'Ingresar', 'funcionB0203.php', 3),
('x0103', 'Menús', 'funcionInMenu00.php', 2),
('x02', '<span class="octicon octicon-clippy"></span> Reportes', '', 1),
('x0201', 'Diario', 'funcionx0201.php', 2),
('x0202', 'Buscar', 'funcionx0202.php', 2),
('x03', '<span class="octicon octicon-file-text"></span> Registros', '', 1),
('x0301', 'Últimos 15', 'funcionx0301.php', 2),
('x0302', 'Buscar', 'funcionx0302.php', 2),
('x04', '<span class="octicon octicon-mortar-board"></span> Guía', '', 1),
('x0401', 'Inicio', 'funcionGuia01.php', 2),
('x0402', 'Menú', 'funcionMenu00.php', 2),
('x040201', 'Ordenar', 'funcionMenu01.php', 3),
('x040202', 'Añadir', 'funcionMenu02.php', 3),
('x040203', 'Editar', 'funcionMenu03.php', 3),
('x040204', 'Mesas', 'funcionMenu04.php', 3),
('x040205', 'Buscar Orden', 'funcionMenu05.php', 3),
('x0403', 'Perfil de Usuario', 'funcionPerfil00.php', 2),
('x040301', 'Datos', 'funcionPerfil01.php', 3),
('x040302', 'Resumen', 'funcionPerfil02.php', 3),
('x040303', 'Registros', 'funcionPerfil03.php', 3),
('x0404', 'Inventario', 'funcionInventario00.php', 2),
('x0405', 'Reportes', 'funcionReportes00.php', 2),
('x0406', 'Administrador', 'funcionAdministrador00.php', 2),
('x0407', 'Registros', 'funcionRegistros00.php', 2),
('x05', '<span class="octicon octicon-terminal"></span> Caja', '', 1),
('x0501', 'Despachadas', 'funcionDesp.php', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data02`
--

CREATE TABLE `data02` (
  `id` int(11) NOT NULL,
  `CodigoTbr` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Código del usuario en el sistema',
  `Type` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tipo de documento de identidad.',
  `Cedula` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cédula del usuario',
  `PrimerNombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primer Nombre del usuario',
  `SegundoNombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Segundo Nombre del usuario en el sistema',
  `PrimerApellido` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Primer Apellido del usuario',
  `SegundoApellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Segundo Apellido del usuario',
  `Usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario del sistema',
  `Pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `FechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de ingreso del usuario al sistema',
  `Estado` int(1) NOT NULL,
  `Rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Usuarios que manejarán el sistema';

--
-- Volcado de datos para la tabla `data02`
--

INSERT INTO `data02` (`id`, `CodigoTbr`, `Type`, `Cedula`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Usuario`, `Pass`, `FechaIngreso`, `Estado`, `Rol`) VALUES
(1, 'AA0000', 'V.-', '00000000', 'Administrador', '', 'Del sistema', '', 'cio_root', 'b7fb5f77d7c3efd9358ea1c55bb74734', '2016-03-25 03:07:25', 1, 1),
(2, 'AA0001', 'V.-', '00000001', 'Usuario', '', 'De pruebas', '', 'user01', 'e10adc3949ba59abbe56e057f20f883e', '2016-03-25 04:31:43', 1, 2),
(3, 'AA0002', 'V.-', '00000002', 'Usuario', '', 'De prueba', '', 'user02', 'e10adc3949ba59abbe56e057f20f883e', '2016-03-25 04:32:11', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data03`
--

CREATE TABLE `data03` (
  `id` int(11) NOT NULL,
  `NombreRol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Roles de usuarios, limites de uso del sistema.';

--
-- Volcado de datos para la tabla `data03`
--

INSERT INTO `data03` (`id`, `NombreRol`, `Estado`) VALUES
(1, 'Administrador', 1),
(2, 'Mesonero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data04`
--

CREATE TABLE `data04` (
  `IdRol` int(11) NOT NULL,
  `IdModulo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Permisos que se otorgaran a los roles de usuario';

--
-- Volcado de datos para la tabla `data04`
--

INSERT INTO `data04` (`IdRol`, `IdModulo`, `Estado`) VALUES
(1, 'a00', 1),
(1, 'a0001', 1),
(1, 'a0002', 1),
(1, 'a0003', 1),
(1, 'a01', 1),
(1, 'a0101', 1),
(1, 'a0102', 1),
(1, 'a0103', 1),
(1, 'a0104', 1),
(1, 'a0105', 1),
(1, 'w01', 1),
(1, 'w0101', 1),
(1, 'w0102', 1),
(1, 'w0103', 1),
(1, 'w0104', 1),
(1, 'w02', 1),
(1, 'w0201', 1),
(1, 'w0202', 1),
(1, 'w020201', 1),
(1, 'w020202', 1),
(1, 'w0203', 1),
(1, 'w020301', 1),
(1, 'w020302', 1),
(1, 'x01', 1),
(1, 'x0101', 1),
(1, 'x010101', 1),
(1, 'x010102', 1),
(1, 'x010103', 1),
(1, 'x0102', 1),
(1, 'x010201', 1),
(1, 'x010202', 1),
(1, 'x010203', 1),
(1, 'x02', 1),
(1, 'x0201', 1),
(1, 'x0202', 1),
(1, 'x03', 1),
(1, 'x0301', 1),
(1, 'x0302', 1),
(1, 'x04', 1),
(1, 'x0401', 1),
(1, 'x0402', 1),
(1, 'x040201', 1),
(1, 'x040202', 1),
(1, 'x040203', 1),
(1, 'x040204', 1),
(1, 'x040205', 1),
(1, 'x0403', 1),
(1, 'x040301', 1),
(1, 'x040302', 1),
(1, 'x040303', 1),
(1, 'x0404', 1),
(1, 'x0405', 1),
(1, 'x0406', 1),
(1, 'x0407', 1),
(1, 'x05', 1),
(1, 'x0501', 1),
(1, 'x0103', 1),
(2, 'a00', 1),
(2, 'a0001', 1),
(2, 'a0002', 1),
(2, 'a0003', 1),
(2, 'a01', 1),
(2, 'a0101', 1),
(2, 'a0105', 1),
(2, 'w01', 1),
(2, 'w0101', 1),
(2, 'w02', 1),
(2, 'w0201', 1),
(2, 'w0202', 1),
(2, 'w020201', 1),
(2, 'w020202', 1),
(2, 'w0203', 1),
(2, 'w020301', 1),
(2, 'w020302', 1),
(2, 'x04', 1),
(2, 'x0401', 1),
(2, 'x0402', 1),
(2, 'x040201', 1),
(2, 'x040205', 1),
(2, 'x0403', 1),
(2, 'x040301', 1),
(2, 'x040302', 1),
(2, 'x040303', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data05`
--

CREATE TABLE `data05` (
  `id` int(11) NOT NULL,
  `NombreProducto` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `Existencia` int(11) NOT NULL DEFAULT '0',
  `TipoUnidad` int(1) NOT NULL,
  `Estado` int(1) NOT NULL,
  `FechaIng` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Inventario del sistema';

--
-- Volcado de datos para la tabla `data05`
--

INSERT INTO `data05` (`id`, `NombreProducto`, `Descripcion`, `Existencia`, `TipoUnidad`, `Estado`, `FechaIng`) VALUES
(1, 'Carne', 'Res', 7450, 1, 1, '2016-03-25 04:01:05'),
(2, 'Leche', 'De vaca', 3600, 2, 1, '2016-03-25 04:02:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data06`
--

CREATE TABLE `data06` (
  `id` int(11) NOT NULL,
  `IdOperador` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Registro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IdDatoUsuario` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Módulo` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` text COLLATE utf8_unicode_ci NOT NULL,
  `Tipo` int(1) NOT NULL COMMENT 'Error o Éxito'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Actividad del sistema';

--
-- Volcado de datos para la tabla `data06`
--

INSERT INTO `data06` (`id`, `IdOperador`, `Registro`, `IdDatoUsuario`, `Módulo`, `Fecha`, `IP`, `Estado`, `Tipo`) VALUES
(1, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Carnes', '2016-03-25 03:53:45', '::1', '¡Exitóso!', 0),
(2, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Pollos', '2016-03-25 03:53:57', '::1', '¡Exitóso!', 0),
(3, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Pastas', '2016-03-25 03:54:24', '::1', '¡Exitóso!', 0),
(4, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Cuatro Quezos', '2016-03-25 03:55:14', '::1', '¡Exitóso!', 0),
(5, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Tovareña', '2016-03-25 03:55:33', '::1', '¡Exitóso!', 0),
(6, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Pequeña', '2016-03-25 03:56:17', '::1', '¡Exitóso!', 0),
(7, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Mediana', '2016-03-25 03:56:44', '::1', '¡Exitóso!', 0),
(8, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Grande', '2016-03-25 03:57:11', '::1', '¡Exitóso!', 0),
(9, 'AA0000', 'Editar plato o categoria', '', 'Menú > Editar > Plato o categoría: Cuatro Quesos', '2016-03-25 03:57:26', '::1', '¡Exitóso!', 0),
(10, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Pequeña', '2016-03-25 03:58:00', '::1', '¡Exitóso!', 0),
(11, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Mediana', '2016-03-25 03:58:16', '::1', '¡Exitóso!', 0),
(12, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Grande', '2016-03-25 03:58:40', '::1', '¡Exitóso!', 0),
(13, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Pepsi', '2016-03-25 03:59:06', '::1', '¡Exitóso!', 0),
(14, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Lata', '2016-03-25 03:59:31', '::1', '¡Exitóso!', 0),
(15, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Bomba', '2016-03-25 03:59:52', '::1', '¡Exitóso!', 0),
(16, 'AA0000', 'Ingresar producto', '', 'Inventario > Ingresar Producto > Producto: Carne', '2016-03-25 04:01:05', '::1', '¡Éxitoso!', 0),
(17, 'AA0000', 'Actualización de iventario', '', 'Inventario > Actualizar: <b>Carne</b> con <b>6 Kilogramo (kg)</b>', '2016-03-25 04:01:22', '::1', 'Éxitoso', 0),
(18, 'AA0000', 'Ingresar producto', '', 'Inventario > Ingresar Producto > Producto: Leche', '2016-03-25 04:02:49', '::1', '¡Éxitoso!', 0),
(19, 'AA0000', 'Actualización de iventario', '', 'Inventario > Actualizar: <b>Leche</b> con <b>5 Litro (l)</b>', '2016-03-25 04:03:08', '::1', 'Éxitoso', 0),
(20, 'AA0000', 'Actualización de iventario', '', 'Inventario > Retirado: <b>1.5 Litro (l)</b> de <b>Leche</b>', '2016-03-25 04:03:25', '::1', 'Éxitoso', 0),
(21, 'AA0000', 'Actualización de iventario', '', 'Inventario > Actualizar: <b>Leche</b> con <b>1.2 Litro (l)</b>', '2016-03-25 04:05:58', '::1', 'Éxitoso', 0),
(22, 'AA0000', 'Actualización de iventario', '', 'Inventario > Actualizar: <b>Leche</b> con <b>1.2 Litro (l)</b>', '2016-03-25 04:07:11', '::1', 'Éxitoso', 0),
(23, 'AA0000', 'Actualización de iventario', '', 'Inventario > Actualizar: <b>Carne</b> con <b>1.45 Kilogramo (kg)</b>', '2016-03-25 04:08:56', '::1', 'Éxitoso', 0),
(24, 'AA0000', 'Actualización de iventario', '', 'Inventario > Retirado: <b>2.3 Litro (l)</b> de <b>Leche</b>', '2016-03-25 04:10:26', '::1', 'Éxitoso', 0),
(25, 'AA0000', 'Registro de Menú', '', 'Administrador > Menú > Agregar Menú > Menú: Menú nocturno', '2016-03-25 04:11:07', '::1', '¡Éxitoso!', 0),
(26, 'AA0000', 'Actualizar Menú', '', 'Administrador > Menú > Seleccionado: Menú nocturno', '2016-03-25 04:11:11', '::1', '¡Éxitoso!', 0),
(27, 'AA0000', 'Actualizar Menú', '', 'Administrador > Menú > Seleccionado: Menú inicial', '2016-03-25 04:11:13', '::1', '¡Éxitoso!', 0),
(28, 'AA0000', 'Agregar nuevo plato o categoria', '', 'Menú > Añadir > Plato o categoría: Gelato', '2016-03-25 04:11:37', '::1', '¡Exitóso!', 0),
(29, 'AA0000', 'Actualizar Menú', '', 'Administrador > Menú > Seleccionado: Menú nocturno', '2016-03-25 04:11:46', '::1', '¡Éxitoso!', 0),
(30, 'AA0000', 'Actualizar Menú', '', 'Administrador > Menú > Seleccionado: Menú inicial', '2016-03-25 04:12:06', '::1', '¡Éxitoso!', 0),
(31, 'AA0000', 'Registro de Orden', '', 'Menú > Ordenar > Mesa:  1 - Orden: OD162403234254', '2016-03-25 04:12:54', '::1', '¡Éxitoso!', 0),
(32, 'AA0000', 'Registro de Orden', '', 'Menú > Ordenar > Mesa:  2 - Orden: OD162403234325', '2016-03-25 04:13:25', '::1', '¡Éxitoso!', 0),
(33, 'AA0000', 'Ingresar nuevo usuario', 'AA0001', 'Administrador > Usuario > Ingresar Usuario', '2016-03-25 04:31:44', '::1', '¡Cambios guardados con éxito!', 0),
(34, 'AA0000', 'Ingresar nuevo usuario', 'AA0002', 'Administrador > Usuario > Ingresar Usuario', '2016-03-25 04:32:11', '::1', '¡Cambios guardados con éxito!', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data07`
--

CREATE TABLE `data07` (
  `id` int(2) NOT NULL,
  `Medida` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Abreviatura` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data07`
--

INSERT INTO `data07` (`id`, `Medida`, `Abreviatura`) VALUES
(1, 'Kilogramos', 'kg'),
(2, 'Litros', 'l'),
(3, 'Unidad', 'U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data08`
--

CREATE TABLE `data08` (
  `Lote` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numero de Lote',
  `id_user` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que actualiza',
  `Cantidad` decimal(11,3) NOT NULL,
  `Tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `FechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaCaducidad` date NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data08`
--

INSERT INTO `data08` (`Lote`, `id_user`, `Cantidad`, `Tipo`, `FechaIngreso`, `FechaCaducidad`, `IdProducto`) VALUES
('LT160324233121', 'AA0000', '6.000', 'Kilogramo (kg)', '2016-03-25 04:01:21', '2016-03-31', 1),
('LT160324233307', 'AA0000', '5.000', 'Litro (l)', '2016-03-25 04:03:07', '2016-03-31', 2),
('LT160324233558', 'AA0000', '1.000', 'Litro (l)', '2016-03-25 04:05:58', '2016-03-31', 2),
('LT160324233711', 'AA0000', '1.000', 'Litro (l)', '2016-03-25 04:07:11', '2016-03-31', 2),
('LT160324233856', 'AA0000', '1.450', 'Kilogramo (kg)', '2016-03-25 04:08:56', '2016-03-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data09`
--

CREATE TABLE `data09` (
  `id` int(11) NOT NULL,
  `id_user` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que actualiza',
  `Cantidad` decimal(11,3) NOT NULL,
  `Tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `FechaRegistro` datetime NOT NULL,
  `Motivo` text COLLATE utf8_unicode_ci NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data09`
--

INSERT INTO `data09` (`id`, `id_user`, `Cantidad`, `Tipo`, `FechaRegistro`, `Motivo`, `IdProducto`) VALUES
(1, 'AA0000', '2.000', 'Litro (l)', '2016-03-24 23:33:25', 'Caducado', 2),
(2, 'AA0000', '2.300', 'Litro (l)', '2016-03-24 23:40:26', 'Retirado', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data10`
--

CREATE TABLE `data10` (
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL,
  `id_menu` int(11) NOT NULL COMMENT 'Menu activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data10`
--

INSERT INTO `data10` (`id`, `Nombre`, `Estado`, `id_menu`) VALUES
('ME01', 'Entrada', 1, 0),
('ME02', 'Sopas', 1, 0),
('ME03', 'Plato Principal', 1, 0),
('ME04', 'Contornos', 1, 0),
('ME05', 'Bebidas', 1, 0),
('ME06', 'Postres', 1, 0),
('ME07', 'Refrescos', 1, 0),
('ME08', 'Pizzas', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data11`
--

CREATE TABLE `data11` (
  `MesaNumero` int(11) NOT NULL,
  `Estado` int(1) NOT NULL,
  `Motivos` text COLLATE utf8_unicode_ci NOT NULL,
  `EstadoActual` int(1) NOT NULL COMMENT 'Estado actual de la mesa',
  `NumeroOrdenActivo` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numeo de orden que esta en la mesa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data11`
--

INSERT INTO `data11` (`MesaNumero`, `Estado`, `Motivos`, `EstadoActual`, `NumeroOrdenActivo`) VALUES
(1, 1, '', 0, '0'),
(2, 1, '', 0, '0'),
(3, 1, '', 0, ''),
(4, 1, '', 0, ''),
(5, 1, '', 0, ''),
(6, 1, '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data12`
--

CREATE TABLE `data12` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id nivel arriba',
  `Nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `Nivel` int(1) NOT NULL,
  `Subniveles` int(1) NOT NULL,
  `Estado` int(1) NOT NULL,
  `Platillo` int(1) NOT NULL,
  `Costo` decimal(11,2) NOT NULL,
  `Ingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_menu` int(11) NOT NULL COMMENT 'Menú activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data12`
--

INSERT INTO `data12` (`id`, `sub_id`, `Nombre`, `Nivel`, `Subniveles`, `Estado`, `Platillo`, `Costo`, `Ingreso`, `Actualizado`, `id_menu`) VALUES
('ME0301', 'ME03', 'Carnes', 1, 1, 1, 1, '0.00', '2016-03-25 03:53:45', '2016-03-25 03:53:45', 0),
('ME0302', 'ME03', 'Pollos', 1, 1, 1, 1, '0.00', '2016-03-25 03:53:57', '2016-03-25 03:53:57', 0),
('ME0303', 'ME03', 'Pastas', 1, 1, 1, 1, '0.00', '2016-03-25 03:54:24', '2016-03-25 03:54:24', 0),
('ME0601', 'ME06', 'Gelato', 1, 0, 1, 1, '200.00', '2016-03-25 04:11:37', '2016-03-25 04:11:37', 2),
('ME0701', 'ME07', 'Pepsi', 1, 1, 1, 1, '0.00', '2016-03-25 03:59:05', '2016-03-25 03:59:05', 0),
('ME070101', 'ME0701', 'Lata', 2, 0, 1, 1, '200.00', '2016-03-25 03:59:31', '2016-03-25 03:59:31', 0),
('ME070102', 'ME0701', 'Bomba', 2, 0, 1, 1, '250.00', '2016-03-25 03:59:52', '2016-03-25 03:59:52', 0),
('ME0801', 'ME08', 'Cuatro Quesos', 1, 1, 1, 1, '0.00', '2016-03-25 03:55:14', '2016-03-25 03:57:26', 0),
('ME080101', 'ME0801', 'Pequeña', 2, 0, 1, 1, '1200.00', '2016-03-25 03:56:17', '2016-03-25 03:56:17', 0),
('ME080102', 'ME0801', 'Mediana', 2, 0, 1, 1, '1500.00', '2016-03-25 03:56:44', '2016-03-25 03:56:44', 0),
('ME080103', 'ME0801', 'Grande', 2, 0, 1, 1, '2300.00', '2016-03-25 03:57:11', '2016-03-25 03:57:11', 0),
('ME0802', 'ME08', 'Tovareña', 1, 1, 1, 1, '0.00', '2016-03-25 03:55:33', '2016-03-25 03:55:33', 0),
('ME080201', 'ME0802', 'Pequeña', 2, 0, 1, 0, '1200.00', '2016-03-25 03:58:00', '2016-03-25 03:58:00', 0),
('ME080202', 'ME0802', 'Mediana', 2, 0, 1, 0, '1600.00', '2016-03-25 03:58:16', '2016-03-25 03:58:16', 0),
('ME080203', 'ME0802', 'Grande', 2, 0, 1, 0, '2500.00', '2016-03-25 03:58:40', '2016-03-25 03:58:40', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data13`
--

CREATE TABLE `data13` (
  `IdOrden` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numero de Orden',
  `Mesa` int(11) NOT NULL COMMENT 'Numero de Mesa',
  `FechaDePedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de Pedido',
  `Estatus` int(1) NOT NULL COMMENT 'Estado del pedido',
  `UsuarioOrdena` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que hace la orden.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Pedidos';

--
-- Volcado de datos para la tabla `data13`
--

INSERT INTO `data13` (`IdOrden`, `Mesa`, `FechaDePedido`, `Estatus`, `UsuarioOrdena`) VALUES
('OD162403234254', 1, '2016-03-25 04:12:54', 0, 'AA0000'),
('OD162403234325', 2, '2016-03-25 04:13:25', 0, 'AA0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data14`
--

CREATE TABLE `data14` (
  `Id` int(11) NOT NULL,
  `Orden` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id de la orden o pedido',
  `IdPlato` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id del plato',
  `Costo` decimal(11,2) NOT NULL COMMENT 'Costo del plato',
  `Personalizado` int(1) NOT NULL COMMENT 'Indica si es plato personalizado',
  `Cantidad` int(2) NOT NULL COMMENT 'Cantidad de la orden',
  `IdPerCan` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id pedl pedido personalizado',
  `Despacho` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data14`
--

INSERT INTO `data14` (`Id`, `Orden`, `IdPlato`, `Costo`, `Personalizado`, `Cantidad`, `IdPerCan`, `Despacho`) VALUES
(1, 'OD162403234254', 'ME080102', '1500.00', 0, 1, '', 1),
(2, 'OD162403234325', 'ME080103', '2300.00', 0, 1, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data15`
--

CREATE TABLE `data15` (
  `Id` int(11) NOT NULL,
  `IdPersolizado` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id de la orden o pedido',
  `IdPlatoSec` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id del plato',
  `CostoSec` decimal(11,2) NOT NULL COMMENT 'Costo del plato'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data16`
--

CREATE TABLE `data16` (
  `IdOrden` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numero de Orden',
  `Mesa` int(11) NOT NULL COMMENT 'Numero de Mesa',
  `FechaDePedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de Pedido',
  `Estatus` int(1) NOT NULL COMMENT 'Estado del pedido',
  `UsuarioOrdena` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que hace la orden.',
  `UsuarioBorra` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que borra la orden.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Pedidos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data17`
--

CREATE TABLE `data17` (
  `id` int(11) NOT NULL,
  `NombreMenu` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del menú',
  `Estado` int(1) NOT NULL COMMENT 'Estado del menú',
  `Activo` int(1) NOT NULL COMMENT 'Activo o inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Menús del sistemas';

--
-- Volcado de datos para la tabla `data17`
--

INSERT INTO `data17` (`id`, `NombreMenu`, `Estado`, `Activo`) VALUES
(1, 'Menú inicial', 1, 1),
(2, 'Menú nocturno', 0, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista00`
--
CREATE TABLE `vista00` (
`IdUsuario` int(11)
,`Cedula` varchar(20)
,`PrimerNombre` varchar(250)
,`PrimerApellido` varchar(250)
,`Usuario` varchar(20)
,`Pass` varchar(40)
,`Estado` int(1)
,`IdRol` int(11)
,`NombreRol` varchar(100)
,`RolEstado` int(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista01`
--
CREATE TABLE `vista01` (
`id` varchar(11)
,`NombreModulo` varchar(200)
,`Modulo` varchar(200)
,`Niveles` int(2)
,`IdRol` int(11)
,`NombreRol` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista02`
--
CREATE TABLE `vista02` (
`id` int(11)
,`CodigoTbr` varchar(7)
,`Type` varchar(3)
,`Cedula` varchar(20)
,`PrimerNombre` varchar(250)
,`SegundoNombre` varchar(100)
,`PrimerApellido` varchar(250)
,`SegundoApellido` varchar(100)
,`Usuario` varchar(20)
,`Pass` varchar(40)
,`FechaIngreso` timestamp
,`Estado` int(1)
,`Rol` int(1)
,`TypeCedula` varchar(23)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista03`
--
CREATE TABLE `vista03` (
`id` int(11)
,`NombreProducto` varchar(160)
,`Descripcion` text
,`Existencia` int(11)
,`TipoUnidad` int(1)
,`Estado` int(1)
,`FechaIng` timestamp
,`Medida` varchar(50)
,`Abreviatura` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista04`
--
CREATE TABLE `vista04` (
`Lote` varchar(20)
,`Cantidad` decimal(11,3)
,`Tipo` varchar(15)
,`FechaIngreso` timestamp
,`FechaCaducidad` date
,`IdProducto` int(11)
,`id` int(11)
,`NombreProducto` varchar(160)
,`Descripcion` text
,`Existencia` int(11)
,`TipoUnidad` int(1)
,`Estado` int(1)
,`FechaIng` timestamp
,`Medida` varchar(50)
,`Abreviatura` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista05`
--
CREATE TABLE `vista05` (
`MesaNumero` int(11)
,`Estado` int(1)
,`Motivos` text
,`EstadoActual` int(1)
,`NumeroOrdenActivo` varchar(14)
,`IdOrden` varchar(14)
,`Mesa` int(11)
,`FechaDePedido` timestamp
,`Estatus` int(1)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista06`
--
CREATE TABLE `vista06` (
`Despacho` int(1)
,`id` varchar(8)
,`Nombre` text
,`Nivel` int(1)
,`Subniveles` int(1)
,`Estado` int(1)
,`Platillo` int(1)
,`Costo` decimal(11,2)
,`Ingreso` timestamp
,`Actualizado` timestamp
,`Orden` varchar(14)
,`DeCosto` decimal(11,2)
,`Personalizado` int(1)
,`Cantidad` int(2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista07`
--
CREATE TABLE `vista07` (
`id` varchar(8)
,`Nombre` text
,`Nivel` int(1)
,`Subniveles` int(1)
,`Estado` int(1)
,`Platillo` int(1)
,`Costo` decimal(11,2)
,`Ingreso` timestamp
,`Actualizado` timestamp
,`IdPersolizado` varchar(35)
,`CostoSec` decimal(11,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista08`
--
CREATE TABLE `vista08` (
`id` int(11)
,`IdOperador` varchar(7)
,`Registro` varchar(200)
,`IdDatoUsuario` varchar(7)
,`Módulo` text
,`Fecha` timestamp
,`IP` varchar(15)
,`Estado` text
,`Tipo` int(1)
,`PrimerNombre` varchar(250)
,`PrimerApellido` varchar(250)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista09`
--
CREATE TABLE `vista09` (
`id` varchar(8)
,`Nombre` text
,`Nivel` int(1)
,`Subniveles` int(1)
,`Estado` int(1)
,`Platillo` int(1)
,`Costo` decimal(11,2)
,`Ingreso` timestamp
,`Actualizado` timestamp
,`Idoden` int(11)
,`Orden` varchar(14)
,`DeCosto` decimal(11,2)
,`Personalizado` int(1)
,`Cantidad` int(2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista10`
--
CREATE TABLE `vista10` (
`id` varchar(8)
,`Nombre` text
,`Nivel` int(1)
,`Subniveles` int(1)
,`Estado` int(1)
,`Platillo` int(1)
,`Costo` decimal(11,2)
,`Ingreso` timestamp
,`Actualizado` timestamp
,`IdPer` int(11)
,`IdPersolizado` varchar(35)
,`CostoSec` decimal(11,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista11`
--
CREATE TABLE `vista11` (
`id` int(11)
,`id_user` varchar(7)
,`Cantidad` decimal(11,3)
,`Tipo` varchar(15)
,`FechaRegistro` datetime
,`Motivo` text
,`IdProducto` int(11)
,`NombreProducto` varchar(160)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista00`
--
DROP TABLE IF EXISTS `vista00`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista00`  AS  select `data02`.`id` AS `IdUsuario`,`data02`.`Cedula` AS `Cedula`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`PrimerApellido` AS `PrimerApellido`,`data02`.`Usuario` AS `Usuario`,`data02`.`Pass` AS `Pass`,`data02`.`Estado` AS `Estado`,`data03`.`id` AS `IdRol`,`data03`.`NombreRol` AS `NombreRol`,`data03`.`Estado` AS `RolEstado` from (`data02` join `data03` on((`data02`.`Rol` = `data03`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista01`
--
DROP TABLE IF EXISTS `vista01`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista01`  AS  select `data01`.`id` AS `id`,`data01`.`NombreModulo` AS `NombreModulo`,`data01`.`Modulo` AS `Modulo`,`data01`.`Niveles` AS `Niveles`,`data03`.`id` AS `IdRol`,`data03`.`NombreRol` AS `NombreRol` from ((`data04` join `data01` on((`data04`.`IdModulo` = `data01`.`id`))) join `data03` on((`data04`.`IdRol` = `data03`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista02`
--
DROP TABLE IF EXISTS `vista02`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista02`  AS  select `data02`.`id` AS `id`,`data02`.`CodigoTbr` AS `CodigoTbr`,`data02`.`Type` AS `Type`,`data02`.`Cedula` AS `Cedula`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`SegundoNombre` AS `SegundoNombre`,`data02`.`PrimerApellido` AS `PrimerApellido`,`data02`.`SegundoApellido` AS `SegundoApellido`,`data02`.`Usuario` AS `Usuario`,`data02`.`Pass` AS `Pass`,`data02`.`FechaIngreso` AS `FechaIngreso`,`data02`.`Estado` AS `Estado`,`data02`.`Rol` AS `Rol`,concat(`data02`.`Type`,`data02`.`Cedula`) AS `TypeCedula` from `data02` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista03`
--
DROP TABLE IF EXISTS `vista03`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista03`  AS  select `data05`.`id` AS `id`,`data05`.`NombreProducto` AS `NombreProducto`,`data05`.`Descripcion` AS `Descripcion`,`data05`.`Existencia` AS `Existencia`,`data05`.`TipoUnidad` AS `TipoUnidad`,`data05`.`Estado` AS `Estado`,`data05`.`FechaIng` AS `FechaIng`,`data07`.`Medida` AS `Medida`,`data07`.`Abreviatura` AS `Abreviatura` from (`data05` join `data07` on((`data05`.`TipoUnidad` = `data07`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista04`
--
DROP TABLE IF EXISTS `vista04`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista04`  AS  select `data08`.`Lote` AS `Lote`,`data08`.`Cantidad` AS `Cantidad`,`data08`.`Tipo` AS `Tipo`,`data08`.`FechaIngreso` AS `FechaIngreso`,`data08`.`FechaCaducidad` AS `FechaCaducidad`,`data08`.`IdProducto` AS `IdProducto`,`vista03`.`id` AS `id`,`vista03`.`NombreProducto` AS `NombreProducto`,`vista03`.`Descripcion` AS `Descripcion`,`vista03`.`Existencia` AS `Existencia`,`vista03`.`TipoUnidad` AS `TipoUnidad`,`vista03`.`Estado` AS `Estado`,`vista03`.`FechaIng` AS `FechaIng`,`vista03`.`Medida` AS `Medida`,`vista03`.`Abreviatura` AS `Abreviatura` from (`data08` join `vista03` on((`data08`.`IdProducto` = `vista03`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista05`
--
DROP TABLE IF EXISTS `vista05`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista05`  AS  select `data11`.`MesaNumero` AS `MesaNumero`,`data11`.`Estado` AS `Estado`,`data11`.`Motivos` AS `Motivos`,`data11`.`EstadoActual` AS `EstadoActual`,`data11`.`NumeroOrdenActivo` AS `NumeroOrdenActivo`,`data13`.`IdOrden` AS `IdOrden`,`data13`.`Mesa` AS `Mesa`,`data13`.`FechaDePedido` AS `FechaDePedido`,`data13`.`Estatus` AS `Estatus` from (`data11` join `data13` on((`data11`.`NumeroOrdenActivo` = `data13`.`IdOrden`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista06`
--
DROP TABLE IF EXISTS `vista06`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista06`  AS  select `data14`.`Despacho` AS `Despacho`,`data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data14`.`Orden` AS `Orden`,`data14`.`Costo` AS `DeCosto`,`data14`.`Personalizado` AS `Personalizado`,`data14`.`Cantidad` AS `Cantidad` from (`data12` join `data14` on((`data12`.`id` = `data14`.`IdPlato`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista07`
--
DROP TABLE IF EXISTS `vista07`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista07`  AS  select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data15`.`IdPersolizado` AS `IdPersolizado`,`data15`.`CostoSec` AS `CostoSec` from (`data12` join `data15` on((`data12`.`id` = `data15`.`IdPlatoSec`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista08`
--
DROP TABLE IF EXISTS `vista08`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista08`  AS  select `data06`.`id` AS `id`,`data06`.`IdOperador` AS `IdOperador`,`data06`.`Registro` AS `Registro`,`data06`.`IdDatoUsuario` AS `IdDatoUsuario`,`data06`.`Módulo` AS `Módulo`,`data06`.`Fecha` AS `Fecha`,`data06`.`IP` AS `IP`,`data06`.`Estado` AS `Estado`,`data06`.`Tipo` AS `Tipo`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`PrimerApellido` AS `PrimerApellido` from (`data06` join `data02` on((`data06`.`IdOperador` = `data02`.`CodigoTbr`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista09`
--
DROP TABLE IF EXISTS `vista09`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista09`  AS  select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data14`.`Id` AS `Idoden`,`data14`.`Orden` AS `Orden`,`data14`.`Costo` AS `DeCosto`,`data14`.`Personalizado` AS `Personalizado`,`data14`.`Cantidad` AS `Cantidad` from (`data12` join `data14` on((`data12`.`id` = `data14`.`IdPlato`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista10`
--
DROP TABLE IF EXISTS `vista10`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista10`  AS  select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data15`.`Id` AS `IdPer`,`data15`.`IdPersolizado` AS `IdPersolizado`,`data15`.`CostoSec` AS `CostoSec` from (`data12` join `data15` on((`data12`.`id` = `data15`.`IdPlatoSec`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista11`
--
DROP TABLE IF EXISTS `vista11`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista11`  AS  select `data09`.`id` AS `id`,`data09`.`id_user` AS `id_user`,`data09`.`Cantidad` AS `Cantidad`,`data09`.`Tipo` AS `Tipo`,`data09`.`FechaRegistro` AS `FechaRegistro`,`data09`.`Motivo` AS `Motivo`,`data09`.`IdProducto` AS `IdProducto`,`data05`.`NombreProducto` AS `NombreProducto` from (`data09` join `data05` on((`data09`.`IdProducto` = `data05`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data00`
--
ALTER TABLE `data00`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data01`
--
ALTER TABLE `data01`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data02`
--
ALTER TABLE `data02`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data03`
--
ALTER TABLE `data03`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data05`
--
ALTER TABLE `data05`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data06`
--
ALTER TABLE `data06`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data07`
--
ALTER TABLE `data07`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `data08`
--
ALTER TABLE `data08`
  ADD PRIMARY KEY (`Lote`);

--
-- Indices de la tabla `data09`
--
ALTER TABLE `data09`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data10`
--
ALTER TABLE `data10`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `data11`
--
ALTER TABLE `data11`
  ADD PRIMARY KEY (`MesaNumero`);

--
-- Indices de la tabla `data12`
--
ALTER TABLE `data12`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `data13`
--
ALTER TABLE `data13`
  ADD PRIMARY KEY (`IdOrden`);

--
-- Indices de la tabla `data14`
--
ALTER TABLE `data14`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `data15`
--
ALTER TABLE `data15`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `data16`
--
ALTER TABLE `data16`
  ADD PRIMARY KEY (`IdOrden`);

--
-- Indices de la tabla `data17`
--
ALTER TABLE `data17`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data00`
--
ALTER TABLE `data00`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `data02`
--
ALTER TABLE `data02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `data03`
--
ALTER TABLE `data03`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `data05`
--
ALTER TABLE `data05`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `data06`
--
ALTER TABLE `data06`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `data07`
--
ALTER TABLE `data07`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `data09`
--
ALTER TABLE `data09`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `data11`
--
ALTER TABLE `data11`
  MODIFY `MesaNumero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `data14`
--
ALTER TABLE `data14`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `data15`
--
ALTER TABLE `data15`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `data17`
--
ALTER TABLE `data17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
