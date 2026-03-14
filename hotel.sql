-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2026 at 04:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id` int(11) NOT NULL,
  `cliente` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `habitacion` int(11) DEFAULT NULL,
  `tipo_habitacion` varchar(50) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `numero_huespedes` int(11) DEFAULT NULL,
  `metodo_pago` varchar(50) DEFAULT NULL,
  `estado_reservacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservaciones`
--

INSERT INTO `reservaciones` (`id`, `cliente`, `telefono`, `email`, `habitacion`, `tipo_habitacion`, `fecha_entrada`, `fecha_salida`, `numero_huespedes`, `metodo_pago`, `estado_reservacion`) VALUES
(1, 'Juan Perez', '2221234567', 'juan@gmail.com', 1, 'Individual', '2026-03-20', '2026-03-22', 1, 'Efectivo', 'Confirmada'),
(2, 'Maria Lopez', '2229876543', 'maria@gmail.com', 19, 'Familiar', '2026-03-18', '2026-03-21', 2, 'Efectivo', 'Confirmada'),
(3, 'Carlos Gomez', '2225551234', 'carlos@gmail.com', 15, 'Suite', '2026-03-25', '2026-03-27', 3, 'Tarjeta', 'Confirmada'),
(4, 'Ana Torres', '2221112233', 'ana@gmail.com', 3, 'Individual', '2026-03-19', '2026-03-20', 1, 'Transferencia', 'Confirmada'),
(5, 'Luis Ramirez', '2224445566', 'luis@gmail.com', 9, 'Doble', '2026-03-30', '2026-04-02', 4, 'Tarjeta', 'Cancelada'),
(8, 'Juan Perez', '2224445566', 'angie.2024110002@metropoli.edu.mx', 8, 'Doble', '2026-03-21', '2026-03-22', 3, 'Efectivo', 'Confirmada'),
(10, 'Juan Perez', '2221234567', 'angie.2024110002@metropoli.edu.mx', 1, 'Individual', '2026-03-28', '2026-03-29', 1, 'Tarjeta', 'Confirmada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
