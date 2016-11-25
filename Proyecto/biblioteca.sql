-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 02:07 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `idEstudiante` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `idLugar` int(11) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `matricula` varchar(30) NOT NULL,
  `tipo_visita` varchar(30) NOT NULL,
  `hora_entrada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hora_salida` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `centro` varchar(100) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`idEstudiante`, `nombre`, `apellido`, `idLugar`, `telefono`, `matricula`, `tipo_visita`, `hora_entrada`, `hora_salida`, `centro`, `idUsuario`, `motivo`) VALUES
(1, 'Samuel Bolivar', 'Rivas Tapias', 1, '809-868-2687', '20152904', '', '2016-11-11 10:43:35', '2016-11-11 10:43:35', 'ITLA', 1, 'redes'),
(2, 'Benjamin', 'Calderon', 1, '809-568-7763', '20153253', 'i', '2016-11-11 10:43:35', '2016-11-11 10:43:35', 'ITLA', 1, 'redes'),
(3, 'Roy Wolf', 'Steven', 1, '829-338-9554', '20153021', 'i', '2016-11-11 10:51:28', '2016-11-11 10:51:28', 'ITLA', 1, 'Software'),
(4, 'Job Misael', 'Genao', 2, '809-620-7676', '00121227', 'i', '2016-11-11 10:51:28', '2016-11-11 10:51:28', 'ITLA', 1, 'Manofactura'),
(5, 'Erick Joel', 'Acevedo Meia', 2, '890-301-4549', '', 'e', '2016-11-11 10:59:53', '2016-11-11 10:59:53', 'Santa Lucia', 1, 'Tarea'),
(6, 'Miguel Angel', 'Rondon', 2, '809-436-2538', '', 'e', '2016-11-11 10:59:53', '2016-11-11 10:59:53', 'Santa Lucia', 1, 'Tarea'),
(7, 'Jose David', 'Santana Mejia', 2, '829-957-5102', '', 'e', '2016-11-11 11:05:13', '2016-11-11 11:05:13', 'Invi Cea', 1, 'Tarea'),
(8, 'Katia', 'Fernandez Zaiz', 2, '809-495-5463', '20142232', 'i', '2016-11-11 11:05:13', '2016-11-11 11:05:13', 'ITLA', 1, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `lugar`
--

CREATE TABLE `lugar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lugar`
--

INSERT INTO `lugar` (`id`, `nombre`) VALUES
(1, 'Santo Domingo'),
(2, 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `apellido`, `usuario`, `password`) VALUES
(1, 'Adriano', 'Brito', 'abrito', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idLugar` (`idLugar`);

--
-- Indexes for table `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `idEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`idLugar`) REFERENCES `lugar` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
