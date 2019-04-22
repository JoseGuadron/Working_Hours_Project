-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2019 a las 08:19:09
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `keiserworkinghoursdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `Name` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `DepartmentID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`Name`, `DepartmentID`) VALUES
('IT', 1),
('Financial Aid', 5),
('Record Office', 5),
('Admission', 6),
('SGA', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_students`
--

CREATE TABLE `area_students` (
  `AreaID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `Working Hours` float NOT NULL,
  `Date` date NOT NULL,
  `Time_In` time NOT NULL,
  `Time_Out` time NOT NULL,
  `month` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `area_students`
--

INSERT INTO `area_students` (`AreaID`, `StudentID`, `StatusID`, `Working Hours`, `Date`, `Time_In`, `Time_Out`, `month`) VALUES
(0, 6208013, 1, 0.08, '2019-04-21', '16:57:00', '17:02:00', 'April'),
(0, 6208013, 1, 0.72, '2019-04-21', '17:05:00', '17:48:00', 'April'),
(0, 8299653, 1, 0.55, '2019-04-21', '17:05:00', '17:38:00', 'April'),
(0, 7720366, 1, 0.58, '2019-04-21', '17:05:00', '17:40:00', 'April'),
(0, 7735312, 1, 0, '2019-04-21', '23:04:00', '23:21:00', 'April'),
(0, 7735312, 1, 0, '2019-04-21', '23:10:00', '23:21:00', 'April'),
(0, 8299653, 1, 0, '2019-04-21', '23:11:00', '23:14:00', 'April'),
(0, 7735312, 1, 0, '2019-04-21', '23:20:00', '23:21:00', 'April'),
(0, 7001092, 1, 0, '2019-04-21', '23:25:00', '23:25:00', 'April'),
(0, 7720366, 1, 0.02, '2019-04-21', '23:27:00', '23:28:00', 'April'),
(0, 6208013, 1, 0.07, '2019-04-21', '23:40:00', '23:44:00', 'April'),
(0, 6208013, 1, 0, '2019-04-21', '23:44:00', '23:44:00', 'April'),
(0, 7356683, 1, 0.02, '2019-04-21', '23:48:00', '23:49:00', 'April'),
(0, 7735312, 1, 0.02, '2019-04-21', '23:49:00', '23:50:00', 'April'),
(0, 8299653, 1, 0, '2019-04-21', '23:54:00', '23:54:00', 'April'),
(0, 8299653, 1, 0.03, '2019-04-21', '23:56:00', '23:58:00', 'April'),
(0, 8299653, 1, 0.02, '2019-04-22', '00:03:00', '00:04:00', 'April');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `DepartmentID` int(10) NOT NULL,
  `Name` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`DepartmentID`, `Name`) VALUES
(1, 'IT'),
(2, 'Residence Life'),
(3, 'Admissions'),
(4, 'Marketing'),
(5, 'Business office'),
(6, 'Student Life');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `StudentID` int(10) NOT NULL,
  `Name` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `LastName` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`StudentID`, `Name`, `LastName`) VALUES
(6208013, 'Alejandra', 'Arteaga'),
(6585778, 'Mariana', 'Cordova'),
(6931671, 'Dax', 'Granados'),
(7001092, 'Haniel', 'Jarquin'),
(7116750, 'Mario', 'Lopez'),
(7352045, 'Samir', 'Hernandez'),
(7356683, 'Alejandro', 'Lebron'),
(7399091, 'Michael', 'Vargas'),
(8299653, 'Wilfredo', 'Hernandez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `StudentID` int(10) NOT NULL,
  `Name` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `UserName` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `Password` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`StudentID`, `Name`, `UserName`, `Password`, `is_admin`) VALUES
(1111111, 'Carolina Carvajal', 'carolinacarvajal', '29c3eea3f305d6b823f562ac4be35217', 1),
(6208013, 'Alejandra Arteaga', 'alejandraarteaga', 'bfb7d37b313a772832a490c2c9343b2d', 0),
(6585778, 'Mariana Cordova', 'marianacordova', '7f6fe3dc788fa1f8c1c6c4b531d9b882', 0),
(6931671, 'Dax Granados', 'daxgranados', '75ae81eef3549a3dc509bfdc04af9684', 0),
(7001092, 'Haniel Jarquin', 'hanieljarquin', '2f186fdf6da933a64421b217b294bd6b', 0),
(7116750, 'Mario Lopez', 'mariolopez', '786e0c69b14de35744ebb657a5aa0ab7', 0),
(7352045, 'Samir Hernandez', 'samirhernandez', '8a6fba745debf684222cd9b1524627d2', 0),
(7356683, 'Alejandro Lebron', 'alejandrolebron', '3f39db3bdde4527d34ef4a1c2c968865', 0),
(7399091, 'Michael Vargas', 'michaelvargas', ' f39e70b1bf81fd8ca2b8383f51c84157', 0),
(7720366, 'José Guadrón', 'joseguadron', 'fe9f2f3dacb763b46c9a2760b540a421', 1),
(7735312, 'Gerson Rodriguez', 'gersonrodriguez', 'e2a8c262000e3204ba16f244d7ff2cc5', 1),
(8299653, 'Wilfredo Hernandez', 'wilfredohernandez', 'cc16b890b22623e12adf5c13feefafca', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `Fk_DepartmentID` (`DepartmentID`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `DepartmentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `Fk_DepartmentID` FOREIGN KEY (`DepartmentID`) REFERENCES `department` (`DepartmentID`);

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `Fk_Student_UserID` FOREIGN KEY (`StudentID`) REFERENCES `user` (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
