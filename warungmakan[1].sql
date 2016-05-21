-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2016 at 05:01 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `warungmakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `subjudul`, `deskripsi`, `gambar`, `caption`) VALUES
(1, 'Soto Ayam', 'Makanan Berkuah', 'Soto Ayam adalah makanan khas Indonesia yang berupa sejenis sup ayam dengan  kuah yang berwarna kekuningan.', 'soto.jpg', 'Soto Indonesia'),
(2, 'Masakan Pecel', 'Makanan dengan Bumbu Kacang', 'Pecel adalah makanan yang menggunakan bumbu sambal kacang sebagai bahan utamanya yang dicampur dengan aneka jenis sayuran.', 'pecel.jpg', 'Pecel Indonesia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
