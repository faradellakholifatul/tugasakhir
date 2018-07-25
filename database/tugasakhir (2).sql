-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 02:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Etikal'),
(2, 'Generic'),
(4, 'Lainnya'),
(5, 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `fk_user`, `tanggal`, `status`) VALUES
(1, 3, '2018-07-24', 'belum di bayar'),
(2, 3, '2018-07-24', 'sudah di bayar'),
(3, 3, '2018-07-24', 'sudah di bayar'),
(4, 3, '2018-07-24', 'belum di bayar'),
(5, 3, '2018-07-24', '1'),
(6, 3, '2018-07-24', '1'),
(7, 3, '2018-07-24', '1'),
(8, 3, '0000-00-00', '1'),
(9, 3, '0000-00-00', '1'),
(10, 3, '0000-00-00', '1'),
(11, 3, '0000-00-00', 'sudah di bayar'),
(12, 3, '0000-00-00', '1'),
(13, 3, '0000-00-00', '1'),
(14, 3, '2018-07-24', '1'),
(15, 3, '2018-07-24', '1'),
(16, 3, '2018-07-24', '1'),
(17, 3, '2018-07-24', '1'),
(18, 3, '2018-07-24', '1'),
(19, 3, '2018-07-24', '1'),
(20, 3, '2018-07-24', '1'),
(21, 3, '2018-07-24', '1'),
(22, 3, '2018-07-24', '1'),
(23, 16, '2018-07-24', '1'),
(24, 16, '2018-07-24', '1'),
(25, 3, '2018-07-24', '1'),
(26, 16, '2018-07-24', '0'),
(27, 16, '2018-07-24', 'belum di bayar'),
(28, 16, '2018-07-24', '1'),
(29, 16, '2018-07-24', 'belum di bayar');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `fk_order` int(11) NOT NULL,
  `fk_produk` int(11) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `fk_order`, `fk_produk`, `jml`) VALUES
(1, 0, 1, 3),
(2, 3, 4, 1),
(3, 4, 4, 1),
(4, 4, 5, 2),
(5, 5, 5, 3),
(6, 5, 3, 2),
(7, 6, 5, 4),
(8, 6, 3, 2),
(9, 7, 5, 1),
(10, 8, 5, 2),
(11, 9, 5, 3),
(12, 10, 5, 3),
(13, 11, 5, 3),
(14, 12, 5, 3),
(15, 13, 5, 3),
(16, 14, 5, 3),
(17, 0, 0, 0),
(18, 0, 0, 0),
(19, 23, 5, 1),
(20, 23, 3, 1),
(21, 24, 2, 5),
(22, 25, 2, 1),
(23, 26, 1, 1),
(24, 27, 2, 1),
(25, 28, 3, 1),
(26, 29, 1, 27);

--
-- Triggers `order_detail`
--
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `order_detail` FOR EACH ROW update produk set stok=stok-NEW.jml where id_produk=NEW.fk_produk
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text,
  `komposisi` varchar(200) DEFAULT NULL,
  `indikasi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `kategori`, `stok`, `harga`, `deskripsi`, `komposisi`, `indikasi`) VALUES
(1, 'Topgesicc', 'ETH-161.jpg', 2, -1, 114950, 'Mefenami acid is aa non streroidal anti-inflammatory drug, the mechanism is through the inhibition of prostaglandin synthesis in body tissue by obstructing cyclooxygenase enzyme, and by that it has analgesic effect, anti-inflammatory and antipyretic', 'Each film coate tablet contains of : Mefenamic aciddd', 'For the relief mild t moderate pain such as headachee, toothache, primary dysmenorrheal, including pain of traumatic, muscular and post operative painn'),
(2, 'Protofen', 'protofen.jpg', 1, 13, 229598, 'Ketoprofen is an anti-inflammatory non steroid agent with anti-inflammatory, analgesic and antipyretic properties. As an anti inflammatory, it inhibits the syntesis of prostaglandin Peak concentration of oral administration is rech within 0.5', 'Each film coated tablet contains of : Ketoprofen', 'For treatment the symptoms of rheumatoid arthritis, ankylosing spondylitis, acute gout and osteoarthritis'),
(3, 'Neurodial', 'NEURODIAL.jpg', 2, 4, 115000, 'Methampyron is a potent and prompt-acting analgesic. Directly absorbed from GI with a half life 1-4 hours Diazepam is an anti-anxiety (minor tranquilizer), sedative, musle relaxan, anti convulsive drug and amnestic drug Diazepam is metabolized in liver and binded up with the receptor in spinal cord, cerebellum, limbic system and cerebral cortex. It has anxiolytic and hypnotic activity. Peak plasma concentration is 15', 'Each caplet contains of : Methampyrone', 'To relief mild and severe pain, especially colic or spasm and aching pain after operation which need a traquilizer combinations'),
(4, 'Klotaren', 'klotaren.jpg', 1, 98, 2965, 'Klotaren contains of a phenilacetic acid derivative which has analgesic antipyretic, and anti-inflammatory actions. This drugs is used mainly in the treatment of rheumatoid arthritis and other rheumatoid disorder', 'Each enteric coated tablets contains of : Diclofenac sodium', 'Relieving pain, stiffness and inflammations of rheumatoid arthritis and other rheumatic disorder, and degenerative formas of rheumatism such as osteoarthritis'),
(5, 'Doveri', 'Doveri.jpg', 4, -11, 65000, 'Doveri powder contains of morphine anhydrate, that has analgesic activity. This medicine is also used to depressed cough reflex', 'Pulvis Doveri Each gram contains Pulcis Opii 100 mg Pulvis Ipecac radix 100 mg Potassium Sulphate 800 mg - Doveri 100 mg Each tablet contains Pulvis Doveri 100 mg - Doveri 150 mg Each tablet contains ', 'Influenzae - Cough reflex suppression - As sedative agent - As Expectorant agent'),
(6, 'coba', 'Doveri1.jpg', 1, 25, 15000, 'mereka sedang menari', 'Each film coated tablet contains of : Mefenamic acid', 'Each film coated tablet contains of : Mefenamic acid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `privilege` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `notelp`, `username`, `password`, `privilege`) VALUES
(1, NULL, NULL, NULL, NULL, 'admin', '1234admin', 'Administrator'),
(3, 'Mrs. A', 'malangg', 'olif@gmail.com', '086', 'fara', 'faraa', 'User'),
(5, 'Faradella', 'mlg', 'fara@gmail.com', '089765', 'faradella', 'faradella', 'User'),
(6, 'tes', 'mlg', 'faisal@f', '098', 'tes', 'tes', 'User'),
(7, 'abong', 'mlg', 'aboh', '089765', 'abong', 'abong', 'User'),
(8, 'Mrs. A', 'malangg', 'olif@gmail.com', '089765', 'user', 'user', 'User'),
(11, 'tes', 'malangg', 'olif@gmail.com', '089765', 'tes1', 'tes1', 'User'),
(12, 'Mrs. A', 'malangg', 'roy@achmad', '086', 'pengguna', 'pengguna', 'User'),
(13, 'Faradella', 'malangg', 'roy@achmad', '089765', 'dela', 'dela', 'User'),
(14, 'Mrs. A', 'malangg', 'roy@achmad', '089765', 'roy', 'roy', 'User'),
(15, 'Mrs. B', 'malangg', 'fara@gmail.com', '086', 'ya', 'ya', 'User'),
(16, 'olif', 'batu', 'olif@gmail.com', '082139380830', 'olif', 'olif', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`fk_user`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk` (`fk_produk`),
  ADD KEY `fk_order` (`fk_order`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_kategori` (`kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori_produk` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
