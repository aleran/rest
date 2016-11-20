-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2016 a las 14:50:45
-- Versión del servidor: 5.5.53-0+deb8u1
-- Versión de PHP: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `core_cio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data00`
--

CREATE TABLE IF NOT EXISTS `data00` (
`id` int(11) NOT NULL,
  `NombreSistema` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL,
  `Code` varchar(6) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Contador de código',
  `MesaNumero` int(2) NOT NULL,
  `update` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Nombre del sistema';

--
-- Volcado de datos para la tabla `data00`
--

INSERT INTO `data00` (`id`, `NombreSistema`, `Estado`, `Code`, `MesaNumero`, `update`) VALUES
(1, 'El Emperador', 1, 'AA0011', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data01`
--

CREATE TABLE IF NOT EXISTS `data01` (
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

CREATE TABLE IF NOT EXISTS `data02` (
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Usuarios que manejarán el sistema';

--
-- Volcado de datos para la tabla `data02`
--

INSERT INTO `data02` (`id`, `CodigoTbr`, `Type`, `Cedula`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Usuario`, `Pass`, `FechaIngreso`, `Estado`, `Rol`) VALUES
(1, 'AA0000', 'V.-', '00000000', 'Administrador', '', 'Del sistema', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2016-03-25 03:07:25', 1, 1),
(11, 'AA0010', 'V.-', '12345678', 'Ral', 'Ral', 'Ral', 'Ral', 'ral', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-20 18:40:26', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data03`
--

CREATE TABLE IF NOT EXISTS `data03` (
`id` int(11) NOT NULL,
  `NombreRol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Roles de usuarios, limites de uso del sistema.';

--
-- Volcado de datos para la tabla `data03`
--

INSERT INTO `data03` (`id`, `NombreRol`, `Estado`) VALUES
(1, 'root', 1),
(4, 'Caja', 1),
(5, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data04`
--

CREATE TABLE IF NOT EXISTS `data04` (
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
(2, 'x040303', 1),
(3, 'a00', 1),
(3, 'a0001', 1),
(3, 'a0003', 1),
(3, 'w02', 1),
(3, 'w0201', 1),
(5, 'a00', 1),
(5, 'a0001', 1),
(5, 'a0002', 1),
(5, 'a0003', 1),
(5, 'a01', 1),
(5, 'a0101', 1),
(5, 'a0102', 1),
(5, 'a0103', 1),
(5, 'a0104', 1),
(5, 'a0105', 1),
(5, 'w01', 1),
(5, 'w0101', 1),
(5, 'w0102', 1),
(5, 'w0103', 1),
(5, 'w0104', 1),
(5, 'w02', 1),
(5, 'w0201', 1),
(5, 'w0202', 1),
(5, 'w020201', 1),
(5, 'w020202', 1),
(5, 'w0203', 1),
(5, 'w020301', 1),
(5, 'w020302', 1),
(5, 'x01', 1),
(5, 'x0101', 1),
(5, 'x010101', 1),
(5, 'x010102', 1),
(5, 'x010103', 1),
(5, 'x0103', 1),
(5, 'x02', 1),
(5, 'x0201', 1),
(5, 'x0202', 1),
(5, 'x05', 1),
(5, 'x0501', 1),
(4, 'a00', 1),
(4, 'a0001', 1),
(4, 'a0002', 1),
(4, 'a0003', 1),
(4, 'a01', 1),
(4, 'a0101', 1),
(4, 'a0105', 1),
(4, 'x05', 1),
(4, 'x0501', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data05`
--

CREATE TABLE IF NOT EXISTS `data05` (
`id` int(11) NOT NULL,
  `NombreProducto` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `Existencia` int(11) NOT NULL DEFAULT '0',
  `TipoUnidad` int(1) NOT NULL,
  `Estado` int(1) NOT NULL,
  `FechaIng` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Inventario del sistema';

--
-- Volcado de datos para la tabla `data05`
--

INSERT INTO `data05` (`id`, `NombreProducto`, `Descripcion`, `Existencia`, `TipoUnidad`, `Estado`, `FechaIng`) VALUES
(1, 'Cebolla', 'Nada', 5000, 1, 1, '2016-11-20 07:29:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data06`
--

CREATE TABLE IF NOT EXISTS `data06` (
`id` int(11) NOT NULL,
  `IdOperador` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Registro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IdDatoUsuario` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Módulo` text COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` text COLLATE utf8_unicode_ci NOT NULL,
  `Tipo` int(1) NOT NULL COMMENT 'Error o Éxito'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Actividad del sistema';

--
-- Volcado de datos para la tabla `data06`
--

INSERT INTO `data06` (`id`, `IdOperador`, `Registro`, `IdDatoUsuario`, `Módulo`, `Fecha`, `IP`, `Estado`, `Tipo`) VALUES
(1, 'AA0000', 'Ingresar nuevo usuario', 'AA0010', 'Administrador > Usuario > Ingresar Usuario', '2016-11-20 18:40:26', '::1', '¡Cambios guardados con éxito!', 0),
(2, 'AA0010', 'Registro de Orden', '', 'Menú > Ordenar > Mesa:  1 - Orden: OD162011144104', '2016-11-20 18:41:04', '::1', '¡Éxitoso!', 0),
(3, 'AA0010', 'Cambio de Orden', '', 'Menú > Ordenar > Mesa:  1 - Orden: OD162011144104', '2016-11-20 18:43:12', '::1', '¡Éxitoso!', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data07`
--

CREATE TABLE IF NOT EXISTS `data07` (
`id` int(2) NOT NULL,
  `Medida` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Abreviatura` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `data08` (
  `Lote` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numero de Lote',
  `id_user` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que actualiza',
  `Cantidad` decimal(11,3) NOT NULL,
  `Tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `FechaIngreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FechaCaducidad` date NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data09`
--

CREATE TABLE IF NOT EXISTS `data09` (
`id` int(11) NOT NULL,
  `id_user` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuario que actualiza',
  `Cantidad` decimal(11,3) NOT NULL,
  `Tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `FechaRegistro` datetime NOT NULL,
  `Motivo` text COLLATE utf8_unicode_ci NOT NULL,
  `IdProducto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data10`
--

CREATE TABLE IF NOT EXISTS `data10` (
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
('ME04', 'Guarniciones', 1, 0),
('ME05', 'Bebidas', 1, 0),
('ME06', 'Postres', 1, 0),
('ME07', 'Refrescos', 1, 0),
('ME08', 'Pizzas', 1, 2),
('ME09', 'Ensaladas', 1, 0),
('ME10', 'Comida rápida', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data11`
--

CREATE TABLE IF NOT EXISTS `data11` (
`MesaNumero` int(11) NOT NULL,
  `Estado` int(1) NOT NULL,
  `Motivos` text COLLATE utf8_unicode_ci NOT NULL,
  `EstadoActual` int(1) NOT NULL COMMENT 'Estado actual de la mesa',
  `NumeroOrdenActivo` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Numeo de orden que esta en la mesa'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data11`
--

INSERT INTO `data11` (`MesaNumero`, `Estado`, `Motivos`, `EstadoActual`, `NumeroOrdenActivo`) VALUES
(1, 1, '', 3, 'OD162011144104'),
(2, 1, '', 0, '0'),
(3, 1, '', 0, '0'),
(4, 1, '', 0, '0'),
(5, 1, '', 0, '0'),
(6, 1, '', 0, '0'),
(7, 1, '', 0, '0'),
(8, 1, '', 0, '0'),
(9, 1, '', 0, '0'),
(10, 1, '', 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data12`
--

CREATE TABLE IF NOT EXISTS `data12` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id nivel arriba',
  `Nombre` text COLLATE utf8_unicode_ci NOT NULL,
  `Nivel` int(1) NOT NULL,
  `Subniveles` int(1) NOT NULL,
  `Estado` int(1) NOT NULL,
  `Platillo` int(1) NOT NULL,
  `Costo` decimal(11,2) NOT NULL,
  `Ingreso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_menu` int(11) NOT NULL COMMENT 'Menú activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data12`
--

INSERT INTO `data12` (`id`, `sub_id`, `Nombre`, `Nivel`, `Subniveles`, `Estado`, `Platillo`, `Costo`, `Ingreso`, `Actualizado`, `id_menu`) VALUES
('ME0110', 'ME01', 'Pan al ajillo', 1, 0, 0, 1, 500.00, '2016-03-27 20:31:31', '2016-06-06 15:30:53', 0),
('ME0111', 'ME01', 'Servicio De Tajadas', 1, 0, 1, 1, 900.00, '2016-03-27 20:32:10', '2016-06-06 15:34:27', 0),
('ME0112', 'ME01', 'Queso Blanco A La Plancha', 1, 0, 1, 1, 900.00, '2016-03-27 20:33:16', '2016-06-06 15:35:22', 0),
('ME0113', 'ME01', 'Nata ', 1, 0, 1, 1, 500.00, '2016-03-27 20:35:14', '2016-06-06 15:35:48', 0),
('ME0114', 'ME01', 'Servicio De Tostones', 1, 0, 1, 1, 1000.00, '2016-03-27 20:36:15', '2016-06-06 15:37:16', 0),
('ME0115', 'ME01', '', 1, 0, 0, 1, 1500.00, '2016-03-27 20:36:56', '2016-06-06 15:37:57', 0),
('ME0117', 'ME01', 'Papas fritas ', 1, 0, 1, 1, 1500.00, '2016-03-27 20:40:15', '2016-05-16 15:50:35', 0),
('ME0118', 'ME01', 'Arepitas', 1, 0, 1, 1, 900.00, '2016-06-06 15:36:27', '2016-06-06 15:36:27', 0),
('ME0119', 'ME01', 'papas al graten', 1, 0, 1, 1, 5000.00, '0000-00-00 00:00:00', '2016-11-20 18:13:01', 0),
('ME0201', 'ME02', 'Cebolla', 1, 0, 1, 1, 1500.00, '2016-03-27 20:42:59', '2016-06-06 16:16:14', 0),
('ME0202', 'ME02', 'Sopa del Dia', 1, 0, 1, 1, 1500.00, '2016-03-29 16:22:18', '2016-06-06 16:15:46', 0),
('ME0203', 'ME02', 'Sopa De Mariscos', 1, 1, 0, 1, 2000.00, '2016-06-06 16:16:57', '2016-06-06 16:42:54', 0),
('ME020301', 'ME0203', 'crema', 2, 0, 1, 1, 0.00, '2016-04-14 16:55:46', '2016-06-06 16:41:30', 0),
('ME020302', 'ME02', 'crema de auyama', 2, 0, 1, 1, 800.00, '2016-05-13 16:55:28', '2016-05-13 16:55:28', 0),
('ME020303', 'ME0203', 'Sopa De Mariscos', 2, 0, 1, 0, 2000.00, '2016-06-06 16:57:10', '2016-06-06 16:57:10', 0),
('ME0301', 'ME03', 'Aves', 1, 1, 1, 1, 0.00, '2016-03-26 20:22:31', '2016-03-26 20:22:31', 0),
('ME030109', 'ME0301', 'Pechuga Bocadito De Cielo', 2, 0, 1, 0, 2900.00, '2016-03-27 20:45:42', '2016-06-06 15:39:30', 0),
('ME030114', 'ME0301', 'Pechuga a la plancha', 2, 0, 1, 0, 2500.00, '2016-03-27 20:49:56', '2016-06-06 15:45:03', 0),
('ME030117', 'ME0301', 'Pechuga cuatro quesos al graten', 2, 0, 1, 0, 2700.00, '2016-03-27 20:58:30', '2016-06-06 15:45:47', 0),
('ME030118', 'ME0301', 'Pechuga Con Champiñones', 2, 0, 1, 0, 2900.00, '2016-03-27 20:59:04', '2016-06-06 15:40:09', 0),
('ME030120', 'ME0301', 'Pechuga al ajillo', 2, 0, 1, 0, 2700.00, '2016-03-27 20:59:22', '2016-06-06 15:42:18', 0),
('ME030121', 'ME0301', 'Strogonoff De Pollo', 2, 0, 1, 0, 2600.00, '2016-03-27 21:00:19', '2016-06-06 15:41:32', 0),
('ME030122', 'ME0301', 'Nuggets De Pollo Con Papas Fritas ', 2, 0, 1, 0, 2900.00, '2016-03-27 21:00:36', '2016-06-06 15:46:39', 0),
('ME030123', 'ME0301', '', 2, 0, 0, 0, 2200.00, '2016-03-27 21:06:50', '2016-06-06 15:43:46', 0),
('ME030124', 'ME0301', '', 2, 0, 0, 0, 0.00, '2016-03-27 21:24:32', '2016-06-06 15:44:16', 0),
('ME0302', 'ME03', 'Carnes', 1, 1, 1, 1, 0.00, '2016-03-26 20:31:44', '2016-03-26 20:31:44', 0),
('ME030205', 'ME0302', 'Lomito Al Cielo', 2, 0, 1, 0, 3200.00, '2016-03-27 21:12:21', '2016-06-06 15:52:18', 0),
('ME030206', 'ME0302', 'Lomito Bocadito De Cielo', 2, 0, 1, 0, 3200.00, '2016-03-27 21:12:47', '2016-06-06 15:48:58', 0),
('ME030207', 'ME0302', 'Lomito Roquefor', 2, 0, 1, 0, 3000.00, '2016-03-27 21:13:55', '2016-06-06 15:52:04', 0),
('ME030209', 'ME0302', 'Lomito Con Champiñones', 2, 0, 1, 0, 3000.00, '2016-05-02 17:04:27', '2016-06-06 15:49:35', 0),
('ME030210', 'ME0302', 'Strogonoff De Lomito', 2, 0, 1, 0, 2800.00, '2016-05-04 16:05:50', '2016-06-06 15:50:06', 0),
('ME030211', 'ME0302', 'Lomito A La Suisa', 2, 0, 1, 1, 2900.00, '2016-06-06 15:53:35', '2016-06-06 15:53:35', 0),
('ME0303', 'ME03', 'Cerdos', 1, 1, 1, 1, 0.00, '2016-03-26 20:34:47', '2016-03-26 20:34:47', 0),
('ME030305', 'ME0303', '', 2, 0, 0, 0, 2500.00, '2016-03-27 21:18:28', '2016-06-06 15:54:23', 0),
('ME030306', 'ME0303', '', 2, 0, 1, 0, 0.00, '2016-03-27 21:18:49', '2016-06-06 16:12:10', 0),
('ME030307', 'ME0303', '', 2, 0, 0, 0, 2800.00, '2016-05-04 16:06:43', '2016-06-06 15:54:49', 0),
('ME0304', 'ME03', 'Pescados', 1, 1, 1, 1, 0.00, '2016-03-26 20:39:36', '2016-03-26 20:39:36', 0),
('ME030408', 'ME0304', 'Robalo en Salsa Marinera ', 2, 0, 1, 0, 4800.00, '2016-03-27 21:42:31', '2016-06-06 15:59:23', 0),
('ME030410', 'ME0304', 'Robalo Al Ajillo Con Camarones ', 2, 0, 1, 0, 4200.00, '2016-06-06 15:57:59', '2016-06-06 15:57:59', 0),
('ME030411', 'ME0304', 'Robalo Bocadito De Cielo', 2, 0, 1, 0, 4800.00, '2016-06-06 15:58:40', '2016-06-06 15:58:40', 0),
('ME030412', 'ME0304', 'Cazuela De Mariscos ', 2, 0, 1, 0, 3900.00, '2016-06-06 16:00:03', '2016-06-06 16:00:03', 0),
('ME030413', 'ME0304', 'Camarones Al Ajillo', 2, 0, 1, 1, 4900.00, '2016-06-06 16:01:34', '2016-06-06 16:01:34', 0),
('ME030414', 'ME0304', 'Diluvio De Mariscos Gratinados', 2, 0, 1, 1, 4900.00, '2016-06-06 16:02:14', '2016-06-06 16:02:14', 0),
('ME030415', 'ME0304', 'Arroz A La Marinera Para Dos Personas', 2, 0, 1, 1, 7000.00, '2016-06-06 16:03:06', '2016-06-06 16:03:06', 0),
('ME0305', 'ME03', 'Pastas', 1, 1, 1, 1, 0.00, '2016-03-26 20:43:09', '2016-03-26 20:43:09', 0),
('ME030507', 'ME0305', 'Pasta Cuatro Quesos ', 2, 0, 1, 1, 2800.00, '2016-03-27 21:53:31', '2016-06-06 16:04:56', 0),
('ME030508', 'ME0305', 'Pasta a la carbonara ', 2, 0, 1, 1, 2800.00, '2016-03-27 21:53:41', '2016-06-06 16:04:23', 0),
('ME030509', 'ME0305', 'Pasta Alfredo ', 2, 0, 1, 0, 2800.00, '2016-05-13 17:17:35', '2016-06-06 16:07:37', 0),
('ME030510', 'ME0305', 'Pasta a la Bolognesa', 2, 0, 1, 1, 2500.00, '2016-05-16 16:06:20', '2016-06-06 16:06:03', 0),
('ME030511', 'ME0305', 'Pasta A La Marinera ', 2, 0, 1, 1, 3200.00, '2016-06-06 16:09:35', '2016-06-06 16:09:35', 0),
('ME030512', 'ME0305', 'Pasta Duo De Amor', 2, 0, 1, 1, 2500.00, '2016-06-06 16:10:32', '2016-06-06 16:10:32', 0),
('ME0306', 'ME03', 'Plato del Dia', 1, 1, 1, 1, 0.00, '2016-03-29 16:05:01', '2016-03-29 16:05:01', 0),
('ME030601', 'ME0306', '', 2, 0, 1, 0, 0.00, '2016-03-29 16:06:26', '2016-06-06 16:11:41', 0),
('ME030602', 'ME0306', 'carne en salsa de pimenton y tocineta', 2, 0, 0, 1, 1000.00, '2016-04-07 16:31:38', '2016-04-11 16:22:57', 0),
('ME030603', 'ME0306', 'Chuleta al Agridulce', 2, 0, 0, 1, 1000.00, '2016-04-11 16:20:54', '2016-04-12 16:25:29', 0),
('ME030604', 'ME0306', 'lomo de cerdo a la pisayola', 2, 0, 0, 1, 1000.00, '2016-04-12 16:22:32', '2016-04-13 16:27:45', 0),
('ME030605', 'ME0306', 'strogonoff de lomito', 2, 0, 0, 1, 1000.00, '2016-04-13 16:27:13', '2016-04-14 16:20:21', 0),
('ME030606', 'ME0306', 'Pasta Marinera', 2, 0, 0, 1, 3200.00, '2016-04-14 16:21:34', '2016-06-06 16:05:22', 0),
('ME030607', 'ME0306', '', 2, 0, 1, 1, 0.00, '2016-04-15 17:05:16', '2016-06-06 16:12:42', 0),
('ME030608', 'ME0306', 'costillas agridulce', 2, 0, 0, 1, 1500.00, '2016-04-18 16:35:14', '2016-05-09 16:02:10', 0),
('ME030609', 'ME0306', 'Pasta San Gor go', 2, 0, 0, 1, 3200.00, '2016-04-18 16:37:05', '2016-06-06 16:06:42', 0),
('ME030610', 'ME0306', 'lomo de cerdo en salsa criolla', 2, 0, 0, 1, 1200.00, '2016-04-20 16:08:47', '2016-04-21 16:22:52', 0),
('ME030611', 'ME0306', 'milanesa de carne', 2, 0, 0, 0, 1350.00, '2016-04-21 16:19:15', '2016-04-25 15:53:38', 0),
('ME030612', 'ME0306', 'merlusa frita', 2, 0, 0, 1, 1000.00, '2016-04-22 16:21:26', '2016-04-25 15:48:53', 0),
('ME030613', 'ME0306', 'trozos de cerdo frito', 2, 0, 0, 1, 1500.00, '2016-05-04 16:02:27', '2016-05-09 16:02:24', 0),
('ME030614', 'ME0306', 'Parrilla', 2, 0, 0, 1, 4800.00, '2016-05-09 16:03:59', '2016-05-16 16:08:38', 0),
('ME030618', 'ME0306', 'Brochetas Mixtas', 2, 0, 0, 0, 2700.00, '2016-05-18 15:44:28', '2016-05-24 15:30:22', 0),
('ME030619', 'ME0306', 'Costillas de Cerdo al Romero', 2, 0, 0, 0, 2000.00, '2016-05-18 16:30:28', '2016-05-24 15:30:34', 0),
('ME030620', 'ME0306', 'solomo en salsa criolla', 2, 0, 0, 0, 2500.00, '2016-05-19 16:41:53', '2016-05-24 15:30:45', 0),
('ME030621', 'ME0306', 'parrilla mixta con papas salteadas', 2, 0, 0, 1, 2500.00, '2016-05-19 16:44:04', '2016-05-19 16:44:04', 0),
('ME030622', 'ME0306', 'costillas de cerdo al horno', 2, 0, 0, 0, 1800.00, '2016-05-19 16:44:51', '2016-05-19 16:44:51', 0),
('ME030623', 'ME0306', '', 2, 0, 1, 0, 0.00, '2016-05-25 16:55:37', '2016-06-06 16:13:30', 0),
('ME030624', 'ME0306', 'Solomo A La Parrilla', 2, 0, 1, 1, 2500.00, '2016-05-28 20:41:23', '2016-06-06 16:14:41', 0),
('ME0307', 'ME03', 'Adicional para los domingos', 1, 1, 1, 1, 0.00, '2016-04-09 01:45:52', '2016-04-09 01:45:52', 0),
('ME030701', 'ME0307', 'parrilla mixta', 2, 0, 1, 1, 4800.00, '2016-05-14 17:04:26', '2016-05-16 16:08:59', 0),
('ME030702', 'ME03', 'Mondongo', 2, 0, 1, 1, 1500.00, '2016-05-29 17:11:06', '2016-05-29 17:11:06', 0),
('ME0401', 'ME04', '', 1, 0, 0, 1, 0.00, '2016-03-29 16:10:30', '2016-04-18 16:39:40', 0),
('ME0402', 'ME04', 'Tajadas', 1, 0, 0, 1, 0.00, '2016-03-29 16:11:31', '2016-03-29 21:49:49', 0),
('ME0403', 'ME04', 'Arroz blanco', 1, 0, 0, 1, 0.00, '2016-03-29 16:12:19', '2016-03-29 21:49:39', 0),
('ME0404', 'ME04', 'Patacones', 1, 0, 0, 1, 0.00, '2016-03-29 16:42:18', '2016-04-22 16:23:51', 0),
('ME0405', 'ME04', 'Ensalada Cesar Normal', 1, 0, 0, 1, 0.00, '2016-03-29 16:42:46', '2016-06-06 16:49:43', 0),
('ME0406', 'ME04', 'Buñuelos de Yuca', 1, 0, 0, 1, 0.00, '2016-03-29 16:43:18', '2016-03-29 21:48:24', 0),
('ME0412', 'ME04', 'Guarniciones del dia', 1, 1, 0, 1, 0.00, '2016-03-29 22:07:55', '2016-05-25 15:05:58', 0),
('ME041208', 'ME0412', 'Yuca al Vapor', 2, 0, 1, 0, 0.00, '2016-05-18 15:10:57', '2016-05-18 15:10:57', 0),
('ME041209', 'ME0412', 'Vegetales Gratinados', 2, 0, 1, 0, 0.00, '2016-05-18 15:11:21', '2016-05-18 15:11:21', 0),
('ME041210', 'ME0412', 'Pan al Ajillo', 2, 0, 0, 1, 0.00, '2016-05-18 15:11:52', '2016-05-18 15:11:52', 0),
('ME041211', 'ME0412', 'Arroz', 2, 0, 1, 0, 0.00, '2016-05-18 15:12:14', '2016-05-18 15:12:14', 0),
('ME0413', 'ME04', 'Guarniciones de la carta', 1, 1, 1, 1, 0.00, '2016-03-29 22:09:34', '2016-03-29 22:09:34', 0),
('ME041302', 'ME0413', 'Tostones', 2, 0, 0, 0, 0.00, '2016-03-29 22:10:55', '2016-05-13 16:51:11', 0),
('ME041305', 'ME0413', 'yuca', 2, 0, 0, 0, 0.00, '2016-03-29 23:34:05', '2016-05-03 16:02:28', 0),
('ME041307', 'ME0413', 'Ensalada al estilo cesar', 2, 0, 0, 0, 1500.00, '2016-03-30 22:22:25', '2016-05-19 16:45:52', 0),
('ME041309', 'ME0413', 'Arepitas fritas', 2, 0, 0, 0, 0.00, '2016-04-04 16:11:30', '2016-04-04 16:11:30', 0),
('ME041312', 'ME0413', 'Arroz Blanco', 2, 0, 1, 0, 0.00, '2016-04-04 16:14:54', '2016-04-04 16:14:54', 0),
('ME041313', 'ME0413', 'ensalada mixta', 2, 0, 0, 1, 0.00, '2016-04-06 15:45:21', '2016-05-25 15:04:49', 0),
('ME041314', 'ME0413', 'vegetales salteados', 2, 0, 0, 0, 0.00, '2016-04-11 16:27:24', '2016-05-26 15:39:16', 0),
('ME041315', 'ME0413', 'yuca', 2, 0, 0, 0, 0.00, '2016-04-12 16:28:23', '2016-04-12 16:28:23', 0),
('ME041316', 'ME0413', 'papas salteadas', 2, 0, 0, 1, 0.00, '2016-04-12 16:29:15', '2016-05-24 15:31:35', 0),
('ME041317', 'ME0413', 'ensalada de la casa', 2, 0, 0, 1, 0.00, '2016-04-12 16:29:50', '2016-04-13 16:29:05', 0),
('ME041318', 'ME0413', 'ensalada de remolacha', 2, 0, 0, 0, 0.00, '2016-04-13 16:31:03', '2016-04-14 16:22:45', 0),
('ME041319', 'ME0413', 'Papas al vapor', 2, 0, 0, 0, 0.00, '2016-04-14 16:24:16', '2016-05-25 15:04:38', 0),
('ME041320', 'ME0413', 'arroz', 2, 0, 0, 0, 0.00, '2016-04-14 16:27:34', '2016-05-09 16:04:25', 0),
('ME041324', 'ME0413', 'yuca frita', 2, 0, 0, 0, 0.00, '2016-04-20 16:01:43', '2016-04-21 16:24:33', 0),
('ME041325', 'ME0413', 'ensalada criolla', 2, 0, 0, 0, 0.00, '2016-04-21 16:25:56', '2016-05-09 16:04:38', 0),
('ME041326', 'ME0413', 'Patacones', 2, 0, 0, 0, 0.00, '2016-04-21 16:26:56', '2016-04-22 16:24:01', 0),
('ME041327', 'ME0413', 'papas saltiadas', 2, 0, 0, 1, 0.00, '2016-05-04 15:54:01', '2016-05-09 16:04:49', 0),
('ME041331', 'ME0413', 'queso a la plancha', 2, 0, 0, 1, 0.00, '2016-05-13 16:52:11', '2016-05-13 16:52:11', 0),
('ME041332', 'ME0413', 'platanos al caramelo', 2, 0, 0, 1, 0.00, '2016-05-13 16:52:50', '2016-05-19 16:52:04', 0),
('ME041333', 'ME0413', 'Pure De Papas ', 2, 0, 0, 0, 0.00, '2016-05-22 16:57:00', '2016-05-24 15:32:12', 0),
('ME041334', 'ME0413', 'tajadas', 2, 0, 0, 0, 0.00, '2016-05-22 16:57:11', '2016-05-24 15:32:31', 0),
('ME041335', 'ME0413', 'papas al frances', 2, 0, 0, 0, 0.00, '2016-05-25 15:03:41', '2016-05-26 15:39:37', 0),
('ME041336', 'ME0413', 'pure de papa', 2, 0, 1, 0, 0.00, '2016-05-26 15:39:50', '2016-05-26 15:39:50', 0),
('ME041337', 'ME0413', 'Ensalada Mixta ', 2, 0, 1, 1, 0.00, '2016-05-28 17:38:34', '2016-05-28 17:38:34', 0),
('ME041338', 'ME0413', 'Yuca', 2, 0, 1, 1, 0.00, '2016-05-28 17:39:04', '2016-05-28 17:39:04', 0),
('ME0414', 'ME04', 'papas saltiadas', 1, 1, 0, 1, 0.00, '2016-05-18 15:10:20', '2016-05-18 15:10:20', 0),
('ME0501', 'ME05', 'Jugos naturales', 1, 1, 1, 1, 0.00, '2016-03-26 19:18:08', '2016-03-27 21:11:12', 0),
('ME050106', 'ME0501', 'Limon', 2, 0, 1, 1, 300.00, '2016-03-26 19:21:05', '2016-05-16 16:12:21', 0),
('ME050109', 'ME0501', 'Mora', 2, 0, 1, 1, 300.00, '2016-03-27 21:57:47', '2016-05-16 16:11:26', 0),
('ME050110', 'ME0501', 'Fresa', 2, 0, 1, 1, 300.00, '2016-03-27 21:58:26', '2016-05-16 16:11:42', 0),
('ME050111', 'ME0501', 'Mango', 2, 0, 1, 1, 300.00, '2016-03-27 21:58:46', '2016-05-16 16:11:55', 0),
('ME050112', 'ME0501', 'Parchita', 2, 0, 1, 1, 300.00, '2016-03-27 21:59:03', '2016-05-16 16:12:07', 0),
('ME050113', 'ME0501', 'Piña', 2, 0, 1, 1, 300.00, '2016-03-27 21:59:18', '2016-05-16 16:11:01', 0),
('ME050115', 'ME0501', 'Lechoza', 2, 0, 1, 1, 300.00, '2016-03-27 22:00:18', '2016-05-16 16:11:12', 0),
('ME050116', 'ME0501', 'Guanabana', 2, 0, 1, 1, 300.00, '2016-03-29 16:14:49', '2016-05-24 16:36:39', 0),
('ME050117', 'ME0501', 'coctel de frutas', 2, 0, 1, 1, 200.00, '2016-04-06 16:43:14', '2016-04-06 16:43:14', 0),
('ME050118', 'ME0501', 'avena', 2, 0, 1, 1, 200.00, '2016-04-11 17:02:43', '2016-04-11 17:02:43', 0),
('ME050119', 'ME0501', 'melon', 2, 0, 1, 1, 300.00, '2016-04-11 17:05:38', '2016-05-27 00:14:38', 0),
('ME050120', 'ME0501', 'Naranja', 2, 0, 1, 1, 300.00, '2016-05-16 16:12:34', '2016-05-16 16:12:34', 0),
('ME0502', 'ME05', 'Frappe', 1, 1, 1, 1, 0.00, '2016-03-26 19:24:14', '2016-03-27 21:08:01', 0),
('ME050207', 'ME0502', 'Limon con piña', 2, 0, 1, 1, 500.00, '2016-03-27 22:06:05', '2016-05-16 16:13:07', 0),
('ME050211', 'ME0502', 'Fresa Mora', 2, 0, 1, 1, 500.00, '2016-05-16 16:12:53', '2016-05-16 16:12:53', 0),
('ME050212', 'ME0502', 'Naranja con piña', 2, 0, 1, 1, 500.00, '2016-05-16 16:13:20', '2016-05-16 16:13:20', 0),
('ME050213', 'ME0502', 'Tricolor (Combinado de frutas)', 2, 0, 1, 1, 500.00, '2016-05-16 16:13:34', '2016-05-16 16:13:34', 0),
('ME050214', 'ME0502', 'Cafe con nata', 2, 0, 1, 1, 500.00, '2016-05-16 16:13:47', '2016-05-16 16:13:47', 0),
('ME0503', 'ME05', 'Batidos', 1, 1, 1, 1, 0.00, '2016-03-26 19:28:45', '2016-03-26 19:28:45', 0),
('ME050306', 'ME0503', 'Mora', 2, 0, 1, 1, 400.00, '2016-03-27 22:08:57', '2016-05-16 16:14:10', 0),
('ME050307', 'ME0503', 'Mango', 2, 0, 1, 1, 350.00, '2016-03-27 22:09:22', '2016-03-27 22:09:22', 0),
('ME050308', 'ME0503', 'Guanabana', 2, 0, 1, 1, 350.00, '2016-03-27 22:09:57', '2016-03-27 22:09:57', 0),
('ME050309', 'ME0503', 'Cambur', 2, 0, 1, 1, 350.00, '2016-03-27 22:10:27', '2016-03-27 22:10:27', 0),
('ME050310', 'ME0503', 'Lechoza', 2, 0, 1, 1, 350.00, '2016-03-27 22:11:18', '2016-03-27 22:11:18', 0),
('ME0504', 'ME05', 'Merengadas (Con leche)', 1, 1, 1, 1, 600.00, '2016-03-26 19:32:40', '2016-05-25 15:09:43', 0),
('ME050406', 'ME0504', 'Cerelac', 2, 0, 1, 1, 500.00, '2016-03-26 19:37:15', '2016-03-26 19:37:15', 0),
('ME050409', 'ME05', 'Vitaminas', 1, 0, 1, 1, 600.00, '2016-03-26 19:39:14', '2016-05-27 00:13:13', 0),
('ME050410', 'ME0504', 'Mora', 2, 0, 1, 1, 600.00, '2016-03-27 22:17:48', '2016-05-27 00:11:34', 0),
('ME050411', 'ME0504', 'Mango', 2, 0, 1, 1, 600.00, '2016-03-27 22:18:20', '2016-05-27 00:12:38', 0),
('ME050412', 'ME0504', 'Guanabana', 2, 0, 1, 1, 450.00, '2016-03-27 22:18:47', '2016-03-27 22:18:47', 0),
('ME050415', 'ME0504', 'Toddy', 2, 0, 1, 1, 500.00, '2016-03-27 22:19:50', '2016-03-27 22:19:50', 0),
('ME050416', 'ME0504', 'Yogurt', 2, 0, 1, 1, 600.00, '2016-03-27 22:20:11', '2016-03-27 22:20:11', 0),
('ME050417', 'ME05', 'Agua vital', 1, 0, 1, 1, 150.00, '2016-04-11 23:39:17', '2016-04-11 23:39:17', 0),
('ME050418', 'ME05', 'Jugo natulac', 1, 0, 1, 1, 350.00, '2016-04-11 23:42:02', '2016-04-11 23:42:02', 0),
('ME050419', 'ME05', 'Cerveza', 1, 0, 1, 1, 400.00, '2016-04-29 01:12:15', '2016-05-13 22:05:52', 0),
('ME050420', 'ME05', 'Soda', 1, 0, 1, 1, 400.00, '2016-05-25 15:08:30', '2016-05-25 15:08:30', 0),
('ME050421', 'ME0504', 'Lechoza', 2, 0, 1, 1, 600.00, '2016-05-27 00:11:54', '2016-05-27 00:11:54', 0),
('ME050422', 'ME0504', 'Cambur', 2, 0, 1, 1, 600.00, '2016-05-27 00:12:21', '2016-05-27 00:12:21', 0),
('ME050423', 'ME05', 'Toddy', 1, 0, 1, 1, 600.00, '2016-05-28 01:10:30', '2016-05-28 01:10:30', 0),
('ME0602', 'ME06', 'Helados', 1, 1, 1, 1, 0.00, '2016-03-26 19:42:28', '2016-03-26 19:42:28', 0),
('ME060205', 'ME0602', 'Fresa con helado', 2, 0, 1, 1, 700.00, '2016-03-27 22:43:57', '2016-03-27 22:43:57', 0),
('ME060207', 'ME0602', 'H de fresa', 2, 0, 1, 1, 600.00, '2016-03-28 00:48:08', '2016-06-06 17:07:20', 0),
('ME060208', 'ME0602', 'H de chocolate', 2, 0, 1, 1, 600.00, '2016-03-28 00:48:38', '2016-06-06 17:07:36', 0),
('ME060209', 'ME0602', 'H de mantecado', 2, 0, 1, 1, 600.00, '2016-03-28 00:49:07', '2016-05-27 00:16:47', 0),
('ME060210', 'ME0602', 'helado efe', 2, 0, 1, 1, 500.00, '2016-04-13 18:38:23', '2016-04-13 18:38:23', 0),
('ME0603', 'ME06', 'Dulces', 1, 1, 1, 1, 0.00, '2016-03-26 19:44:05', '2016-03-26 19:44:05', 0),
('ME060306', 'ME0603', 'Quesillo', 2, 0, 1, 1, 700.00, '2016-04-09 01:42:19', '2016-05-16 16:17:11', 0),
('ME060307', 'ME0603', 'Pay De Limon', 2, 0, 1, 1, 700.00, '2016-06-06 17:04:19', '2016-06-06 17:04:19', 0),
('ME060308', 'ME06', 'Fresas Con Helado', 2, 0, 1, 1, 800.00, '2016-06-06 17:06:42', '2016-06-06 17:06:42', 0),
('ME0701', 'ME07', 'Refresco de lata', 1, 1, 1, 1, 350.00, '2016-03-27 23:01:54', '2016-05-13 23:57:57', 0),
('ME070104', 'ME0701', 'Frescolita', 2, 0, 0, 1, 450.00, '2016-03-28 00:50:43', '2016-05-16 16:09:41', 0),
('ME070105', 'ME0701', 'Chinoto', 2, 0, 1, 1, 450.00, '2016-03-28 00:51:10', '2016-05-16 16:09:58', 0),
('ME070106', 'ME0701', 'Coca cola', 2, 0, 1, 1, 450.00, '2016-03-28 00:52:16', '2016-05-18 16:56:52', 0),
('ME070108', 'ME0701', 'Naranja', 2, 0, 1, 1, 450.00, '2016-04-11 23:50:38', '2016-05-16 16:10:30', 0),
('ME070109', 'ME0701', 'Malta', 2, 0, 1, 1, 400.00, '2016-05-27 00:14:16', '2016-05-27 00:14:16', 0),
('ME0702', 'ME07', 'Refresco bombita', 1, 1, 1, 1, 350.00, '2016-04-09 01:34:42', '2016-05-14 17:05:57', 0),
('ME070201', 'ME0702', 'Coca cola minibomba', 2, 0, 1, 1, 250.00, '2016-04-09 01:35:28', '2016-04-09 01:35:28', 0),
('ME0801', 'ME08', 'Pizza Pequeña', 1, 1, 1, 1, 0.00, '2016-03-27 23:50:17', '2016-03-27 23:50:17', 0),
('ME080105', 'ME0801', 'PP margarita', 2, 0, 1, 1, 1800.00, '2016-03-28 00:58:22', '2016-06-06 17:09:41', 0),
('ME080106', 'ME0801', 'PP bocadito de cielo al chef', 2, 0, 1, 1, 2000.00, '2016-03-28 00:59:47', '2016-06-06 17:10:05', 0),
('ME080111', 'ME0801', 'PP hawaiana', 2, 0, 1, 1, 1900.00, '2016-06-06 17:10:23', '2016-06-06 17:10:23', 0),
('ME080112', 'ME0801', 'PP cuatro quesos', 2, 0, 1, 1, 2000.00, '2016-06-06 17:10:40', '2016-06-06 17:10:40', 0),
('ME0802', 'ME08', 'Pizza mediana', 1, 1, 1, 1, 0.00, '2016-03-27 23:53:23', '2016-03-28 00:53:14', 0),
('ME080206', 'ME0802', 'PM bocadito de cielo al chef', 2, 0, 1, 1, 3000.00, '2016-03-28 01:01:49', '2016-06-06 17:11:36', 0),
('ME080208', 'ME0802', 'PM cuatro quesos', 2, 0, 1, 1, 2800.00, '2016-03-28 01:03:20', '2016-06-06 17:11:54', 0),
('ME080211', 'ME0802', 'PM margarita', 2, 0, 1, 1, 2600.00, '2016-06-06 17:12:31', '2016-06-06 17:12:31', 0),
('ME080212', 'ME0802', 'PM hawaiana', 2, 0, 1, 1, 2700.00, '2016-06-06 17:13:04', '2016-06-06 17:13:04', 0),
('ME0803', 'ME08', 'Pizza grande', 1, 1, 1, 1, 0.00, '2016-03-27 23:56:44', '2016-03-28 00:53:47', 0),
('ME080307', 'ME0803', 'PG bocadito de cielo al chef', 2, 0, 1, 1, 3700.00, '2016-03-28 01:05:08', '2016-06-06 17:14:33', 0),
('ME080312', 'ME0803', 'PG cuatro estaciones', 2, 0, 1, 1, 3200.00, '2016-05-26 23:43:02', '2016-05-26 23:43:02', 0),
('ME080315', 'ME0803', 'PG margarita', 2, 0, 1, 1, 3200.00, '2016-06-06 17:14:52', '2016-06-06 17:14:52', 0),
('ME080316', 'ME0803', 'PG hawaiana', 2, 0, 1, 1, 3300.00, '2016-06-06 17:15:11', '2016-06-06 17:15:11', 0),
('ME080317', 'ME0803', 'PG cuatro quesos', 2, 0, 1, 1, 3500.00, '2016-06-06 17:15:29', '2016-06-06 17:15:29', 0),
('ME0804', 'ME08', 'Pizza familiar', 1, 1, 1, 1, 0.00, '2016-03-28 00:00:04', '2016-03-28 00:54:02', 0),
('ME080407', 'ME0804', 'PF bocadito de cielo al chef', 2, 0, 1, 1, 4000.00, '2016-03-28 01:06:53', '2016-05-26 23:48:33', 0),
('ME080412', 'ME0804', 'PF cuatro estaciones', 2, 0, 1, 1, 3900.00, '2016-05-26 23:47:56', '2016-05-26 23:47:56', 0),
('ME080415', 'ME0804', 'PF margarita', 2, 0, 1, 1, 3700.00, '2016-06-06 17:16:51', '2016-06-06 17:16:51', 0),
('ME080416', 'ME0804', 'PF cuatro quesos', 2, 0, 1, 1, 4000.00, '2016-06-06 17:17:20', '2016-06-06 17:17:20', 0),
('ME0805', 'ME08', 'PF hawaiana', 1, 1, 1, 1, 4000.00, '0000-00-00 00:00:00', '2016-11-20 07:48:01', 0),
('ME0806', 'ME08', 'papas', 1, 1, 1, 1, 0.00, '0000-00-00 00:00:00', '2016-11-20 07:51:16', 0),
('ME0907', 'ME09', 'Mixta', 1, 0, 1, 1, 1500.00, '2016-03-28 01:09:04', '2016-06-06 16:51:29', 0),
('ME0908', 'ME09', 'Ensalada Rusa', 2, 0, 1, 1, 0.00, '2016-03-29 21:50:21', '2016-03-29 21:50:21', 0),
('ME0909', 'ME09', 'Cesar Con Camarones', 1, 0, 1, 1, 2500.00, '2016-05-16 15:53:42', '2016-06-06 16:51:03', 0),
('ME0910', 'ME09', 'Cesar Con Pollo', 1, 0, 1, 1, 1900.00, '2016-06-06 16:50:25', '2016-06-06 16:50:25', 0),
('ME0911', 'ME09', 'Cesar Normal', 1, 0, 1, 1, 1500.00, '2016-06-06 16:55:52', '2016-06-06 16:55:52', 0),
('ME1002', 'ME10', 'Hamburguesas', 1, 1, 1, 1, 0.00, '2016-03-26 20:15:54', '2016-03-26 20:15:54', 0),
('ME100205', 'ME1002', 'H de pollo', 2, 0, 1, 1, 1500.00, '2016-03-28 00:19:22', '2016-05-26 23:58:04', 0),
('ME100206', 'ME1002', 'H de carne', 2, 0, 1, 1, 1500.00, '2016-03-28 00:20:13', '2016-05-26 23:58:45', 0),
('ME100207', 'ME1002', 'H de chuleta', 2, 0, 1, 1, 1800.00, '2016-03-28 00:20:43', '2016-05-26 23:59:01', 0),
('ME1003', 'ME10', 'Sandwich', 1, 1, 1, 1, 0.00, '2016-03-26 20:18:46', '2016-03-26 20:18:46', 0),
('ME100307', 'ME1003', 'S sencillo', 2, 0, 1, 1, 700.00, '2016-03-28 00:35:31', '2016-05-26 23:59:47', 0),
('ME100312', 'ME1003', 'S doble', 2, 0, 1, 1, 1000.00, '2016-05-27 00:00:03', '2016-05-27 00:00:03', 0),
('ME100313', 'ME1003', 'S integral', 2, 0, 1, 1, 900.00, '2016-05-27 00:04:06', '2016-05-27 00:04:06', 0),
('ME100314', 'ME1003', 'S pollo al graten', 2, 0, 1, 1, 1200.00, '2016-05-27 00:04:46', '2016-05-27 00:04:46', 0),
('ME100315', 'ME1003', 'Bocadito de cielo sandwich', 2, 0, 1, 1, 1800.00, '2016-05-27 00:05:19', '2016-05-27 00:05:19', 0),
('ME1005', 'ME10', 'Club house', 1, 0, 1, 1, 1800.00, '2016-03-28 00:17:04', '2016-05-27 00:06:28', 0),
('ME1006', 'ME10', 'Pan acolchado', 1, 1, 1, 1, 500.00, '2016-03-28 00:22:02', '2016-03-28 00:22:02', 0),
('ME100602', 'ME1006', 'PA de lomito', 2, 0, 1, 1, 2500.00, '2016-03-28 00:24:10', '2016-05-27 00:07:11', 0),
('ME100606', 'ME10', 'Omelett de jamon y queso', 1, 0, 1, 1, 800.00, '2016-03-28 00:34:14', '2016-03-28 00:34:14', 0),
('ME100608', 'ME10', 'Pizca andina', 1, 0, 1, 1, 700.00, '2016-03-28 00:39:35', '2016-03-28 00:39:35', 0),
('ME100609', 'ME10', 'Panqueca de yogurt y frutas', 1, 0, 1, 1, 600.00, '2016-03-28 00:40:22', '2016-03-28 00:40:22', 0),
('ME100610', 'ME1006', 'PA de pollo', 2, 0, 1, 1, 2400.00, '2016-05-27 00:07:29', '2016-05-27 00:07:29', 0),
('ME100611', 'ME1006', 'PA de chuleta', 2, 0, 1, 1, 2800.00, '2016-05-27 00:07:42', '2016-05-27 00:07:42', 0),
('ME100612', 'ME1006', 'PA mixto pollo lomito chuleta', 2, 0, 1, 1, 2800.00, '2016-05-27 00:07:56', '2016-05-27 00:07:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data13`
--

CREATE TABLE IF NOT EXISTS `data13` (
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
('OD160205113803', 2, '2016-05-02 16:08:03', 0, 'AA0005'),
('OD160205120847', 7, '2016-05-02 16:38:47', 0, 'AA0005'),
('OD160205122156', 5, '2016-05-02 16:51:56', 0, 'AA0005'),
('OD160205123520', 2, '2016-05-02 17:05:20', 0, 'AA0005'),
('OD160205133131', 4, '2016-05-02 18:01:31', 0, 'AA0005'),
('OD160205134444', 5, '2016-05-02 18:14:44', 0, 'AA0005'),
('OD160405113240', 1, '2016-05-04 16:02:40', 0, 'AA0001'),
('OD160405115614', 2, '2016-05-04 16:26:14', 0, 'AA0002'),
('OD160405120055', 7, '2016-05-04 16:30:55', 0, 'AA0002'),
('OD160405120159', 4, '2016-05-04 16:31:59', 0, 'AA0002'),
('OD160405120736', 3, '2016-05-04 16:37:36', 0, 'AA0002'),
('OD160405121959', 5, '2016-05-04 16:49:59', 0, 'AA0002'),
('OD160405123104', 2, '2016-05-04 17:01:04', 0, 'AA0002'),
('OD160405124917', 8, '2016-05-04 17:19:17', 0, 'AA0002'),
('OD160405130901', 7, '2016-05-04 17:39:01', 0, 'AA0002'),
('OD160405134829', 4, '2016-05-04 18:18:29', 0, 'AA0002'),
('OD160405135207', 8, '2016-05-04 18:22:07', 0, 'AA0002'),
('OD160604121425', 4, '2016-04-06 16:44:25', 0, 'AA0003'),
('OD160604124351', 7, '2016-04-06 17:13:51', 0, 'AA0004'),
('OD160604135021', 6, '2016-04-06 18:20:21', 0, 'AA0004'),
('OD160704120933', 4, '2016-04-07 16:39:33', 0, 'AA0003'),
('OD160704121148', 7, '2016-04-07 16:41:48', 0, 'AA0004'),
('OD160704121250', 3, '2016-04-07 16:42:50', 0, 'AA0003'),
('OD160704121559', 5, '2016-04-07 16:45:59', 0, 'AA0004'),
('OD160704122347', 6, '2016-04-07 16:53:47', 0, 'AA0003'),
('OD160704123924', 4, '2016-04-07 17:09:24', 0, 'AA0004'),
('OD160704124851', 7, '2016-04-07 17:18:51', 0, 'AA0004'),
('OD160704125814', 5, '2016-04-07 17:28:14', 0, 'AA0004'),
('OD160704131917', 1, '2016-04-07 17:49:17', 0, 'AA0004'),
('OD160704132008', 4, '2016-04-07 17:50:08', 0, 'AA0003'),
('OD160704171031', 7, '2016-04-07 21:40:31', 0, 'AA0005'),
('OD160704190123', 7, '2016-04-07 23:31:23', 0, 'AA0005'),
('OD160704192750', 2, '2016-04-07 23:57:50', 0, 'AA0005'),
('OD160905113853', 5, '2016-05-09 16:08:53', 0, 'AA0004'),
('OD160905114412', 4, '2016-05-09 16:14:12', 0, 'AA0004'),
('OD161104123145', 4, '2016-04-11 17:01:45', 0, 'AA0004'),
('OD161104123512', 8, '2016-04-11 17:05:12', 0, 'AA0004'),
('OD161104123618', 5, '2016-04-11 17:06:18', 0, 'AA0003'),
('OD161104125428', 7, '2016-04-11 17:24:28', 0, 'AA0004'),
('OD161104125628', 3, '2016-04-11 17:26:28', 0, 'AA0004'),
('OD161104135506', 7, '2016-04-11 18:25:06', 0, ''),
('OD161104140113', 3, '2016-04-11 18:31:13', 0, 'AA0003'),
('OD161104141105', 2, '2016-04-11 18:41:05', 0, 'AA0003'),
('OD161204122238', 3, '2016-04-12 16:52:38', 0, 'AA0004'),
('OD161204122559', 4, '2016-04-12 16:55:59', 0, 'AA0002'),
('OD161204124300', 5, '2016-04-12 17:13:00', 0, 'AA0004'),
('OD161204124851', 7, '2016-04-12 17:18:51', 0, 'AA0004'),
('OD161204125653', 2, '2016-04-12 17:26:53', 0, 'AA0002'),
('OD161204131950', 1, '2016-04-12 17:49:50', 0, 'AA0002'),
('OD161304120352', 3, '2016-04-13 16:33:52', 0, 'AA0003'),
('OD161304121257', 4, '2016-04-13 16:42:57', 0, 'AA0004'),
('OD161304121900', 7, '2016-04-13 16:49:00', 0, 'AA0003'),
('OD161304122146', 6, '2016-04-13 16:51:46', 0, 'AA0004'),
('OD161304123507', 5, '2016-04-13 17:05:07', 0, 'AA0003'),
('OD161304123722', 2, '2016-04-13 17:07:22', 0, 'AA0004'),
('OD161304124312', 1, '2016-04-13 17:13:12', 0, 'AA0004'),
('OD161304124358', 3, '2016-04-13 17:13:58', 0, 'AA0004'),
('OD161304125331', 7, '2016-04-13 17:23:31', 0, 'AA0003'),
('OD161304130155', 4, '2016-04-13 17:31:55', 0, 'AA0003'),
('OD161304132112', 8, '2016-04-13 17:51:12', 0, 'AA0004'),
('OD161304133809', 6, '2016-04-13 18:08:09', 0, 'AA0004'),
('OD161304134233', 5, '2016-04-13 18:12:33', 0, ''),
('OD161304134832', 2, '2016-04-13 18:18:32', 0, 'AA0004'),
('OD161305125121', 2, '2016-05-13 17:21:21', 0, 'AA0004'),
('OD161305130906', 5, '2016-05-13 17:39:06', 0, 'AA0004'),
('OD161305132112', 3, '2016-05-13 17:51:12', 0, 'AA0004'),
('OD161305135437', 5, '2016-05-13 18:24:37', 0, 'AA0004'),
('OD161305135908', 4, '2016-05-13 18:29:08', 0, 'AA0004'),
('OD161305140507', 3, '2016-05-13 18:35:07', 0, 'AA0004'),
('OD161305154441', 7, '2016-05-13 20:14:41', 0, 'AA0004'),
('OD161305173613', 7, '2016-05-13 22:06:13', 0, 'AA0002'),
('OD161404120003', 1, '2016-04-14 16:30:03', 0, 'AA0004'),
('OD161404122618', 3, '2016-04-14 16:56:18', 0, 'AA0004'),
('OD161404123311', 5, '2016-04-14 17:03:11', 0, ''),
('OD161404124612', 7, '2016-04-14 17:16:12', 0, 'AA0004'),
('OD161404130000', 4, '2016-04-14 17:30:00', 0, 'AA0004'),
('OD161404130547', 6, '2016-04-14 17:35:47', 0, 'AA0004'),
('OD161404131612', 3, '2016-04-14 17:46:12', 0, 'AA0004'),
('OD161404132745', 2, '2016-04-14 17:57:45', 0, 'AA0003'),
('OD161404132914', 1, '2016-04-14 17:59:14', 0, 'AA0003'),
('OD161404134425', 4, '2016-04-14 18:14:25', 0, 'AA0004'),
('OD161404142315', 6, '2016-04-14 18:53:15', 0, 'AA0004'),
('OD161404142352', 1, '2016-04-14 18:53:52', 0, 'AA0004'),
('OD161404195023', 7, '2016-04-15 00:20:23', 0, 'AA0005'),
('OD161404200254', 1, '2016-04-15 00:32:54', 0, 'AA0005'),
('OD161404204539', 5, '2016-04-15 01:15:39', 0, 'AA0002'),
('OD161405123132', 8, '2016-05-14 17:01:32', 0, 'AA0002'),
('OD161405123649', 7, '2016-05-14 17:06:49', 0, 'AA0002'),
('OD161405125713', 5, '2016-05-14 17:27:13', 0, 'AA0002'),
('OD161405131947', 1, '2016-05-14 17:49:47', 0, 'AA0002'),
('OD161405135207', 5, '2016-05-14 18:22:07', 0, 'AA0002'),
('OD161405145655', 1, '2016-05-14 19:26:55', 0, 'AA0002'),
('OD161504124502', 5, '2016-04-15 17:15:02', 0, 'AA0004'),
('OD161504124716', 3, '2016-04-15 17:17:16', 0, 'AA0004'),
('OD161504124814', 7, '2016-04-15 17:18:14', 0, 'AA0004'),
('OD161504125520', 4, '2016-04-15 17:25:20', 0, 'AA0003'),
('OD161504204944', 7, '2016-04-16 01:19:44', 0, 'AA0005'),
('OD161504214700', 5, '2016-04-16 02:17:00', 0, 'AA0005'),
('OD161604132751', 2, '2016-04-16 17:57:51', 0, 'AA0003'),
('OD161604140055', 4, '2016-04-16 18:30:55', 0, 'AA0003'),
('OD161705121814', 1, '2016-05-17 16:48:14', 0, 'AA0004'),
('OD161705122516', 3, '2016-05-17 16:55:16', 0, 'AA0004'),
('OD161705123504', 4, '2016-05-17 17:05:04', 0, 'AA0004'),
('OD161705123613', 5, '2016-05-17 17:06:13', 0, 'AA0004'),
('OD161705131202', 7, '2016-05-17 17:42:02', 0, 'AA0004'),
('OD161705131941', 8, '2016-05-17 17:49:41', 0, 'AA0004'),
('OD161804124033', 3, '2016-04-18 17:10:33', 0, 'AA0003'),
('OD161804124348', 4, '2016-04-18 17:13:48', 0, 'AA0004'),
('OD161805122204', 9, '2016-05-18 16:52:04', 0, ''),
('OD161805130735', 10, '2016-05-18 17:37:35', 0, ''),
('OD161805140303', 7, '2016-05-18 18:33:03', 0, ''),
('OD161905122149', 1, '2016-05-19 16:51:49', 0, 'AA0004'),
('OD162004113255', 5, '2016-04-20 16:02:55', 0, 'AA0004'),
('OD162004120725', 6, '2016-04-20 16:37:25', 0, 'AA0004'),
('OD162004121148', 7, '2016-04-20 16:41:48', 0, 'AA0003'),
('OD162004122444', 4, '2016-04-20 16:54:44', 0, 'AA0003'),
('OD162004124751', 2, '2016-04-20 17:17:51', 0, 'AA0003'),
('OD162004130043', 5, '2016-04-20 17:30:43', 0, ''),
('OD162004130353', 3, '2016-04-20 17:33:53', 0, 'AA0003'),
('OD162004130417', 4, '2016-04-20 17:34:17', 0, 'AA0003'),
('OD162004131250', 7, '2016-04-20 17:42:50', 0, 'AA0003'),
('OD162004132614', 2, '2016-04-20 17:56:14', 0, 'AA0003'),
('OD162004132852', 1, '2016-04-20 17:58:52', 0, 'AA0003'),
('OD162004142803', 3, '2016-04-20 18:58:03', 0, ''),
('OD162005123020', 5, '2016-05-20 17:00:20', 0, 'AA0004'),
('OD162005124056', 4, '2016-05-20 17:10:56', 0, 'AA0004'),
('OD162005141458', 3, '2016-05-20 18:44:58', 0, ''),
('OD162011033426', 1, '2016-11-20 07:34:26', 0, 'AA0000'),
('OD162011135634', 1, '2016-11-20 17:56:34', 0, 'AA0000'),
('OD162011140323', 1, '2016-11-20 18:03:23', 0, 'AA0007'),
('OD162011142423', 1, '2016-11-20 18:24:23', 0, 'AA0000'),
('OD162011144104', 1, '2016-11-20 18:41:04', 3, 'AA0010'),
('OD162104115737', 7, '2016-04-21 16:27:37', 0, 'AA0004'),
('OD162205114425', 8, '2016-05-22 16:14:25', 0, 'AA0002'),
('OD162304155752', 1, '2016-04-23 20:27:52', 0, 'AA0004'),
('OD162304161026', 2, '2016-04-23 20:40:26', 0, 'AA0004'),
('OD162405112646', 10, '2016-05-24 15:56:46', 0, 'AA0004'),
('OD162405120556', 4, '2016-05-24 16:35:56', 0, 'AA0004'),
('OD162405124531', 2, '2016-05-24 17:15:31', 0, 'AA0004'),
('OD162405130016', 5, '2016-05-24 17:30:16', 0, 'AA0004'),
('OD162405130034', 7, '2016-05-24 17:30:34', 0, 'AA0002'),
('OD162405132917', 1, '2016-05-24 17:59:17', 0, 'AA0004'),
('OD162405134125', 10, '2016-05-24 18:11:25', 0, 'AA0004'),
('OD162504123420', 6, '2016-04-25 17:04:20', 0, ''),
('OD162504125508', 1, '2016-04-25 17:25:08', 0, ''),
('OD162504125814', 3, '2016-04-25 17:28:14', 0, 'AA0004'),
('OD162504131517', 7, '2016-04-25 17:45:17', 0, 'AA0004'),
('OD162505122853', 6, '2016-05-25 16:58:53', 0, ''),
('OD162505131619', 1, '2016-05-25 17:46:19', 0, ''),
('OD162505132228', 2, '2016-05-25 17:52:28', 0, ''),
('OD162505132431', 4, '2016-05-25 17:54:31', 0, 'AA0004'),
('OD162505134749', 10, '2016-05-25 18:17:49', 0, ''),
('OD162505153057', 10, '2016-05-25 20:00:57', 0, 'AA0004'),
('OD162505153132', 5, '2016-05-25 20:01:32', 0, 'AA0004'),
('OD162604115745', 5, '2016-04-26 16:27:45', 0, 'AA0004'),
('OD162604122513', 1, '2016-04-26 16:55:13', 0, 'AA0004'),
('OD162604123543', 2, '2016-04-26 17:05:43', 0, 'AA0004'),
('OD162604124046', 7, '2016-04-26 17:10:46', 0, 'AA0002'),
('OD162604130556', 3, '2016-04-26 17:35:56', 0, 'AA0004'),
('OD162604131048', 6, '2016-04-26 17:40:48', 0, 'AA0004'),
('OD162604131552', 5, '2016-04-26 17:45:52', 0, 'AA0004'),
('OD162604132301', 2, '2016-04-26 17:53:01', 0, 'AA0004'),
('OD162604133257', 3, '2016-04-26 18:02:57', 0, 'AA0004'),
('OD162604134806', 7, '2016-04-26 18:18:06', 0, 'AA0002'),
('OD162605120701', 2, '2016-05-26 16:37:01', 0, ''),
('OD162605120902', 4, '2016-05-26 16:39:02', 0, ''),
('OD162605124938', 6, '2016-05-26 17:19:38', 0, ''),
('OD162605131531', 5, '2016-05-26 17:45:31', 0, ''),
('OD162605142716', 4, '2016-05-26 18:57:16', 0, ''),
('OD162605195015', 10, '2016-05-27 00:20:15', 0, ''),
('OD162605200507', 10, '2016-05-27 00:35:07', 0, ''),
('OD162704112628', 7, '2016-04-27 15:56:28', 0, 'AA0004'),
('OD162704122619', 7, '2016-04-27 16:56:19', 0, 'AA0004'),
('OD162704123151', 3, '2016-04-27 17:01:51', 0, 'AA0002'),
('OD162704123744', 6, '2016-04-27 17:07:44', 0, 'AA0002'),
('OD162704124057', 5, '2016-04-27 17:10:57', 0, 'AA0004'),
('OD162704124211', 1, '2016-04-27 17:12:11', 0, 'AA0002'),
('OD162704124940', 4, '2016-04-27 17:19:40', 0, 'AA0004'),
('OD162704125111', 2, '2016-04-27 17:21:11', 0, 'AA0002'),
('OD162704130058', 3, '2016-04-27 17:30:58', 0, 'AA0004'),
('OD162704130227', 8, '2016-04-27 17:32:27', 0, 'AA0004'),
('OD162704134422', 2, '2016-04-27 18:14:22', 0, 'AA0004'),
('OD162705202610', 10, '2016-05-28 00:56:10', 0, 'AA0002'),
('OD162705202859', 9, '2016-05-28 00:58:59', 0, 'AA0002'),
('OD162705205706', 8, '2016-05-28 01:27:06', 0, 'AA0002'),
('OD162705215327', 1, '2016-05-28 02:23:27', 0, ''),
('OD162804182608', 2, '2016-04-28 22:56:08', 0, 'AA0002'),
('OD162804183323', 1, '2016-04-28 23:03:23', 0, 'AA0002'),
('OD162804192058', 5, '2016-04-28 23:50:58', 0, 'AA0002'),
('OD162804192945', 4, '2016-04-28 23:59:45', 0, 'AA0002'),
('OD162804193155', 1, '2016-04-29 00:01:55', 0, 'AA0002'),
('OD162804202537', 1, '2016-04-29 00:55:37', 0, 'AA0001'),
('OD162804203234', 6, '2016-04-29 01:02:34', 0, ''),
('OD162804203521', 7, '2016-04-29 01:05:21', 0, ''),
('OD162804210257', 1, '2016-04-29 01:32:57', 0, ''),
('OD162804212204', 4, '2016-04-29 01:52:04', 0, ''),
('OD162804212223', 5, '2016-04-29 01:52:23', 0, ''),
('OD162805131030', 6, '2016-05-28 17:40:30', 0, ''),
('OD162805132856', 10, '2016-05-28 17:58:56', 0, 'AA0002'),
('OD162805143104', 8, '2016-05-28 19:01:04', 0, 'AA0002'),
('OD162805161441', 1, '2016-05-28 20:44:41', 0, 'AA0001'),
('OD162805161509', 7, '2016-05-28 20:45:09', 0, 'AA0001'),
('OD162805161545', 9, '2016-05-28 20:45:45', 0, 'AA0001'),
('OD162903121438', 4, '2016-03-29 16:44:38', 3, 'AA0003'),
('OD162903122002', 2, '2016-03-29 16:50:02', 0, 'AA0003'),
('OD162903122457', 6, '2016-03-29 16:54:57', 0, 'AA0004'),
('OD162903123400', 1, '2016-03-29 17:04:00', 0, 'AA0003'),
('OD162903123511', 3, '2016-03-29 17:05:11', 0, 'AA0004'),
('OD162903124932', 4, '2016-03-29 17:19:32', 0, 'AA0003'),
('OD162903130637', 3, '2016-03-29 17:36:37', 0, 'AA0003'),
('OD162903131924', 2, '2016-03-29 17:49:24', 0, 'AA0003'),
('OD162903134000', 4, '2016-03-29 18:10:00', 0, 'AA0003'),
('OD162903134915', 3, '2016-03-29 18:19:15', 0, 'AA0003'),
('OD162903145021', 5, '2016-03-29 19:20:21', 0, 'AA0004'),
('OD162904182514', 5, '2016-04-29 22:55:14', 0, 'AA0002'),
('OD162904194755', 1, '2016-04-30 00:17:55', 0, 'AA0002'),
('OD162904194954', 6, '2016-04-30 00:19:54', 0, 'AA0002'),
('OD162904205724', 2, '2016-04-30 01:27:24', 0, 'AA0002'),
('OD162904210236', 8, '2016-04-30 01:32:36', 0, 'AA0002'),
('OD162905120654', 10, '2016-05-29 16:36:54', 0, 'AA0002'),
('OD163004122915', 5, '2016-04-30 16:59:15', 0, 'AA0002'),
('OD163004124718', 7, '2016-04-30 17:17:18', 0, 'AA0002'),
('OD163004134222', 1, '2016-04-30 18:12:22', 0, 'AA0002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data14`
--

CREATE TABLE IF NOT EXISTS `data14` (
`Id` int(11) NOT NULL,
  `Orden` varchar(14) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id de la orden o pedido',
  `IdPlato` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id del plato',
  `Costo` decimal(11,2) NOT NULL COMMENT 'Costo del plato',
  `Personalizado` int(1) NOT NULL COMMENT 'Indica si es plato personalizado',
  `Cantidad` int(2) NOT NULL COMMENT 'Cantidad de la orden',
  `IdPerCan` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id pedl pedido personalizado',
  `Despacho` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data15`
--

CREATE TABLE IF NOT EXISTS `data15` (
`Id` int(11) NOT NULL,
  `IdPersolizado` varchar(35) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id de la orden o pedido',
  `IdPlatoSec` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Id del plato',
  `CostoSec` decimal(11,2) NOT NULL COMMENT 'Costo del plato'
) ENGINE=InnoDB AUTO_INCREMENT=495 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `data15`
--

INSERT INTO `data15` (`Id`, `IdPersolizado`, `IdPlatoSec`, `CostoSec`) VALUES
(1, 'psoredn3PSO160329121438', 'ME030601', 1000.00),
(2, 'psoredn4PSO160329121438', 'ME030601', 1000.00),
(3, 'psoredn1PSO160329121553', 'ME030122', 1500.00),
(4, 'psoredn2PSO160329121553', 'ME030122', 1500.00),
(5, 'psoredn1PSO160329122002', 'ME030601', 1000.00),
(6, 'psoredn2PSO160329122002', 'ME030601', 1000.00),
(7, 'psoredn1PSO160329122457', 'ME030601', 1000.00),
(8, 'psoredn1PSO160329122457', 'ME030601', 1000.00),
(9, 'psoredn1PSO160329123045', 'ME030122', 1500.00),
(10, 'psoredn1PSO160329123045', 'ME030122', 1500.00),
(11, 'psoredn1PSO160329123401', 'ME030601', 1000.00),
(12, 'psoredn2PSO160329123401', 'ME030601', 1000.00),
(13, 'psoredn1PSO160329123511', 'ME030601', 1000.00),
(14, 'psoredn1PSO160329123511', 'ME030601', 1000.00),
(15, 'psoredn1PSO160329124933', 'ME030118', 1300.00),
(16, 'psoredn1PSO160329130637', 'ME030601', 1000.00),
(17, 'psoredn1PSO160329131925', 'ME030601', 1000.00),
(18, 'psoredn1PSO160329131925', 'ME030601', 1000.00),
(19, 'psoredn1PSO160329134000', 'ME030114', 1000.00),
(20, 'psoredn2PSO160329134001', 'ME030114', 1000.00),
(21, 'psoredn1PSO160329134915', 'ME030118', 1300.00),
(22, 'psoredn2PSO160329134915', 'ME030207', 1300.00),
(24, 'psoredn1PSO160329143130', 'ME030118', 1300.00),
(25, 'psoredn1PSO160329145021', 'ME030205', 1300.00),
(26, 'psoredn2PSO160329145021', 'ME030121', 1300.00),
(27, 'psoredn3PSO160329145021', 'ME030117', 1500.00),
(28, 'psoredn1PSO160403142941', 'ME030601', 1000.00),
(29, 'psoredn1PSO160406124352', 'ME030117', 1500.00),
(30, 'psoredn1PSO160406124352', 'ME041305', 0.00),
(31, 'psoredn1PSO160406124352', 'ME041307', 0.00),
(32, 'psoredn2PSO160406124352', 'ME041307', 0.00),
(33, 'psoredn2PSO160406124352', 'ME041305', 0.00),
(34, 'psoredn2PSO160406124352', 'ME030122', 1500.00),
(35, 'psoredn1PSO160406125131', 'ME030601', 1000.00),
(36, 'psoredn2PSO160406125131', 'ME030601', 1000.00),
(37, 'psoredn1PSO160406125701', 'ME030601', 1000.00),
(38, 'psoredn2PSO160406125701', 'ME030601', 1000.00),
(39, 'psoredn2PSO160406135022', 'ME030117', 1500.00),
(40, 'psoredn2PSO160406135022', 'ME041307', 0.00),
(41, 'psoredn2PSO160406135022', 'ME041305', 0.00),
(42, 'psoredn1PSO160407120934', 'ME030601', 1000.00),
(43, 'psoredn2PSO160407120934', 'ME030601', 1000.00),
(44, 'psoredn1PSO160407121148', 'ME030122', 1500.00),
(45, 'psoredn1PSO160407121148', 'ME041312', 0.00),
(46, 'psoredn1PSO160407121250', 'ME030121', 1300.00),
(47, 'psoredn1PSO160407121250', 'ME041302', 0.00),
(48, 'psoredn1PSO160407121250', 'ME041305', 0.00),
(49, 'psoredn1PSO160407121559', 'ME030601', 1000.00),
(50, 'psoredn1PSO160407122347', 'ME030121', 1300.00),
(51, 'psoredn1PSO160407122347', 'ME041302', 0.00),
(52, 'psoredn1PSO160407122347', 'ME041307', 0.00),
(53, 'psoredn2PSO160407122347', 'ME030124', 1500.00),
(54, 'psoredn2PSO160407122347', 'ME041305', 0.00),
(55, 'psoredn2PSO160407122347', 'ME041307', 0.00),
(56, 'psoredn3PSO160407122348', 'ME030124', 1500.00),
(57, 'psoredn3PSO160407122348', 'ME041305', 0.00),
(58, 'psoredn3PSO160407122348', 'ME041307', 0.00),
(59, 'psoredn1PSO160407123924', 'ME030205', 1300.00),
(60, 'psoredn1PSO160407123924', 'ME041307', 0.00),
(61, 'psoredn1PSO160407123924', 'ME041305', 0.00),
(62, 'psoredn4PSO160407124851', 'ME030306', 1200.00),
(63, 'psoredn4PSO160407124851', 'ME041307', 0.00),
(64, 'psoredn4PSO160407124851', 'ME041302', 0.00),
(65, 'psoredn5PSO160407124851', 'ME030117', 1500.00),
(66, 'psoredn5PSO160407124851', 'ME041305', 0.00),
(67, 'psoredn5PSO160407124851', 'ME041307', 0.00),
(68, 'psoredn6PSO160407124851', 'ME030122', 1500.00),
(69, 'psoredn6PSO160407124851', 'ME041305', 0.00),
(70, 'psoredn6PSO160407124851', 'ME041307', 0.00),
(71, 'psoredn1PSO160407132008', 'ME030118', 1300.00),
(72, 'psoredn1PSO160407132008', 'ME041302', 0.00),
(73, 'psoredn1PSO160407132008', 'ME041307', 0.00),
(74, 'psoredn2PSO160407192750', 'ME030114', 1000.00),
(75, 'psoredn2PSO160407192750', 'ME041307', 0.00),
(76, 'psoredn1PSO160411123146', 'ME030207', 1300.00),
(77, 'psoredn1PSO160411123146', 'ME041305', 0.00),
(78, 'psoredn1PSO160411123146', 'ME041307', 0.00),
(79, 'psoredn1PSO160411125429', 'ME030117', 1500.00),
(80, 'psoredn1PSO160411125429', 'ME041312', 0.00),
(81, 'psoredn1PSO160411125429', 'ME041307', 0.00),
(82, 'psoredn1PSO160411140113', 'ME041305', 0.00),
(83, 'psoredn1PSO160411140113', 'ME041314', 0.00),
(84, 'psoredn1PSO160411140113', 'ME030121', 1300.00),
(85, 'psoredn1PSO160411141105', 'ME030117', 1500.00),
(86, 'psoredn1PSO160411141105', 'ME041307', 0.00),
(87, 'psoredn2PSO160411141106', 'ME030122', 1500.00),
(88, 'psoredn2PSO160411141106', 'ME041305', 0.00),
(89, 'psoredn2PSO160411141106', 'ME041307', 0.00),
(90, 'psoredn2PSO160411141106', 'ME041305', 0.00),
(91, 'psoredn1PSO160412122238', 'ME041312', 0.00),
(92, 'psoredn1PSO160412122238', 'ME030206', 1500.00),
(93, 'psoredn1PSO160412124300', 'ME030207', 1300.00),
(94, 'psoredn1PSO160412124300', 'ME041312', 0.00),
(95, 'psoredn1PSO160412124300', 'ME030117', 1500.00),
(96, 'psoredn1PSO160412124300', 'ME041312', 0.00),
(97, 'psoredn1PSO160412125337', 'ME030114', 1000.00),
(98, 'psoredn1PSO160412125337', 'ME041312', 0.00),
(99, 'psoredn1PSO160413122146', 'ME030109', 1300.00),
(100, 'psoredn1PSO160413122146', 'ME041302', 0.00),
(101, 'psoredn1PSO160413122146', 'ME041305', 0.00),
(102, 'psoredn1PSO160413123507', 'ME030123', 1200.00),
(103, 'psoredn1PSO160413123507', 'ME030123', 1200.00),
(104, 'psoredn1PSO160413123507', 'ME041302', 0.00),
(105, 'psoredn1PSO160413123507', 'ME041312', 0.00),
(106, 'psoredn1PSO160413123507', 'ME030122', 1500.00),
(107, 'psoredn1PSO160413123507', 'ME041318', 0.00),
(108, 'psoredn1PSO160413123507', 'ME041305', 0.00),
(109, 'psoredn1PSO160413123507', 'ME030118', 1300.00),
(110, 'psoredn1PSO160413123507', 'ME041305', 0.00),
(111, 'psoredn1PSO160413123507', 'ME041302', 0.00),
(112, 'psoredn1PSO160413123722', 'ME030121', 1300.00),
(113, 'psoredn1PSO160413123722', 'ME041318', 0.00),
(114, 'psoredn1PSO160413123722', 'ME041302', 0.00),
(115, 'psoredn1PSO160413124312', 'ME030114', 1000.00),
(116, 'psoredn1PSO160413124312', 'ME041302', 0.00),
(117, 'psoredn1PSO160413124312', 'ME041312', 0.00),
(118, 'psoredn1PSO160413125331', 'ME030109', 1300.00),
(119, 'psoredn1PSO160413125331', 'ME041302', 0.00),
(120, 'psoredn1PSO160413125331', 'ME041318', 0.00),
(121, 'psoredn1PSO160413132113', 'ME030114', 1000.00),
(122, 'psoredn1PSO160413132113', 'ME041302', 0.00),
(123, 'psoredn1PSO160413132113', 'ME041318', 0.00),
(124, 'psoredn2PSO160413132113', 'ME030114', 1000.00),
(125, 'psoredn2PSO160413132113', 'ME041302', 0.00),
(126, 'psoredn2PSO160413132113', 'ME041318', 0.00),
(127, 'psoredn1PSO160413133810', 'ME041302', 0.00),
(128, 'psoredn1PSO160413133810', 'ME041318', 0.00),
(129, 'psoredn1PSO160413133810', 'ME030408', 1200.00),
(130, 'psoredn2PSO160413133810', 'ME030205', 1300.00),
(131, 'psoredn2PSO160413133810', 'ME041302', 0.00),
(132, 'psoredn2PSO160413133810', 'ME041318', 0.00),
(133, 'psoredn3PSO160413133810', 'ME030121', 1300.00),
(134, 'psoredn3PSO160413133810', 'ME041312', 0.00),
(135, 'psoredn3PSO160413133810', 'ME041302', 0.00),
(136, 'psoredn4PSO160413133810', 'ME030122', 1500.00),
(137, 'psoredn4PSO160413133810', 'ME041318', 0.00),
(138, 'psoredn1PSO160413134233', 'ME030118', 1300.00),
(139, 'psoredn1PSO160413134233', 'ME041302', 0.00),
(140, 'psoredn1PSO160413134233', 'ME041312', 0.00),
(141, 'psoredn1PSO160413134233', 'ME030118', 1300.00),
(142, 'psoredn1PSO160413134233', 'ME041312', 0.00),
(143, 'psoredn1PSO160413134233', 'ME041318', 0.00),
(144, 'psoredn1PSO160413134233', 'ME030121', 1300.00),
(145, 'psoredn1PSO160413134233', 'ME041312', 0.00),
(146, 'psoredn1PSO160413134233', 'ME041302', 0.00),
(147, 'psoredn1PSO160413134233', 'ME030205', 1300.00),
(148, 'psoredn1PSO160413134233', 'ME041312', 0.00),
(149, 'psoredn1PSO160413134233', 'ME041302', 0.00),
(150, 'psoredn1PSO160413134832', 'ME030117', 1500.00),
(151, 'psoredn1PSO160413134832', 'ME041302', 0.00),
(152, 'psoredn1PSO160413134832', 'ME041318', 0.00),
(153, 'psoredn2PSO160413134832', 'ME030207', 1300.00),
(154, 'psoredn2PSO160413134832', 'ME041302', 0.00),
(155, 'psoredn2PSO160413134832', 'ME041318', 0.00),
(156, 'psoredn3PSO160414123312', 'ME030206', 1500.00),
(157, 'psoredn3PSO160414123312', 'ME041319', 0.00),
(158, 'psoredn1PSO160414132745', 'ME030122', 1500.00),
(159, 'psoredn1PSO160414132745', 'ME041312', 0.00),
(160, 'psoredn2PSO160414132745', 'ME030122', 1500.00),
(161, 'psoredn2PSO160414132745', 'ME041312', 0.00),
(162, 'psoredn2PSO160414132914', 'ME030114', 1000.00),
(163, 'psoredn2PSO160414132914', 'ME041312', 0.00),
(164, 'psoredn2PSO160414132914', 'ME041320', 0.00),
(165, 'psoredn1PSO160414142353', 'ME041312', 0.00),
(166, 'psoredn1PSO160414142353', 'ME041319', 0.00),
(167, 'psoredn1PSO160414142353', 'ME030306', 1200.00),
(168, 'psoredn1PSO160415124815', 'ME030120', 1200.00),
(169, 'psoredn1PSO160415124815', 'ME041312', 0.00),
(170, 'psoredn1PSO160415124815', 'ME041319', 0.00),
(171, 'psoredn1PSO160416132751', 'ME030124', 1500.00),
(172, 'psoredn1PSO160416132751', 'ME030124', 1500.00),
(173, 'psoredn1PSO160416140055', 'ME030117', 1500.00),
(174, 'psoredn1PSO160416140055', 'ME030124', 1500.00),
(175, 'psoredn2PSO160418124033', 'ME030114', 1000.00),
(176, 'psoredn2PSO160418124033', 'ME041312', 0.00),
(177, 'psoredn1PSO160418124348', 'ME030206', 1500.00),
(178, 'psoredn1PSO160418124348', 'ME041305', 0.00),
(179, 'psoredn1PSO160420122444', 'ME030205', 1300.00),
(180, 'psoredn1PSO160420122444', 'ME041312', 0.00),
(181, 'psoredn1PSO160420122444', 'ME041324', 0.00),
(182, 'psoredn1PSO160420130043', 'ME030118', 1300.00),
(183, 'psoredn1PSO160420130043', 'ME030118', 1300.00),
(184, 'psoredn1PSO160420130043', 'ME030118', 1300.00),
(185, 'psoredn2PSO160420130043', 'ME030305', 1300.00),
(186, 'psoredn2PSO160420130043', 'ME030305', 1300.00),
(187, 'psoredn2PSO160420130043', 'ME030306', 1200.00),
(188, 'psoredn2PSO160420130043', 'ME030306', 1200.00),
(189, 'psoredn3PSO160420130043', 'ME030122', 1500.00),
(190, 'psoredn3PSO160420130043', 'ME030109', 1300.00),
(191, 'psoredn1PSO160420131250', 'ME030205', 1300.00),
(192, 'psoredn1PSO160420131250', 'ME041305', 0.00),
(193, 'psoredn2PSO160420131250', 'ME030121', 1300.00),
(194, 'psoredn2PSO160420131250', 'ME041305', 0.00),
(195, 'psoredn1PSO160420134539', 'ME030122', 1500.00),
(196, 'psoredn1PSO160420135051', 'ME030114', 1000.00),
(197, 'psoredn1PSO160420135051', 'ME041305', 0.00),
(198, 'psoredn1PSO160421115737', 'ME030611', 1350.00),
(199, 'psoredn1PSO160421115737', 'ME030611', 1350.00),
(200, 'psoredn1PSO160421120639', 'ME030118', 1300.00),
(201, 'psoredn1PSO160421121955', 'ME030117', 1500.00),
(202, 'psoredn1PSO160421121955', 'ME041325', 0.00),
(203, 'psoredn1PSO160421121955', 'ME041326', 0.00),
(204, 'psoredn2PSO160421121955', 'ME030306', 1200.00),
(205, 'psoredn2PSO160421121955', 'ME041312', 0.00),
(206, 'psoredn2PSO160421121955', 'ME041325', 0.00),
(207, 'psoredn4PSO160421121955', 'ME030305', 1300.00),
(208, 'psoredn4PSO160421121955', 'ME041312', 0.00),
(209, 'psoredn4PSO160421121955', 'ME041325', 0.00),
(210, 'psoredn5PSO160421121955', 'ME030611', 1350.00),
(211, 'psoredn1PSO160421122408', 'ME030306', 1200.00),
(212, 'psoredn2PSO160421122408', 'ME030306', 1200.00),
(213, 'psoredn1PSO160421122810', 'ME030117', 1500.00),
(214, 'psoredn1PSO160421122810', 'ME041325', 0.00),
(215, 'psoredn1PSO160421122810', 'ME041326', 0.00),
(216, 'psoredn1PSO160421123346', 'ME030122', 1500.00),
(217, 'psoredn1PSO160421123346', 'ME041312', 0.00),
(218, 'psoredn1PSO160421123346', 'ME041325', 0.00),
(219, 'psoredn1PSO160421123346', 'ME030118', 1300.00),
(220, 'psoredn1PSO160421123346', 'ME041325', 0.00),
(221, 'psoredn1PSO160421123428', 'ME030114', 1000.00),
(222, 'psoredn1PSO160421123428', 'ME041312', 0.00),
(223, 'psoredn1PSO160421123428', 'ME041325', 0.00),
(224, 'psoredn1PSO160421124536', 'ME030611', 1350.00),
(225, 'psoredn1PSO160421124536', 'ME030611', 1350.00),
(226, 'psoredn1PSO160421125337', 'ME030611', 1350.00),
(227, 'psoredn1PSO160421131551', 'ME030121', 1300.00),
(228, 'psoredn1PSO160421131551', 'ME041325', 0.00),
(229, 'psoredn2PSO160421131551', 'ME030124', 1500.00),
(230, 'psoredn2PSO160421131551', 'ME041325', 0.00),
(231, 'psoredn1PSO160422120935', 'ME030117', 1500.00),
(232, 'psoredn1PSO160422123844', 'ME030109', 1300.00),
(233, 'psoredn1PSO160422123844', 'ME030124', 1500.00),
(234, 'psoredn1PSO160422123844', 'ME041312', 0.00),
(235, 'psoredn1PSO160423155752', 'ME030114', 1000.00),
(236, 'psoredn1PSO160423161026', 'ME030207', 1300.00),
(237, 'psoredn1PSO160423164739', 'ME030122', 1500.00),
(238, 'psoredn1PSO160425125508', 'ME030114', 1000.00),
(239, 'psoredn1PSO160425125508', 'ME030114', 1000.00),
(240, 'psoredn1PSO160425125508', 'ME041312', 0.00),
(241, 'psoredn1PSO160425125508', 'ME041312', 0.00),
(242, 'psoredn1PSO160425125815', 'ME030114', 1000.00),
(243, 'psoredn1PSO160425125815', 'ME041312', 0.00),
(244, 'psoredn1PSO160426115745', 'ME030207', 1300.00),
(245, 'psoredn1PSO160426115745', 'ME041312', 0.00),
(246, 'psoredn1PSO160426122513', 'ME030117', 1500.00),
(247, 'psoredn1PSO160426122513', 'ME041312', 0.00),
(248, 'psoredn1PSO160426123543', 'ME030114', 1000.00),
(249, 'psoredn1PSO160426123543', 'ME041305', 0.00),
(250, 'psoredn1PSO160426130556', 'ME030114', 1000.00),
(251, 'psoredn1PSO160426130556', 'ME041305', 0.00),
(252, 'psoredn3PSO160426130556', 'ME030205', 1300.00),
(253, 'psoredn3PSO160426130556', 'ME041312', 0.00),
(254, 'psoredn3PSO160426130556', 'ME041305', 0.00),
(255, 'psoredn1PSO160426131048', 'ME030117', 1500.00),
(256, 'psoredn1PSO160426131048', 'ME041305', 0.00),
(257, 'psoredn1PSO160426131048', 'ME041312', 0.00),
(258, 'psoredn2PSO160426131048', 'ME030117', 1500.00),
(259, 'psoredn2PSO160426131048', 'ME041305', 0.00),
(260, 'psoredn2PSO160426131048', 'ME041312', 0.00),
(261, 'psoredn4PSO160426131048', 'ME030121', 1300.00),
(262, 'psoredn4PSO160426131048', 'ME041312', 0.00),
(263, 'psoredn4PSO160426131048', 'ME041305', 0.00),
(264, 'psoredn1PSO160426131552', 'ME030109', 1300.00),
(265, 'psoredn1PSO160426131552', 'ME041305', 0.00),
(266, 'psoredn1PSO160426132301', 'ME030120', 1200.00),
(267, 'psoredn1PSO160426132301', 'ME041312', 0.00),
(268, 'psoredn1PSO160426133257', 'ME030117', 1500.00),
(269, 'psoredn1PSO160426133257', 'ME041305', 0.00),
(270, 'psoredn1PSO160426133257', 'ME041305', 0.00),
(271, 'psoredn2PSO160426133257', 'ME030123', 1200.00),
(272, 'psoredn2PSO160426133257', 'ME041312', 0.00),
(273, 'psoredn2PSO160426133257', 'ME041305', 0.00),
(274, 'psoredn1PSO160426134806', 'ME030114', 1000.00),
(275, 'psoredn1PSO160426134806', 'ME030109', 1300.00),
(276, 'psoredn1PSO160426134806', 'ME041312', 0.00),
(277, 'psoredn1PSO160427112628', 'ME030601', 1200.00),
(278, 'psoredn1PSO160427112628', 'ME030124', 1500.00),
(279, 'psoredn1PSO160427122619', 'ME030601', 1200.00),
(280, 'psoredn2PSO160427123151', 'ME030601', 1200.00),
(281, 'psoredn1PSO160427123744', 'ME030601', 1200.00),
(282, 'psoredn1PSO160427123744', 'ME030601', 1200.00),
(283, 'psoredn1PSO160427123744', 'ME030601', 1200.00),
(284, 'psoredn1PSO160427124030', 'ME030601', 1200.00),
(285, 'psoredn1PSO160427124057', 'ME030117', 1500.00),
(286, 'psoredn1PSO160427124057', 'ME030117', 1500.00),
(287, 'psoredn1PSO160427124057', 'ME041312', 0.00),
(288, 'psoredn1PSO160427124057', 'ME041325', 0.00),
(289, 'psoredn2PSO160427124057', 'ME030601', 1200.00),
(290, 'psoredn1PSO160427124211', 'ME030114', 1000.00),
(291, 'psoredn1PSO160427124211', 'ME041312', 0.00),
(292, 'psoredn1PSO160427124211', 'ME041320', 0.00),
(293, 'psoredn2PSO160427124211', 'ME030601', 1200.00),
(294, 'psoredn1PSO160427124940', 'ME030601', 1200.00),
(295, 'psoredn1PSO160427124940', 'ME030601', 1200.00),
(296, 'psoredn1PSO160427124940', 'ME030601', 1200.00),
(297, 'psoredn1PSO160427125111', 'ME030601', 1200.00),
(298, 'psoredn1PSO160427125111', 'ME030601', 1200.00),
(299, 'psoredn1PSO160427130059', 'ME030120', 1200.00),
(300, 'psoredn1PSO160427130059', 'ME041312', 0.00),
(301, 'psoredn1PSO160427130059', 'ME041320', 0.00),
(302, 'psoredn1PSO160427130059', 'ME041325', 0.00),
(303, 'psoredn1PSO160427130227', 'ME030117', 1500.00),
(304, 'psoredn1PSO160427130227', 'ME041312', 0.00),
(305, 'psoredn1PSO160427130227', 'ME041325', 0.00),
(306, 'psoredn1PSO160427134422', 'ME030121', 1300.00),
(307, 'psoredn1PSO160428182609', 'ME030118', 1300.00),
(308, 'psoredn1PSO160430122915', 'ME030117', 1500.00),
(309, 'psoredn1PSO160430122915', 'ME041312', 0.00),
(310, 'psoredn1PSO160430122915', 'ME041325', 0.00),
(311, 'psoredn1PSO160430124718', 'ME030206', 1500.00),
(312, 'psoredn1PSO160430124718', 'ME041312', 0.00),
(313, 'psoredn1PSO160430124718', 'ME041325', 0.00),
(314, 'psoredn1PSO160430134222', 'ME030117', 1500.00),
(315, 'psoredn1PSO160430134222', 'ME041325', 0.00),
(316, 'psoredn1PSO160430134222', 'ME041312', 0.00),
(317, 'psoredn2PSO160430134222', 'ME041312', 0.00),
(318, 'psoredn2PSO160430134222', 'ME041325', 0.00),
(319, 'psoredn2PSO160430134222', 'ME030117', 1500.00),
(320, 'psoredn1PSO160502120847', 'ME030114', 1000.00),
(321, 'psoredn1PSO160502120847', 'ME041325', 0.00),
(322, 'psoredn2PSO160502120847', 'ME030114', 1000.00),
(323, 'psoredn3PSO160502120847', 'ME030109', 1300.00),
(324, 'psoredn1PSO160502122156', 'ME030206', 1500.00),
(325, 'psoredn2PSO160502122156', 'ME030118', 1300.00),
(326, 'psoredn1PSO160502122823', 'ME030124', 1500.00),
(327, 'psoredn1PSO160502123520', 'ME030209', 1800.00),
(328, 'psoredn2PSO160502123521', 'ME030209', 1800.00),
(329, 'psoredn2PSO160502133131', 'ME030206', 1500.00),
(330, 'psoredn1PSO160502134323', 'ME030117', 1500.00),
(331, 'psoredn1PSO160504115614', 'ME030210', 1800.00),
(332, 'psoredn1PSO160504115614', 'ME041325', 0.00),
(333, 'psoredn1PSO160504120055', 'ME030117', 1800.00),
(334, 'psoredn1PSO160504120055', 'ME030117', 1800.00),
(335, 'psoredn1PSO160504120055', 'ME030117', 1800.00),
(336, 'psoredn1PSO160504120159', 'ME030114', 1000.00),
(337, 'psoredn1PSO160504120159', 'ME041325', 0.00),
(338, 'psoredn2PSO160504121959', 'ME030109', 1800.00),
(339, 'psoredn2PSO160504121959', 'ME030109', 1800.00),
(340, 'psoredn2PSO160504121959', 'ME041312', 0.00),
(341, 'psoredn2PSO160504121959', 'ME041325', 0.00),
(342, 'psoredn2PSO160504121959', 'ME041325', 0.00),
(343, 'psoredn2PSO160504121959', 'ME030120', 1200.00),
(344, 'psoredn2PSO160504121959', 'ME041325', 0.00),
(345, 'psoredn1PSO160504124917', 'ME030117', 1800.00),
(346, 'psoredn2PSO160504124917', 'ME030120', 1200.00),
(347, 'psoredn2PSO160504124917', 'ME041312', 0.00),
(348, 'psoredn2PSO160504124917', 'ME041325', 0.00),
(349, 'psoredn2PSO160504124917', 'ME041312', 0.00),
(350, 'psoredn2PSO160504124917', 'ME041325', 0.00),
(351, 'psoredn1PSO160504130901', 'ME030114', 1000.00),
(352, 'psoredn1PSO160504130901', 'ME030114', 1000.00),
(353, 'psoredn1PSO160504130901', 'ME041325', 0.00),
(354, 'psoredn1PSO160504130901', 'ME041325', 0.00),
(355, 'psoredn1PSO160504134829', 'ME030114', 1000.00),
(356, 'psoredn1PSO160504134829', 'ME041320', 0.00),
(357, 'psoredn1PSO160504134829', 'ME041312', 0.00),
(358, 'psoredn1PSO160504135208', 'ME030114', 1000.00),
(359, 'psoredn1PSO160504135208', 'ME030120', 1200.00),
(360, 'psoredn1PSO160504135208', 'ME041325', 0.00),
(361, 'psoredn1PSO160504135208', 'ME041320', 0.00),
(362, 'psoredn1PSO160504135208', 'ME041325', 0.00),
(363, 'psoredn1PSO160504135208', 'ME041320', 0.00),
(364, 'psoredn1PSO160513125121', 'ME030118', 1800.00),
(365, 'psoredn1PSO160513125121', 'ME041312', 0.00),
(366, 'psoredn2PSO160513125121', 'ME030124', 1800.00),
(367, 'psoredn2PSO160513125121', 'ME041312', 0.00),
(369, 'psoredn2PSO160513130906', 'ME030509', 2000.00),
(370, 'psoredn1PSO160513131240', 'ME030206', 1800.00),
(371, 'psoredn1PSO160513132112', 'ME030509', 2000.00),
(372, 'psoredn1PSO160513135437', 'ME030509', 2000.00),
(373, 'psoredn1PSO160513135908', 'ME030118', 1800.00),
(374, 'psoredn2PSO160513135908', 'ME030123', 1200.00),
(375, 'psoredn1PSO160513154441', 'ME030109', 1800.00),
(376, 'psoredn1PSO160513154441', 'ME041312', 0.00),
(377, 'psoredn2PSO160513154442', 'ME030206', 1800.00),
(378, 'psoredn2PSO160513154442', 'ME041312', 0.00),
(379, 'psoredn1PSO160513173613', 'ME030206', 1800.00),
(380, 'psoredn1PSO160513173613', 'ME041312', 0.00),
(381, 'psoredn4PSO160513173613', 'ME030207', 1800.00),
(382, 'psoredn4PSO160513173613', 'ME041312', 0.00),
(383, 'psoredn1PSO160514125714', 'ME030207', 1800.00),
(384, 'psoredn1PSO160514125714', 'ME041312', 0.00),
(385, 'psoredn1PSO160514131947', 'ME030306', 1800.00),
(386, 'psoredn1PSO160514131947', 'ME041312', 0.00),
(387, 'psoredn2PSO160514131947', 'ME030307', 1800.00),
(388, 'psoredn2PSO160514131947', 'ME041312', 0.00),
(389, 'psoredn1PSO160514135207', 'ME030124', 1800.00),
(390, 'psoredn1PSO160514135207', 'ME030109', 1800.00),
(391, 'psoredn1PSO160514135207', 'ME041312', 0.00),
(392, 'psoredn1PSO160514145655', 'ME030307', 1800.00),
(393, 'psoredn1PSO160514145655', 'ME041312', 0.00),
(394, 'psoredn2PSO160514145655', 'ME030117', 1800.00),
(395, 'psoredn2PSO160514145655', 'ME041312', 0.00),
(396, 'psoredn1PSO160517121814', 'ME030509', 2000.00),
(397, 'psoredn1PSO160517123504', 'ME030509', 2000.00),
(398, 'psoredn1PSO160517123504', 'ME030509', 2000.00),
(399, 'psoredn1PSO160517131202', 'ME030117', 2500.00),
(400, 'psoredn1PSO160517131202', 'ME030117', 2500.00),
(401, 'psoredn1PSO160517131202', 'ME030117', 2500.00),
(402, 'psoredn1PSO160517131941', 'ME030509', 2000.00),
(403, 'psoredn1PSO160517131941', 'ME030123', 2200.00),
(404, 'psoredn1PSO160518122204', 'ME030114', 1800.00),
(405, 'psoredn1PSO160518122204', 'ME041209', 0.00),
(406, 'psoredn2PSO160518122204', 'ME030114', 1800.00),
(407, 'psoredn2PSO160518122204', 'ME041209', 0.00),
(408, 'psoredn2PSO160518122547', 'ME030117', 2500.00),
(409, 'psoredn1PSO160518130736', 'ME030618', 2700.00),
(410, 'psoredn2PSO160518130736', 'ME030619', 2000.00),
(411, 'psoredn1PSO160518140303', 'ME030618', 2700.00),
(412, 'psoredn1PSO160518140303', 'ME041211', 0.00),
(413, 'psoredn1PSO160518140303', 'ME041209', 0.00),
(415, 'psoredn2PSO160518140303', 'ME041211', 0.00),
(416, 'psoredn2PSO160518140303', 'ME041208', 0.00),
(417, 'psoredn3PSO160518140303', 'ME030619', 2000.00),
(418, 'psoredn3PSO160518140303', 'ME041208', 0.00),
(419, 'psoredn3PSO160518140303', 'ME041211', 0.00),
(420, 'psoredn1PSO160518141909', 'ME030206', 2800.00),
(421, 'psoredn1PSO160519122149', 'ME030122', 2500.00),
(422, 'psoredn1PSO160519122149', 'ME041319', 0.00),
(423, 'psoredn1PSO160520123020', 'ME030122', 2500.00),
(424, 'psoredn1PSO160520123020', 'ME041312', 0.00),
(425, 'psoredn2PSO160520123020', 'ME030114', 1800.00),
(426, 'psoredn2PSO160520123020', 'ME041312', 0.00),
(427, 'psoredn1PSO160520141458', 'ME030619', 2000.00),
(428, 'psoredn1PSO160520141458', 'ME030619', 2000.00),
(429, 'psoredn2PSO160520141458', 'ME030121', 2400.00),
(430, 'psoredn3PSO160520141458', 'ME030620', 2500.00),
(436, 'psoredn1PSO160522125338', 'ME030114', 1800.00),
(437, 'psoredn1PSO160522125338', 'ME041333', 0.00),
(438, 'psoredn1PSO160522125338', 'ME041334', 0.00),
(439, 'psoredn2PSO160522125339', 'ME030123', 2200.00),
(440, 'psoredn2PSO160522125339', 'ME041312', 0.00),
(441, 'psoredn2PSO160522125339', 'ME041334', 0.00),
(442, 'psoredn1PSO160524124531', 'ME030114', 1800.00),
(443, 'psoredn1PSO160524124531', 'ME041312', 0.00),
(444, 'psoredn1PSO160524124531', 'ME041319', 0.00),
(445, 'psoredn1PSO160524130034', 'ME030120', 2500.00),
(446, 'psoredn1PSO160524130034', 'ME030120', 2500.00),
(447, 'psoredn1PSO160524130034', 'ME030117', 2500.00),
(448, 'psoredn1PSO160524132917', 'ME030509', 2000.00),
(449, 'psoredn1PSO160524132917', 'ME030509', 2000.00),
(450, 'psoredn1PSO160524134126', 'ME030509', 2000.00),
(451, 'psoredn3PSO160525122854', 'ME030122', 2500.00),
(452, 'psoredn3PSO160525122854', 'ME041314', 0.00),
(453, 'psoredn3PSO160525122854', 'ME041335', 0.00),
(454, 'psoredn4PSO160525122854', 'ME041312', 0.00),
(455, 'psoredn4PSO160525122854', 'ME041314', 0.00),
(456, 'psoredn1PSO160525131619', 'ME030623', 2900.00),
(457, 'psoredn1PSO160525131619', 'ME041314', 0.00),
(458, 'psoredn1PSO160525131619', 'ME041335', 0.00),
(459, 'psoredn2PSO160525131619', 'ME030306', 2800.00),
(460, 'psoredn2PSO160525131619', 'ME041314', 0.00),
(461, 'psoredn2PSO160525131619', 'ME041335', 0.00),
(462, 'psoredn3PSO160525131619', 'ME030623', 2900.00),
(463, 'psoredn3PSO160525131619', 'ME041314', 0.00),
(464, 'psoredn3PSO160525131619', 'ME041335', 0.00),
(465, 'psoredn1PSO160525132228', 'ME030117', 2500.00),
(466, 'psoredn1PSO160525132228', 'ME041312', 0.00),
(467, 'psoredn1PSO160525132228', 'ME041335', 0.00),
(468, 'psoredn2PSO160525132228', 'ME041312', 0.00),
(469, 'psoredn2PSO160525132228', 'ME041335', 0.00),
(470, 'psoredn2PSO160525132228', 'ME030117', 2500.00),
(471, 'psoredn1PSO160525134749', 'ME030124', 2600.00),
(472, 'psoredn1PSO160525134749', 'ME041312', 0.00),
(473, 'psoredn1PSO160525134749', 'ME041335', 0.00),
(474, 'psoredn1PSO160525153057', 'ME030124', 2600.00),
(475, 'psoredn1PSO160525153057', 'ME041335', 0.00),
(476, 'psoredn1PSO160525153057', 'ME041312', 0.00),
(477, 'psoredn1PSO160526120701', 'ME030601', 2500.00),
(478, 'psoredn1PSO160526120701', 'ME030601', 2500.00),
(479, 'psoredn1PSO160526124938', 'ME030122', 2500.00),
(480, 'psoredn1PSO160526131531', 'ME041336', 0.00),
(481, 'psoredn2PSO160526131531', 'ME030118', 2400.00),
(482, 'psoredn1PSO160526142716', 'ME030601', 2500.00),
(483, 'psoredn1PSO160528131030', 'ME030206', 2800.00),
(484, 'psoredn1PSO160528131030', 'ME030306', 2800.00),
(485, 'psoredn2PSO160528143104', 'ME030124', 2600.00),
(486, 'psoredn3PSO160528143104', 'ME030120', 2500.00),
(487, 'psoredn3PSO160528143104', 'ME041312', 0.00),
(488, 'psoredn3PSO160528143104', 'ME041312', 0.00),
(489, 'psoredn4PSO160528143104', 'ME030114', 1800.00),
(490, 'psoredn1PSO160529120655', 'ME030306', 2800.00),
(491, 'psoredn1PSO160529120655', 'ME041312', 0.00),
(492, 'psoredn2PSO160529120655', 'ME030114', 1800.00),
(493, 'psoredn2PSO160529120655', 'ME041312', 0.00),
(494, 'psoredn1PSO160530153251', 'ME030305', 2500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data16`
--

CREATE TABLE IF NOT EXISTS `data16` (
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

CREATE TABLE IF NOT EXISTS `data17` (
`id` int(11) NOT NULL,
  `NombreMenu` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del menú',
  `Estado` int(1) NOT NULL COMMENT 'Estado del menú',
  `Activo` int(1) NOT NULL COMMENT 'Activo o inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Menús del sistemas';

--
-- Volcado de datos para la tabla `data17`
--

INSERT INTO `data17` (`id`, `NombreMenu`, `Estado`, `Activo`) VALUES
(1, 'Menú General', 1, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista00`
--
CREATE TABLE IF NOT EXISTS `vista00` (
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
CREATE TABLE IF NOT EXISTS `vista01` (
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
CREATE TABLE IF NOT EXISTS `vista02` (
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
CREATE TABLE IF NOT EXISTS `vista03` (
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
CREATE TABLE IF NOT EXISTS `vista04` (
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
CREATE TABLE IF NOT EXISTS `vista05` (
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
CREATE TABLE IF NOT EXISTS `vista06` (
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
CREATE TABLE IF NOT EXISTS `vista07` (
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
CREATE TABLE IF NOT EXISTS `vista08` (
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
CREATE TABLE IF NOT EXISTS `vista09` (
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
CREATE TABLE IF NOT EXISTS `vista10` (
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
CREATE TABLE IF NOT EXISTS `vista11` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista00` AS select `data02`.`id` AS `IdUsuario`,`data02`.`Cedula` AS `Cedula`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`PrimerApellido` AS `PrimerApellido`,`data02`.`Usuario` AS `Usuario`,`data02`.`Pass` AS `Pass`,`data02`.`Estado` AS `Estado`,`data03`.`id` AS `IdRol`,`data03`.`NombreRol` AS `NombreRol`,`data03`.`Estado` AS `RolEstado` from (`data02` join `data03` on((`data02`.`Rol` = `data03`.`id`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista01`
--
DROP TABLE IF EXISTS `vista01`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista01` AS select `data01`.`id` AS `id`,`data01`.`NombreModulo` AS `NombreModulo`,`data01`.`Modulo` AS `Modulo`,`data01`.`Niveles` AS `Niveles`,`data03`.`id` AS `IdRol`,`data03`.`NombreRol` AS `NombreRol` from ((`data04` join `data01` on((`data04`.`IdModulo` = `data01`.`id`))) join `data03` on((`data04`.`IdRol` = `data03`.`id`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista02`
--
DROP TABLE IF EXISTS `vista02`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista02` AS select `data02`.`id` AS `id`,`data02`.`CodigoTbr` AS `CodigoTbr`,`data02`.`Type` AS `Type`,`data02`.`Cedula` AS `Cedula`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`SegundoNombre` AS `SegundoNombre`,`data02`.`PrimerApellido` AS `PrimerApellido`,`data02`.`SegundoApellido` AS `SegundoApellido`,`data02`.`Usuario` AS `Usuario`,`data02`.`Pass` AS `Pass`,`data02`.`FechaIngreso` AS `FechaIngreso`,`data02`.`Estado` AS `Estado`,`data02`.`Rol` AS `Rol`,concat(`data02`.`Type`,`data02`.`Cedula`) AS `TypeCedula` from `data02`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista03`
--
DROP TABLE IF EXISTS `vista03`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista03` AS select `data05`.`id` AS `id`,`data05`.`NombreProducto` AS `NombreProducto`,`data05`.`Descripcion` AS `Descripcion`,`data05`.`Existencia` AS `Existencia`,`data05`.`TipoUnidad` AS `TipoUnidad`,`data05`.`Estado` AS `Estado`,`data05`.`FechaIng` AS `FechaIng`,`data07`.`Medida` AS `Medida`,`data07`.`Abreviatura` AS `Abreviatura` from (`data05` join `data07` on((`data05`.`TipoUnidad` = `data07`.`id`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista04`
--
DROP TABLE IF EXISTS `vista04`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista04` AS select `data08`.`Lote` AS `Lote`,`data08`.`Cantidad` AS `Cantidad`,`data08`.`Tipo` AS `Tipo`,`data08`.`FechaIngreso` AS `FechaIngreso`,`data08`.`FechaCaducidad` AS `FechaCaducidad`,`data08`.`IdProducto` AS `IdProducto`,`vista03`.`id` AS `id`,`vista03`.`NombreProducto` AS `NombreProducto`,`vista03`.`Descripcion` AS `Descripcion`,`vista03`.`Existencia` AS `Existencia`,`vista03`.`TipoUnidad` AS `TipoUnidad`,`vista03`.`Estado` AS `Estado`,`vista03`.`FechaIng` AS `FechaIng`,`vista03`.`Medida` AS `Medida`,`vista03`.`Abreviatura` AS `Abreviatura` from (`data08` join `vista03` on((`data08`.`IdProducto` = `vista03`.`id`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista05`
--
DROP TABLE IF EXISTS `vista05`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista05` AS select `data11`.`MesaNumero` AS `MesaNumero`,`data11`.`Estado` AS `Estado`,`data11`.`Motivos` AS `Motivos`,`data11`.`EstadoActual` AS `EstadoActual`,`data11`.`NumeroOrdenActivo` AS `NumeroOrdenActivo`,`data13`.`IdOrden` AS `IdOrden`,`data13`.`Mesa` AS `Mesa`,`data13`.`FechaDePedido` AS `FechaDePedido`,`data13`.`Estatus` AS `Estatus` from (`data11` join `data13` on((`data11`.`NumeroOrdenActivo` = `data13`.`IdOrden`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista06`
--
DROP TABLE IF EXISTS `vista06`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista06` AS select `data14`.`Despacho` AS `Despacho`,`data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data14`.`Orden` AS `Orden`,`data14`.`Costo` AS `DeCosto`,`data14`.`Personalizado` AS `Personalizado`,`data14`.`Cantidad` AS `Cantidad` from (`data12` join `data14` on((`data12`.`id` = `data14`.`IdPlato`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista07`
--
DROP TABLE IF EXISTS `vista07`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista07` AS select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data15`.`IdPersolizado` AS `IdPersolizado`,`data15`.`CostoSec` AS `CostoSec` from (`data12` join `data15` on((`data12`.`id` = `data15`.`IdPlatoSec`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista08`
--
DROP TABLE IF EXISTS `vista08`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista08` AS select `data06`.`id` AS `id`,`data06`.`IdOperador` AS `IdOperador`,`data06`.`Registro` AS `Registro`,`data06`.`IdDatoUsuario` AS `IdDatoUsuario`,`data06`.`Módulo` AS `Módulo`,`data06`.`Fecha` AS `Fecha`,`data06`.`IP` AS `IP`,`data06`.`Estado` AS `Estado`,`data06`.`Tipo` AS `Tipo`,`data02`.`PrimerNombre` AS `PrimerNombre`,`data02`.`PrimerApellido` AS `PrimerApellido` from (`data06` join `data02` on((`data06`.`IdOperador` = `data02`.`CodigoTbr`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista09`
--
DROP TABLE IF EXISTS `vista09`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista09` AS select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data14`.`Id` AS `Idoden`,`data14`.`Orden` AS `Orden`,`data14`.`Costo` AS `DeCosto`,`data14`.`Personalizado` AS `Personalizado`,`data14`.`Cantidad` AS `Cantidad` from (`data12` join `data14` on((`data12`.`id` = `data14`.`IdPlato`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista10`
--
DROP TABLE IF EXISTS `vista10`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista10` AS select `data12`.`id` AS `id`,`data12`.`Nombre` AS `Nombre`,`data12`.`Nivel` AS `Nivel`,`data12`.`Subniveles` AS `Subniveles`,`data12`.`Estado` AS `Estado`,`data12`.`Platillo` AS `Platillo`,`data12`.`Costo` AS `Costo`,`data12`.`Ingreso` AS `Ingreso`,`data12`.`Actualizado` AS `Actualizado`,`data15`.`Id` AS `IdPer`,`data15`.`IdPersolizado` AS `IdPersolizado`,`data15`.`CostoSec` AS `CostoSec` from (`data12` join `data15` on((`data12`.`id` = `data15`.`IdPlatoSec`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vista11`
--
DROP TABLE IF EXISTS `vista11`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista11` AS select `data09`.`id` AS `id`,`data09`.`id_user` AS `id_user`,`data09`.`Cantidad` AS `Cantidad`,`data09`.`Tipo` AS `Tipo`,`data09`.`FechaRegistro` AS `FechaRegistro`,`data09`.`Motivo` AS `Motivo`,`data09`.`IdProducto` AS `IdProducto`,`data05`.`NombreProducto` AS `NombreProducto` from (`data09` join `data05` on((`data09`.`IdProducto` = `data05`.`id`)));

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
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `data11`
--
ALTER TABLE `data11`
 ADD PRIMARY KEY (`MesaNumero`);

--
-- Indices de la tabla `data12`
--
ALTER TABLE `data12`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `data02`
--
ALTER TABLE `data02`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `data03`
--
ALTER TABLE `data03`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `data05`
--
ALTER TABLE `data05`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `data06`
--
ALTER TABLE `data06`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `data07`
--
ALTER TABLE `data07`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `data09`
--
ALTER TABLE `data09`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `data11`
--
ALTER TABLE `data11`
MODIFY `MesaNumero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `data14`
--
ALTER TABLE `data14`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `data15`
--
ALTER TABLE `data15`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=495;
--
-- AUTO_INCREMENT de la tabla `data17`
--
ALTER TABLE `data17`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
