-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 08:35 AM
-- Server version: 10.4.24-MariaDB-log
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooperativa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bebidas`
--

CREATE TABLE `bebidas` (
  `id_producto` varchar(10) NOT NULL,
  `proveedor` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bebidas`
--

INSERT INTO `bebidas` (`id_producto`, `proveedor`, `nombre`, `cantidad`, `precio`, `descripcion`) VALUES
('11-AGUJA', '1-SAAG', 'Agua de jamaica', 100, 25, 'agua con sabor a jamaica de la michoacana de un litro'),
('12-AGUNA', '2-CHVF', 'Agua natural', 100, 15, 'agua natural de 800 mililitros '),
('13-COCA', '3-BADL', 'Coca Cola', 100, 20, 'coca cola de 600 mililitros '),
('14-AGUHOR', '4-BIJR', 'Agua de horchata', 100, 25, 'agua con sabor a horchata de la michoacana de un litro'),
('15-MIRI', '5-COLM', 'Refresco mirinda', 100, 25, 'refresco con sabor mandarina de 600 mililitros '),
('16-7UP', '6-SAMA', 'Refresco 7UP', 100, 25, 'refresco con sabor limon de 600 mililitros'),
('17-BOIMA', '7-CHHA', 'Boing de mango', 100, 15, 'jugo de mango de 500 mililitros '),
('18-BOIMAN', '8-BADG', 'Boing de manzana', 100, 15, 'jugo de manzana de 500 mililitros '),
('19-BOIGU', '9-BIAR', 'Boing de guayaba', 100, 15, 'jugo de guayaba de 500 mililitros '),
('20-PEP', '10-COPO', 'Refresco Pepsi', 100, 25, 'refresco con sabor cola de 600 mililitros');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `matricula` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`matricula`, `nombre`, `contraseña`) VALUES
('1321124015', 'Marco', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `matricula` varchar(10) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comida`
--

CREATE TABLE `comida` (
  `id_producto` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `costo` float NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comida`
--

INSERT INTO `comida` (`id_producto`, `nombre`, `descripcion`, `costo`, `cantidad`) VALUES
('1-GORCHI', 'Gordita de chicharron', 'gordita frita rellena de chicharon con queso ', 25, 50),
('10-SIN', 'Sincronizadas', '3 sincronizadas con queso blanco y queso amarrilo', 25, 50),
('2-QUETING', 'Quesadilla de tinga', 'quesadilla frita rellena de tinga de pollo con queso', 25, 50),
('3-QUEQUESO', 'Quesadilla de queso', 'quesadilla frita rellena de queso', 25, 50),
('4-QUECHI', 'Quesadilla de chicharron', 'quesadilla frita rellena de chicharon ', 25, 50),
('5-SAND', 'Sandwich', 'sandwich relleno de queso, jamon, lechuga, queso y doble pan', 25, 50),
('6-BAGGPI', 'Bagget de pierna', 'baggett relleno de pierna con mayonesa, jitomate y queso', 25, 50),
('7-BAGGMI', 'Bagget de milanesa', 'baggett relleno de milanesa frita con mayonesa, jitomate y queso', 25, 50),
('8-BAGGSA', 'Bagget de salchicha', 'baggett relleno de salchicha frita con mayonesa, jitomate y queso', 25, 50),
('9-HOTD', 'Hot dog', '2 hot dog', 25, 50);

-- --------------------------------------------------------

--
-- Table structure for table `frituras`
--

CREATE TABLE `frituras` (
  `id_producto` varchar(10) NOT NULL,
  `proveedor` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` float NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frituras`
--

INSERT INTO `frituras` (`id_producto`, `proveedor`, `nombre`, `cantidad`, `costo`, `descripcion`) VALUES
('21-CHEFLA', '2-CHVF', 'Chetos flaming hot', 100, 20, 'Botana Cheetos Xtra Flamin Hot con queso chile y limón 90g'),
('22-CHENA', '2-CHVF', 'Chetos naranjas', 100, 20, 'Botana Cheetos® Nacho de 167gr, es una deliciosa opción hecha de cereal de maíz con sabor a queso'),
('23-CHENA', '7-CHHA', 'Chetos nacho', 100, 20, 'Botana Cheetos Torciditos 145 g'),
('24-SABORI', '1-SAAG', 'Sabritas originales', 100, 20, 'Papas Sabritas original 340 g.'),
('25-RUFF', '6-SAMA', 'Ruffles de queso', 100, 20, 'Papas Ruffles sabor queso 185 g.'),
('26-SABADO ', '6-SAMA', 'Sabritas adobadas', 100, 20, '¡Disfruta unas ricas papas Sabritas Adobadas, en cualquier lugar y a cualquier hora del día! ¡Compártelas con quien tú quieras! - Papas fritas sabor adobo.'),
('27-DORNA', '3-BADL', 'Doritos nacho', 100, 20, 'Botana Doritos nacho con queso y sabor a chile 223 g.'),
('28-CHIPJA', '8-BADG', 'Chips jalapeños', 100, 20, 'Papas fritas Barcel Chips sabor jalapeño 100 g'),
('29-CHIPFU', '9-BIAR', 'Chips fuego', 100, 20, 'Papas fritas Barcel Chips fuego 55 g a un súper precio'),
('30-TORE ', '5-COLM', 'Toreadas', 100, 20, 'Papas Barcel Toreadas sabor habanero 170 g a un súper precio');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` varchar(10) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `marca`, `nombre`, `apellido`) VALUES
('1-SAAG', 'sabritas', 'alberto', 'gonzales'),
('10-COPO', 'coca-cola', 'pablo ', 'ortiz'),
('2-CHVF', 'chetos', 'valentin', 'flores'),
('3-BADL', 'barcel', 'daniel ', 'lopez'),
('4-BIJR', 'bimbo ', 'jose ', 'ruiz'),
('5-COLM', 'coca-cola', 'luis ', 'martin'),
('6-SAMA', 'sabritas', 'mario ', 'alvarez'),
('7-CHHA', 'chetos', 'hugo ', 'acosta '),
('8-BADG', 'barcel', 'daniel ', 'garcia'),
('9-BIAR', 'bimbo ', 'adrian ', 'rodriguez ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `frituras`
--
ALTER TABLE `frituras`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bebidas`
--
ALTER TABLE `bebidas`
  ADD CONSTRAINT `bebidas_ibfk_2` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Constraints for table `frituras`
--
ALTER TABLE `frituras`
  ADD CONSTRAINT `frituras_ibfk_2` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`id_proveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
