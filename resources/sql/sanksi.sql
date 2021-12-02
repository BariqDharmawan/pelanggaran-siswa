-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebmutiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanksi`
--

CREATE TABLE `sanksi` (
  `no_sanksi` int(11) NOT NULL,
  `rentang` varchar(10) NOT NULL,
  `tindakan_sekolah` text NOT NULL,
  `sanksi` text NOT NULL,
  `pelaksana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanksi`
--

INSERT INTO `sanksi` (`no_sanksi`, `rentang`, `tindakan_sekolah`, `sanksi`, `pelaksana`) VALUES
(1, 's.d 40', 'Berkomunikasi dengan orang tua/wali siswa dan memberikan bimbingan serta perhatian.', 'Teguran tertulis dan surat perjanjian pertama.', 'Wali Kelas'),
(2, '41 s.d 70', 'Berkomunikasi dengan orang tua/wali siswa dan memberikan bimbingan serta perhatian.', 'Teguran tertulis dan surat perjanjian kedua.', 'Wali Kelas dan BK'),
(3, '71 s.d 99', 'Berkomunikasi dengan orang tua/wali siswa dan memberi bimbingan serta perhatian.', 'Surat perjanjian tertulis bermaterai dan skorsing maksimal 3 hari efektif, diketahui Kepala Sekolah.', 'Wali Kelas dan BK Wakasek Kesiswaan diketahui Kepala Sekolah'),
(4, 's.d 100', 'Berkomunikasi dengan orang tua/wali siswa dan memberi bimbingan serta perhatian.', 'Dikembalikan kepada orang tua secara sepihak.', 'Pleno Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanksi`
--
ALTER TABLE `sanksi`
  ADD PRIMARY KEY (`no_sanksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanksi`
--
ALTER TABLE `sanksi`
  MODIFY `no_sanksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
