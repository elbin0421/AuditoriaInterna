-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2023 a las 00:39:29
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gastos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `errores`
--

CREATE TABLE `errores` (
  `codigo` int(4) NOT NULL,
  `planta` varchar(20) NOT NULL,
  `tienda` varchar(50) NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `semana` varchar(30) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `valor` decimal(9,2) NOT NULL,
  `error` varchar(250) NOT NULL,
  `solucion` varchar(100) NOT NULL,
  `deposito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `errores`
--

INSERT INTO `errores` (`codigo`, `planta`, `tienda`, `supervisor`, `fecha`, `semana`, `mes`, `descripcion`, `valor`, `error`, `solucion`, `deposito`) VALUES
(1, 'Villanueva', 'Los CastaÃ±os', 'Guillermo Hernandez', '2023-05-23', 'Segunda semana', 'Mayo', 'Agua purificada', 44.00, 'Vencida tienda los castaÃ±os', 'Se rechazo para que hagan deposito', 'BP-6374387'),
(2, 'Tulin', 'Planta', 'Reina Aguilar', '2023-05-23', 'Primera Semana', 'Mayo', 'compra de carbocleaner y bujia', 355.00, 'En letras solo le escribieron ciento setenta el total deveria ser 355', 'Rechazar factura para que repongan por deposito', 'OC-29812317'),
(3, 'Villanueva', 'Lopez 10', 'Guillermo Hernandez', '2023-05-22', 'Primera Semana', 'Abril', 'Gasolina', 300.00, 'Factura duplicada lopes 10', 'Rechazada para que hagan el deposito', 'AT-62155'),
(4, 'Ceiba', 'Gasera', 'Alberto Cuellar', '2023-05-20', 'Primera Semana', 'Mayo', 'Alimentacion', 199.00, 'Borrosa no se lee la informacion', 'Rechazada para que hagan de posito', 'DV-2552023'),
(5, 'Villanueva', 'Santa Barbara 1', 'Kerin Pineda', '2023-06-01', 'Segunda Semana', 'Mayo', 'Gasolina', 200.00, 'Factura vencida santa barbara 1 vencio el 31-07-23 y se hizo el 10-05-23', 'Rechazada para que hagan deposito', ' BP-6515694'),
(6, 'Villanueva', 'San Pedro 1', 'Guillermo Hernandez', '2023-06-03', 'Primera Semana', 'Mayo', 'Gasolina', 500.00, 'Reimpresion la original en tienda san predro 1 la reimpresion en paz barahona 2', 'Rechazar para que hagan depsosito', 'AT-605242'),
(7, 'Tulin', 'Planta', 'Reinga Agilar', '2023-06-05', 'Tercera Semana', 'Mayo', 'Mantenimiento de planta (200 clavos de acero)', 200.00, 'Es recibo comercial (recibos comerciales no son validos como documentos fiscales)', 'Recharzar para que repongan en deposito', 'OC-29812322'),
(8, 'Santa Rosa', 'Planta', 'German Pineda', '2023-06-09', 'Tercera Semana', 'Mayo', 'Manto y Reparacion de unidad (ROSCA PARA CAMION)', 600.00, 'Vencida factura trae que vence el 2024 al validar esta vencida desde el 25/2/2023', 'Rechazar para que hagan deposito', 'BP-1012740'),
(9, 'Santa Rosa', 'Planta', 'German Pineda', '2023-06-09', 'Cuarta Semana', 'Mayo', 'Servicio de grua', 2300.00, 'Factura con fecha de junio y la aplicaron en mayo', 'Se paso a la semana 1 de junio (tienen que hacer el deposito para cuadrar la semana 4 de mayo)', 'BP-6438156'),
(10, 'Villanueva', 'Santa Barbara 1', 'Kerin Pineda', '2023-06-16', 'Cuarta Semana', 'Mayo', 'Gasolina', 200.00, 'La factura esta con fecha de vencimiento 31-07-2023 la fecha real de vencimiento es 30-04-2023', 'Rechazar para que hagan el deposito(Santa Barbara 1)', 'BP-7004635'),
(11, 'Villanueva', 'Santa Barbara 1', 'Kerin Pineda', '2023-06-16', 'Cuarta Semana', 'Mayo', 'Gasolina', 200.00, 'La factura esta con fecha de vencimiento 23-05-2023 la fecha real de vencimiento es 30-04-2023', 'Recharzar para que hagan el deposito(Santa Barbara 1)', 'BP-7004635'),
(12, 'Villanueva', 'Digas', 'Kerin Pineda', '2023-06-16', 'Cuarta Semana', 'Mayo', 'Alimentacion', 100.00, 'Fecha limite en la factura es 31-03-2024 al validar es 06-01-2023', 'Rechazar para que hagan deposito(DIGAS)', 'BP-10232503'),
(13, 'Santa Rosa', 'Planta', 'German Pineda', '2023-06-19', 'Cuarta Semana', 'Mayo', 'Agua purificada', 180.00, 'La fecha limite de emision es el 24-05-2023 y se hizo el 29-05-2023(Vencida)', 'Rechazar para que repongan el deposito', 'BP-6439288'),
(14, 'Calpules', 'Nery Gas', 'Cristian', '2023-06-20', 'Cuarta Semana', 'Mayo', 'Gasolina', 300.00, 'Factura duplicada La factura original esta en tienda Paz Barahona y la reimpresion en tienda Nery Gas se rechazo la de nery gas', 'Rechazar para que hagan el deposito', 'BP-5461311'),
(15, 'Villanueva', 'Lopez 9', 'Guillermo', '2023-06-26', 'Segunda Semana', 'Junio', 'Gasolina', 200.00, 'Factura duplicada', 'Recharzar para que repongan por deposito', 'AT-782561'),
(16, 'Villanueva', 'San Manuel 2', 'Kerin Pineda', '2023-06-28', 'Segunda Semana', 'Junio', 'Disel', 500.00, 'No se ve el numero de la factura', 'Se cambiara la factura', 'FC-951219'),
(17, 'Santa Rosa', 'Planta', 'German Pineda', '2023-07-03', 'Tercera Semana', 'Junio', 'Compra de aceite', 320.00, 'se hizo compra de aceite para motor y mandaron boleta de compra', 'Rechazar para que hagan el deposito', 'BP-6440920'),
(18, 'Villanueva', 'Digas', 'Kerin Pineda', '2023-07-06', 'Cuarta Semana', 'Junio', 'Alimentacion', 99.99, 'Fecha limite en la factura es 31-03-2024 al validar es 06-01-2023', 'Rechazara para que hagan deposito', 'BP-10074642'),
(19, 'Villanueva', 'Santa Barbara 1', 'Kerin Pineda', '2023-07-06', 'Cuarta Semana', 'Junio', 'Regulador de gas', 125.00, 'Factura viene con fecha de julio y la aplicaron en el mes de junio 2023', 'Se paso a la primera semana de Julio 2023', 'No aplica'),
(20, 'Villanueva', 'Concepcion', 'Guillermo Hernandez', '2023-07-08', 'Cuarta Semana', 'Junio', 'Repuesto de moto', 300.00, 'Mandaron la cotizacion', 'Rechazar para que hagan deposito', 'BP-9727611'),
(21, 'Santa Rosa', 'Planta', 'German Pineda', '2023-07-11', 'Cuarta Semana', 'Junio', 'Alimentacion', 198.00, 'Factura vencida desde 02/12/2022', 'Rechazar para que hagan el deposito', 'BP-6183169'),
(22, 'Santa Rosa', 'Santa Rosa 2', 'German Pineda', '2023-07-11', 'Cuarta Semana', 'Junio', 'Cable de chutch', 70.00, 'El CAI de la factura no es el mismo que aparece en la consulta del SAR', 'Recahazar para que hagan el deposito', 'BP-6183168'),
(23, 'Villanueva', 'Potrerillos 4', 'Selvin Amaya', '2023-07-15', 'Primera Semana', 'Julio', 'Gasolina', 150.63, 'El RTN del proveedor le falta 1 numero', 'Recharzar para que hagan el deposito(rebajar de semana 2)', 'AT-558020'),
(24, 'Villanueva', 'Rio Lindo 1', 'Selvin Amaya', '2023-07-15', 'Primera Semana', 'Julio', 'Productos de limpieza', 125.00, 'El CAI de la factura no es el mismo del SAR y le faltan requisitos fiscales', 'Rechazar para que hagan deposito(Rebajar de semana 2)', 'AT-244259'),
(25, 'Santa Rosa', 'Gracias Lempira', 'GermÃ¡n Pineda', '2023-07-19', 'Primera Semana', 'Julio', 'Cable de cluch', 50.00, 'Factura vencida en factura vence el 30/6/23 en el SAR vencio 21/6/23', 'Rechazar para que hagan deposito', 'BP-6439606'),
(26, 'Santa Rosa', 'Lepaera', 'GermÃ¡n Pineda', '2023-07-19', 'Primera Semana', 'Julio', 'Hule de catarina', 200.00, 'el CAI de la factura no es el mismo del SAR', 'Reachazar para que hagan deposito', 'BP-10199336'),
(27, 'Villanueva', 'Siboney 1', 'KerÃ­n Pieneda', '2023-07-25', 'Segunda Semana', 'Julio', 'Gasolina', 120.00, 'Factura vencida', 'se rechazo para que hagan deposito', 'BP-7008452'),
(28, 'Santa Rosa', 'CIP', 'German Pineda', '2023-08-01', 'Tercera Semana', 'Julio', 'Llanta de segunda', 350.00, 'Se hizo la compra de una llanta con boleta de compra.', 'Se rechazo para que hagan el deposito.', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `codigo` int(4) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `semana` varchar(50) NOT NULL,
  `fecha_revision` date NOT NULL,
  `planta` varchar(50) NOT NULL DEFAULT '',
  `supervisor` varchar(50) NOT NULL,
  `cantidad_doc` int(4) NOT NULL DEFAULT 0,
  `t_planta` decimal(9,2) NOT NULL,
  `t_tienda` decimal(9,2) NOT NULL,
  `t_tnuevas` decimal(9,2) NOT NULL,
  `t_tiendas14` decimal(9,2) NOT NULL,
  `t_tiendas15` decimal(9,2) NOT NULL,
  `t_tiendas16` decimal(9,2) NOT NULL,
  `t_granel` decimal(9,2) NOT NULL,
  `t_vip` decimal(9,2) NOT NULL,
  `t_gasera` decimal(9,2) NOT NULL,
  `total` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `revisiones`
--

INSERT INTO `revisiones` (`codigo`, `mes`, `semana`, `fecha_revision`, `planta`, `supervisor`, `cantidad_doc`, `t_planta`, `t_tienda`, `t_tnuevas`, `t_tiendas14`, `t_tiendas15`, `t_tiendas16`, `t_granel`, `t_vip`, `t_gasera`, `total`) VALUES
(1, 'Mayo', 'Tercera Semana', '2023-05-30', 'Ceiba', 'Alberto Cuellar', 38, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 61681.30),
(2, 'Mayo', 'Tercera semana', '2023-05-30', 'San Matias', 'Juan Gomez', 41, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 30154.70),
(3, 'Mayo', 'Tercera Semana', '2023-05-31', 'Villanueva', 'Selvin Amaya', 82, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 24236.26),
(4, 'Mayo', 'Tercera Semana', '2023-05-31', 'Villanueva', 'Kerin Pineda', 103, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 19745.74),
(5, 'Mayo', 'Tercera Semana', '2023-05-31', 'Villanueva', 'Guillermo Hernandez', 166, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 47560.26),
(6, 'Mayo', 'Tercera Semana', '2023-06-01', 'Guanabano', 'Franklin', 214, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 112336.89),
(7, 'Mayo', 'Tercera Semana', '2023-06-01', 'Santa Elena', 'Norma Sanchez', 65, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 28852.96),
(8, 'Mayo', 'Tercera Semana', '2023-06-01', 'Saba', 'Mario ', 42, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 19669.74),
(9, 'Mayo', 'Tercera Semana', '2023-06-01', 'El Chile', 'Denis Figueroa', 126, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 38597.46),
(10, 'Mayo', 'Tercera Semana', '2023-06-01', 'Calpules', 'Cristian', 231, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 58562.82),
(11, 'Mayo', 'Tercera Semana', '2023-06-02', 'Santa Rosa', 'German Pineda', 60, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 54346.99),
(12, 'Mayo', 'Primera Semana', '2023-06-05', 'Villanueva', 'Administracion', 25, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 64929.32),
(13, 'Mayo', 'Segunda Semana', '2023-06-05', 'Villanueva', 'Administracion', 33, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1275122.47),
(14, 'Mayo', 'Primera Semana', '2023-06-05', 'Calpules', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 14455.50),
(15, 'Mayo', 'Segunda Semana', '2023-06-05', 'Calpules', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 52751.83),
(16, 'Mayo', 'Tercera Semana', '2023-06-05', 'Villanueva', 'Administracion', 47, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 115672.40),
(17, 'Mayo', 'Tercera Semana', '2023-06-05', 'Calpules', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 18840.00),
(18, 'Mayo', 'Cuarta Semana', '2023-06-05', 'Villanueva', 'Administracion', 24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 19691.78),
(19, 'Mayo', 'Primera Semana', '2023-06-06', 'Villanueva', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2059.94),
(20, 'Mayo', 'Primera Semana', '2023-06-06', 'Ceiba', 'Administracion', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6573.83),
(21, 'Mayo', 'Primera Semana', '2023-06-06', 'EL Chile', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 557.75),
(22, 'Mayo', 'Primera Semana', '2023-06-06', 'Santa Rosa', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 557.75),
(23, 'Mayo', 'Primera Semana', '2023-06-06', 'Santa Elena', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1115.50),
(24, 'Mayo', 'Primera Semana', '2023-06-06', 'San Matias', 'Administracion', 4, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8411.27),
(25, 'Mayo', 'Segunda Semana', '2023-06-06', 'Santa Elena', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 647.51),
(26, 'Mayo', 'Segunda Semana', '2023-06-06', 'San Matias', 'Administracion', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 4785.15),
(27, 'Mayo', 'Segunda Semana', '2023-06-06', 'Ceiba', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 640.18),
(28, 'Mayo', 'Segunda Semana', '2023-06-06', 'EL Chile', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 2680.37),
(29, 'Mayo', 'Segunda Semana', '2023-06-06', 'Calpules', 'Administracion', 3, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 24706.14),
(30, 'Mayo', 'Segunda Semana', '2023-06-06', 'Villanueva', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3000.00),
(31, 'Mayo', 'Segunda Semana', '2023-06-06', 'Santa Rosa', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 593.21),
(32, 'Mayo', 'Tercera Semana', '2023-06-06', 'Santa Elena', 'Administracion', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6604.82),
(33, 'Mayo', 'Tercera Semana', '2023-06-06', 'San Matias', 'Administracion', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 38897.49),
(34, 'Mayo', 'Tercera Semana', '2023-06-06', 'Ceiba', 'Administracion', 1, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7831.20),
(35, 'Mayo', 'Tercera Semana', '2023-06-06', 'EL Chile', 'Administracion', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 4833.54),
(36, 'Mayo', 'Primera Semana', '2023-06-06', 'Calpules', 'Administracion', 31, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 39646.89),
(37, 'Mayo', 'Tercera Semana', '2023-06-06', 'Calpules', 'Administracion', 31, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 63675.58),
(38, 'Mayo', 'Cuarta Semana', '2023-06-07', 'Villanueva', 'Selvin Amaya', 104, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 25594.69),
(39, 'Mayo', 'Cuarta Semana', '2023-06-08', 'Villanueva', 'Kerin Pineda', 137, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 27606.04),
(40, 'Mayo', 'Cuarta Semana', '2023-06-08', 'Villanueva', 'Guillermo Hernandez', 220, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 63269.71),
(41, 'Mayo', 'Cuarta Semana', '2023-06-09', 'San Matias', 'Juan Gomez', 87, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 90505.37),
(42, 'Mayo', 'Cuarta Semana', '2023-06-09', 'Santa Rosa', 'German Pineda', 66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 58742.20),
(43, 'Mayo', 'Cuarta Semana', '2023-06-10', 'Tulin', 'Reina Aguilar', 59, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 49456.41),
(44, 'Mayo', 'Cuarta Semana', '2023-06-11', 'Guanabano', 'Franklin', 229, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 168242.74),
(45, 'Mayo', 'Cuarta Semana', '2023-06-12', 'Calpules', 'Cristian', 242, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 65704.71),
(46, 'Mayo', 'Cuarta Semana', '2023-06-13', 'Saba', 'Mario', 55, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 41865.40),
(47, 'Mayo', 'Cuarta Semana', '2023-06-14', 'Ceiba', 'Alberto Cuellar', 77, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 56640.35),
(48, 'Mayo', 'Cuarta Semana', '2023-06-15', 'Santa Elena', 'Norma Sanchez', 124, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 65701.86),
(49, 'Junio', 'Primera Semana', '2023-06-17', 'Villanueva', 'Kerin Pineda', 73, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9840.11),
(50, 'Junio', 'Primera Semana', '2023-06-17', 'Villanueva', 'Selvin Amaya', 91, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15830.39),
(51, 'Junio', 'Primera Semana', '2023-06-17', 'Villanueva', 'Guillermo', 162, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 47944.38),
(52, 'Junio', 'Primera Semana', '2023-06-19', 'Santa Elena', 'Norma Sanchez', 83, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 48834.40),
(53, 'Junio', 'Primera Semana', '2023-06-21', 'EL Chile', 'Denis Figueroa', 198, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 46336.12),
(54, 'Junio', 'Primera Semana', '2023-06-21', 'Saba', 'Mario', 68, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 63359.06),
(55, 'Junio', 'Primera Semana', '2023-06-20', 'Santa Rosa', 'German Pineda', 50, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 38689.51),
(56, 'Junio', 'Primera Semana', '2023-06-21', 'Guanabano', 'Franklin', 152, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 117854.42),
(57, 'Junio', 'Primera Semana', '2023-06-21', 'Calpules', 'Cristian', 184, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 54692.24),
(58, 'Junio', 'Primera Semana', '2023-06-21', 'Ceiba', 'Alberto Cuellar', 30, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 28229.07),
(59, 'Junio', 'Primera Semana', '2023-06-21', 'San Matias', 'Juan Gomez', 38, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 29433.12),
(60, 'Junio', 'Segunda Semana', '2023-06-26', 'Villanueva', 'Selvin Amaya', 97, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 23453.28),
(61, 'Junio', 'Segunda Semana', '2023-06-26', 'Villanueva', 'Kerin Pieneda', 104, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 20639.20),
(62, 'Junio', 'Segunda Semana', '2023-06-27', 'Santa Elena', 'Norma Sanchez', 93, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 50998.48),
(63, 'Junio', 'Segunda Semana', '2023-06-27', 'Guanabano', 'Franklin', 175, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 105689.43),
(64, 'Junio', 'Segunda Semana', '2023-06-27', 'Villanueva', 'Guillermo', 219, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 62259.23),
(65, 'Junio', 'Segunda Semana', '2023-06-27', 'Saba', 'Mario', 53, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 34559.00),
(66, 'Junio', 'Segunda Semana', '2023-06-27', 'Ceiba', 'Alberto Cuellar', 40, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 27408.27),
(67, 'Junio', 'Primera Semana', '2023-06-27', 'Tulin', 'Reina Aguilar', 59, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 27139.37),
(68, 'Junio', 'Segunda Semana', '2023-06-27', 'Tulin', 'Reina Aguilar', 35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 35609.13),
(69, 'Junio', 'Segunda Semana', '2023-06-28', 'San Matias', 'Juan Gomez', 41, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 34967.31),
(70, 'Junio', 'Segunda Semana', '2023-06-28', 'Santa Rosa', 'German Pineda', 65, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 57558.87),
(76, 'Junio', 'Segunda Semana', '2023-06-30', 'EL Chile', 'Dennis Figueroa', 154, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 37675.46),
(77, 'Junio', 'Segunda Semana', '2023-06-30', 'Calpules', 'Cristian', 180, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 47228.01),
(78, 'Junio', 'Tercera Semana', '2023-07-01', 'Villanueva', 'Kerin Pineda', 63, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 12763.69),
(79, 'Junio', 'Tercera Semana', '2023-07-01', 'Villanueva', 'Selvin Amaya', 71, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 21503.21),
(80, 'Junio', 'Tercera Semana', '2023-07-01', 'Villanueva', 'Guillermo Hernandez', 116, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 33495.85),
(81, 'Junio', 'Tercera Semana', '2023-07-03', 'San Matias', 'Juan Gomez', 49, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 40699.48),
(82, 'Junio', 'Tercera Semana', '2023-07-04', 'Guanabano', 'Franklin', 182, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 108842.39),
(83, 'Junio', 'Tercera Semana', '2023-07-04', 'Santa Elena', 'Norma Sanchez', 77, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 47545.11),
(84, 'Junio', 'Tercera Semana', '2023-07-04', 'Ceiba', 'Alberto Cuellar', 44, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 38051.17),
(85, 'Junio', 'Tercera Semana', '2023-07-05', 'Calpules', 'Cristian', 203, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 52718.91),
(86, 'Junio', 'Tercera Semana', '2023-07-05', 'Saba', 'Mario', 45, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 33195.18),
(87, 'Junio', 'Primera Semana', '2023-07-05', 'Villanueva', 'Administracion', 49, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 78694.51),
(88, 'Junio', 'Segunda Semana', '2023-07-05', 'Villanueva', 'Administracion', 44, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1304362.18),
(89, 'Junio', 'Tercera Semana', '2023-07-05', 'Villanueva', 'Administracion', 53, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 152155.00),
(90, 'Junio', 'Cuarta Semana', '2023-07-05', 'Villanueva', 'Administracion', 41, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15978.97),
(91, 'Junio', 'Tercera Semana', '2023-07-06', 'EL Chile', 'Juan Carlos', 129, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 41806.72),
(92, 'Junio', 'Tercera Semana', '2023-07-06', 'Tulin', 'Reina Aguilar', 72, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 41788.11),
(93, 'Junio', 'Cuarta Semana', '2023-07-06', 'Villanueva', 'Kerin Pineda', 131, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 30911.87),
(94, 'Junio', 'Cuarta Semana', '2023-07-06', 'Villanueva', 'Selvin Amaya', 93, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 17831.18),
(95, 'Junio', 'Cuarta Semana', '2023-07-07', 'Villanueva', 'Guillermo Hernandez', 247, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 66406.36),
(96, 'Junio', 'Cuarta Semana', '2023-07-10', 'Calpules', 'Cristian', 219, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 58924.29),
(98, 'Junio', 'Cuarta Semana', '2023-07-11', 'Guanabano', 'Franklin', 187, 56414.49, 8268.12, 0.00, 0.00, 0.00, 0.00, 30001.27, 786.14, 0.00, 95470.02),
(99, 'Junio', 'Cuarta Semana', '2023-07-11', 'EL Chile', 'Juan Carlos', 192, 28347.84, 10150.23, 5215.01, 0.00, 1400.00, 0.00, 1750.00, 1102.00, 360.00, 48325.08),
(100, 'Junio', 'Cuarta Semana', '2023-07-11', 'Santa Elena', 'Norma Sanchez', 92, 40724.59, 1996.00, 4814.52, 0.00, 0.00, 0.00, 0.00, 90.00, 2140.00, 49765.11),
(101, 'Julio', 'Primera Semana', '2023-07-13', 'Villanueva', 'Selvin Amaya', 70, 0.00, 0.00, 0.00, 12237.36, 1570.61, 0.00, 0.00, 0.00, 0.00, 13807.97),
(102, 'Julio', 'Primera Semana', '2023-07-13', 'Villanueva', 'Guillermo Hernandez', 152, 0.00, 40700.76, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 40700.76),
(103, 'Julio', 'Primera Semana', '2023-07-14', 'Villanueva', 'Kerin Pineda', 85, 0.00, 0.00, 4697.95, 0.00, 14542.90, 0.00, 0.00, 0.00, 0.00, 19240.85),
(104, 'Julio', 'Primera Semana', '2023-07-18', 'Saba', 'Mario', 53, 47711.30, 4812.36, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 52523.66),
(105, 'Julio', 'Primera Semana', '2023-07-18', 'Santa Rosa', 'German Pineda', 46, 9530.50, 1234.89, 0.00, 0.00, 0.00, 0.00, 0.00, 6757.00, 0.00, 17681.37),
(106, 'Julio', 'Primera Semana', '2023-07-18', 'San Matias', 'Juan GÃ³mez ', 33, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 28293.50, 28293.50),
(107, 'Julio', 'Primera Semana', '2023-07-18', 'Calpules', 'Cristian', 225, 9697.22, 15858.95, 18207.15, 245.00, 0.00, 10533.09, 0.00, 0.00, 189.00, 54730.41),
(108, 'Julio', 'Primera Semana', '2023-07-19', 'Santa Elena', 'Norma Sanchez', 93, 31655.14, 3580.86, 3127.10, 0.00, 0.00, 0.00, 0.00, 1376.25, 2251.40, 41990.75),
(109, 'Julio', 'Primera Semana', '2023-07-19', 'Guanabano', 'Franklin', 219, 106328.12, 5926.01, 0.00, 0.00, 0.00, 0.00, 29651.00, 4000.00, 0.00, 142905.13),
(110, 'Julio', 'Segunda Semana', '2023-07-26', 'Santa Rosa', 'GermÃ¡n Pineda', 79, 59805.97, 3490.89, 0.00, 0.00, 0.00, 0.00, 6995.01, 3070.00, 14000.00, 87361.87),
(111, 'Julio', 'Segunda Semana', '2023-07-25', 'Villanueva', 'Guillermo-Selvin-Kerin', 448, 0.00, 75557.39, 8547.88, 14258.54, 15818.00, 1613.52, 0.00, 0.00, 0.00, 115795.33),
(112, 'Julio', 'Primera Semana', '2023-07-26', 'Tulin', 'Reina Aguilar', 28, 7231.42, 1403.23, 2262.03, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 10896.68),
(113, 'Julio', 'Primera Semana', '2023-07-26', 'Ceiba', 'Alberto Cuellar', 56, 25256.90, 2111.71, 0.00, 0.00, 0.00, 0.00, 4438.50, 0.00, 11452.87, 43259.98),
(114, 'Julio', 'Primera Semana', '2023-07-26', 'EL Chile', 'Juan Carlos', 113, 16901.00, 6189.53, 2179.20, 0.00, 1025.03, 0.00, 1660.00, 1362.00, 0.00, 29316.76),
(115, 'Julio', 'Segunda Semana', '2023-07-26', 'San Matias', 'Juan Gomez', 53, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 37601.93, 37601.93),
(116, 'Julio', 'Segunda Semana', '2023-07-26', 'Saba', 'Mario', 49, 34653.00, 3273.50, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 37926.50),
(117, 'Julio', 'Segunda Semana', '2023-07-26', 'EL Chile', 'Juan Carlos', 112, 19450.98, 4139.40, 1140.00, 0.00, 530.00, 0.00, 2340.00, 492.00, 360.00, 28452.38),
(118, 'Julio', 'Segunda Semana', '2023-07-27', 'Guanabano', 'Franklin', 133, 28139.83, 10360.38, 0.00, 0.00, 0.00, 0.00, 2765.00, 411.70, 0.00, 41676.91),
(119, 'Julio', 'Segunda Semana', '2023-07-27', 'Calpules', 'Cristian', 204, 5888.00, 17761.15, 12769.62, 719.31, 0.00, 13687.91, 0.00, 0.00, 0.00, 50825.99),
(120, 'Julio', 'Segunda Semana', '2023-07-27', 'Ceiba', 'Alberto CuÃ©llar ', 56, 28213.57, 2137.44, 0.00, 0.00, 0.00, 0.00, 6588.20, 0.00, 3590.00, 40529.21),
(121, 'Julio', 'Tercera Semana', '2023-07-27', 'Saba', 'Mario', 70, 36278.70, 4154.46, 0.00, 0.00, 0.00, 0.00, 0.00, 60.00, 0.00, 40493.16),
(122, 'Julio', 'Tercera Semana', '2023-07-27', 'San Matias', 'Juan Gomez', 40, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 29958.89, 29958.89),
(123, 'Julio', 'Tercera Semana', '2023-07-27', 'Guanabano', 'Franklin', 124, 18618.85, 12030.05, 0.00, 0.00, 0.00, 0.00, 268.00, 2280.00, 0.00, 33196.90),
(124, 'Julio', 'Segunda Semana', '2023-07-27', 'Santa Elena', 'Norma Sanchez', 68, 35235.69, 2967.01, 3038.10, 0.00, 0.00, 0.00, 0.00, 473.00, 4294.61, 46008.41),
(125, 'Julio', 'Tercera Semana', '2023-07-27', 'Ceiba', 'Alberto Cuellar', 31, 17412.10, 1833.59, 0.00, 0.00, 0.00, 0.00, 2977.30, 0.00, 3155.80, 25378.79),
(126, 'Julio', 'Tercera Semana', '2023-07-27', 'Santa Elena', 'Norma Sanchez', 84, 39242.38, 2607.48, 2834.89, 0.00, 0.00, 0.00, 0.00, 1110.00, 306.00, 46100.75),
(127, 'Julio', 'Tercera Semana', '2023-07-27', 'Calpules', 'Cristian', 176, 3697.55, 7132.18, 15642.54, 100.02, 0.00, 11218.86, 0.00, 0.00, 462.00, 38253.73),
(128, 'Julio', 'Tercera Semana', '2023-07-31', 'Santa Rosa', 'GermÃ¡n Pineda', 67, 12606.82, 5489.82, 0.00, 0.00, 0.00, 0.00, 172.00, 1125.00, 0.00, 19393.64),
(129, 'Julio', 'Tercera Semana', '2023-07-31', 'Villanueva', 'Selvin Kerin Guillermo', 334, 0.00, 48647.04, 3353.64, 17211.12, 10028.49, 0.00, 0.00, 0.00, 0.00, 89901.48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_recibidas`
--

CREATE TABLE `tab_recibidas` (
  `id` int(11) NOT NULL,
  `s1` varchar(50) DEFAULT NULL,
  `s2` varchar(50) DEFAULT NULL,
  `s3` varchar(50) DEFAULT NULL,
  `s4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` int(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'as', '$2y$10$e6Jn7299P27lU4trsLVo4.Nwmz5If9CS0RjY2Ne5ouK0.X1awuOta', 0, '2023-06-21 13:15:01'),
(2, 'sa', '$2y$10$gIdiMu3bejrRQzohb2ff.uC7lGmE8OvHqtgbtGrG6puDkxNysCvTq', 0, '2023-06-21 16:24:34'),
(3, 'auditoria', '$2y$10$YsWdc7jeo9C57K4XBO4gNufUnSPx3msAVNAnupUe2qtf9HysjP7ce', 0, '2023-06-21 16:25:05'),
(4, 'ad', '$2y$10$GvL8seDyLyaWsbn4Tteek.vRedBKxm5PukM/F8n6AWGK03g4lMjN.', 0, '2023-06-28 08:32:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `errores`
--
ALTER TABLE `errores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tab_recibidas`
--
ALTER TABLE `tab_recibidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `errores`
--
ALTER TABLE `errores`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT de la tabla `tab_recibidas`
--
ALTER TABLE `tab_recibidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
