-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 22, 2017 at 11:42 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octopus`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_Clientes` int(11) NOT NULL,
  `Nombre_Cliente` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Apellido_Paterno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Apellido_Materno` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Direccion` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Telefono` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Correo` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`ID_Clientes`, `Nombre_Cliente`, `Apellido_Paterno`, `Apellido_Materno`, `Direccion`, `Telefono`, `Correo`) VALUES
(8983, 'Oscar', 'Reyes', 'Del Angel', 'Bolivia #13A', '4622007917', 'ryesoscar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `ID_Empleado` int(11) NOT NULL,
  `Nombre_Empleado` varchar(50) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Puesto` varchar(30) NOT NULL,
  `Apellido_Materno` varchar(50) NOT NULL,
  `Apellido_Paterno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `ID_Imagenes` int(11) NOT NULL,
  `Formato` varchar(30) NOT NULL,
  `ID_Solicitudes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `ID_Material` int(11) NOT NULL,
  `Nombre_Material` varchar(50) NOT NULL,
  `Cantidad_porpieza` int(11) NOT NULL,
  `Costo_por_material` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `ID_Solicitudes` int(11) NOT NULL,
  `Costo` int(11) NOT NULL,
  `Fecha_de_solicitud` date NOT NULL,
  `ID_Tipo_Trabajo` int(11) NOT NULL,
  `ID_Empleado` int(11) NOT NULL,
  `ID_Clientes` int(11) NOT NULL,
  `ID_Material` int(11) NOT NULL,
  `Descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_trabajo`
--

CREATE TABLE IF NOT EXISTS `tipo_trabajo` (
  `ID_Tipo_Trabajo` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Clientes`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_Empleado`);

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`ID_Imagenes`),
  ADD KEY `ID_Solicitudes` (`ID_Solicitudes`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`ID_Material`);

--
-- Indexes for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`ID_Solicitudes`),
  ADD KEY `ID_Tipo_Trabajo` (`ID_Tipo_Trabajo`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_Clientes` (`ID_Clientes`),
  ADD KEY `ID_Material` (`ID_Material`),
  ADD KEY `ID_Material_2` (`ID_Material`);

--
-- Indexes for table `tipo_trabajo`
--
ALTER TABLE `tipo_trabajo`
  ADD PRIMARY KEY (`ID_Tipo_Trabajo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `foreing_solicitudes` FOREIGN KEY (`ID_Solicitudes`) REFERENCES `solicitudes` (`ID_Solicitudes`);

--
-- Constraints for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `foreing_cliente` FOREIGN KEY (`ID_Clientes`) REFERENCES `cliente` (`ID_Clientes`),
  ADD CONSTRAINT `foreing_empleado` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleados` (`ID_Empleado`),
  ADD CONSTRAINT `foreing_Material` FOREIGN KEY (`ID_Material`) REFERENCES `material` (`ID_Material`),
  ADD CONSTRAINT `foreing_tipotrabajo` FOREIGN KEY (`ID_Tipo_Trabajo`) REFERENCES `tipo_trabajo` (`ID_Tipo_Trabajo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
