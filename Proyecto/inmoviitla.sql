-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 02:29 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmoviitla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `usuario`, `clave`) VALUES
(1, 'Adriano', 'abrito', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `id_inmueble` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anuncio`
--

INSERT INTO `anuncio` (`id`, `precio`, `descripcion`, `Fecha`, `id_usuario`, `id_inmueble`) VALUES
(2, 200000, 'fjffjfj', '2016-11-28 00:21:01', 2, 1234),
(3, 200000, 'fjffjfj', '2016-11-28 00:27:24', 2, 4404),
(4, 1200000, 'Apartamento de dos habitaciones segundo nivel', '2016-11-28 01:06:43', 2, 1111),
(5, 3000000, 'Casa de tres habitaciones con marquesina y terraza', '2016-11-28 01:08:24', 2, 2222),
(6, 1000000, 'Mejora de 400 kilometros cuadaros', '2016-11-28 01:12:52', 2, 3333);

-- --------------------------------------------------------

--
-- Table structure for table `inmueble`
--

CREATE TABLE `inmueble` (
  `numero_parcela` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `foto` blob NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmueble`
--

INSERT INTO `inmueble` (`numero_parcela`, `tipo`, `titulo`, `Direccion`, `foto`, `descripcion`, `id_usuario`) VALUES
(1111, 'Con titulo', 'Apartamento', 'Calle la fuente #12', '', 'Apartamento de dos habitaciones segundo nivel', 2),
(1234, 'gggg', 'Mejora', 'l;kd', 0x6c6c6c6c, 'fjffjfj', 2),
(2222, 'con titulo', 'Casa', 'Ensanche la fe', '', 'Casa de tres habitaciones con marquesina y terraza', 2),
(3333, 'con titulo', 'Mejora', 'Juan dolio', '', 'Mejora de 400 kilometros cuadaros', 2),
(4404, 'gggg', 'Mejora', 'l;kd', '', 'fjffjfj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `Mas_informacion` varchar(100) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `celular`, `Mas_informacion`, `clave`) VALUES
(2, 'Adriano', 'Brito', '40220903005', '20082813@itla.edu.do', '8296611116', '8296611116', 'bababba', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usurio` (`usuario`);

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_inmueble` (`id_inmueble`);

--
-- Indexes for table `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`numero_parcela`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_usuario_2` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `anuncio_ibfk_2` FOREIGN KEY (`id_inmueble`) REFERENCES `inmueble` (`numero_parcela`) ON UPDATE CASCADE;

--
-- Constraints for table `inmueble`
--
ALTER TABLE `inmueble`
  ADD CONSTRAINT `inmueble_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
